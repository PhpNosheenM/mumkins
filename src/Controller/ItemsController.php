<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\View\View;
use Cake\View\Helper\HtmlHelper;
use Cake\Event\Event;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function uploadImage()
    {

            
        $this->viewBuilder()->layout('index_layout');
        $item_images = $this->Items->ItemRows->ItemImages->newEntity();

        if ($this->request->is(['post', 'put'])) {
            //pr($this->request->getData());exit;
            $datas=$this->request->getData('item_image');
            foreach ($datas as $key => $data) {
                $item_row_id=$this->request->getData('item_row_id');
                $item_id=$this->request->getData('item_id');
                $styles=$this->Items->get($item_id);
				$rows=$this->Items->ItemRows->get($item_row_id);
                $colors=$this->Items->ItemRows->Colors->get($rows->color_id);
                $color_name=strtoupper($colors->name);
                //pr($color_name);exit;
                $datas[$key]['item_row_id']=$item_row_id;
                //pr($datas);
                $file = $datas[$key]['name']; //put the data into a var for easy use
                        //pr($file);exit;
                        $ext = substr(strtolower(strrchr($file, '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                       // if(in_array($ext, $arr_ext))
                       // {
                        
                            //$uploads_dir =new Folder();
                           // $uploads_dir->create(WWW_ROOT . '/img/Items/'.$item_id.'/'.$item_row_id);
                           // move_uploaded_file($datas[$key]['tmp_name'],'img/Items/'.$item_id.'/'.$item_row_id.'/'.$img_name);
                               
							$keyname = 'Items/'.$styles->style_no.'/'.$color_name.'/'.$img_name;
							$this->AwsFile->putObjectFile($keyname,$datas[$key]['tmp_name'],$datas[$key]['type']);
                                   

                              $datas[$key]['image_name']='Items/'.$styles->style_no.'/'.$color_name.'/'.$img_name;
                              

                       // }

            }
           // pr($datas);exit;
            $Item_Image = $this->Items->ItemRows->ItemImages->newEntities($datas);
            if ($this->Items->ItemRows->ItemImages->saveMany($Item_Image)) {

                $this->Flash->success(__('The SKU Images has been saved.'));

                return $this->redirect(['controller'=>'Items','action' => 'uploadImage']);
            }
            //pr($transaction);exit;
            $this->Flash->error(__('The SKU Images could not be saved. Please, try again.'));
        }

        $item_image_views=$this->Items->ItemRows->ItemImages->find()->where(['ItemImages.is_deleted'=>0])->contain(['ItemRows'=>['Items']])->group(['item_row_id']);
        //pr($item_image_views->toArray());exit;
        $style_nos = $this->Items->find()->where(['is_deleted'=>0]);
        $style="";
        foreach ($style_nos as $styleno) {
            $style_no=$styleno->style_no;
            $styles[$styleno->id] = $style_no;
        }
          $this->set(compact('styles','item_images','item_image_views'));
    }
    public function findsku($item_id=null)
    {
        
            $items=$this->Items->ItemRows->find()->where(['ItemRows.item_id '=>$item_id]);
            ?>
                    <option>--Select--</option>
                    <?php foreach($items as $show){ ?>
                        
                        <option value="<?= $show->id ?>"><?= $show->sku ?></option>
                    <?php } ?>
            <?php
        
        exit;  
    }
    public function getSubcategory($category_id=null)
    {
       $sub_category=$this->Items->Categories->find()->where(['Categories.parent_id'=>$category_id]);
        ?>
                    <option>--Select</option>
                    <?php foreach($sub_category as $show){ ?>
                        
                        <option value="<?= $show->id ?>"><?= $show->name ?></option>
                    <?php } ?>
            <?php
                 
        exit;  
    }
     public function salesRateUpdate()
    {
        $this->viewBuilder()->layout('index_layout');
        $item_rows = $this->Items->ItemRows->newEntity();
        //$items=$this->Items->ItemRows->find()->where(['is_deleted'=>0])->contain(['Items'=>['Categories']]);
        $category_id=$this->request->query('category_id');
        $item_id=$this->request->query('item_id');
         if($category_id!=null)
            {
                $items=$this->Items->ItemRows->find()->where(['Items.category_id'=>$category_id])->contain(['Items'=>['Categories'=>['ParentCategories']]]);
            } 
        if($item_id!=null)
            {
                $items=$this->Items->ItemRows->find()->where(['Items.id'=>$item_id])->contain(['Items'=>['Categories'=>['ParentCategories']]]);
            } 
        if (($category_id!=null)&&($item_id!=null)) {
            $items=$this->Items->ItemRows->find()->where(['Items.category_id'=>$category_id,'Items.id'=>$item_id])->contain(['Items'=>['Categories'=>['ParentCategories']]]);
        }
        // if (($category_id==null)&&($item_id==null)) {
        //     $items=$this->Items->ItemRows->find()->contain(['Items'=>['Categories'=>['ParentCategories']]]);
        // }


        if ($this->request->is(['post', 'put'])) {
            $item_variation=$this->request->getData();
            //pr($item_variation);exit;
            foreach($item_variation['item_rows'] as $itemVariations){
                //pr($itemVariations['print_rate']);exit;
                $itemVariation=(object)$itemVariations;
                $query = $this->Items->ItemRows->query();
                    //$query->update(['promote_date', 'due_amount', amount', 'discount', 'end_date'])
                    $query->update()
                            ->set([
                            'print_rate' => $itemVariations['print_rate'],
                            'stock' => $itemVariations['stock'],
                            'discount' => $itemVariations['discount'],
                            'sale_rate' => $itemVariations['sale_rate']
                            ])
                            ->where(['id'=>$itemVariations['id']])
                    ->execute();
            }

            
            $this->Flash->success(__('Item rates have updated successfully.'));
        }

        $categories = $this->Items->Categories->find()->where(['Categories.parent_id IS NOT NULL'])->contain(['ParentCategories'])->order(['Categories.name']);
        $name="";
        foreach ($categories as $cat) {
            $name=$cat->parent_category->name.' >'.$cat->name;
            $catsub[$cat->id] = $name;
        }
        $items_list=$this->Items->find('list')->where(['is_deleted'=>0]);
        $this->set(compact('items','item_rows','catsub','items_list'));
    }

    public function index()
    {
		
		
		
		
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Categories', 'ItemRows', 'ProductSections']
        ]);

        $this->set('item', $item);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		/* $ItemRows=$this->Items->ItemRows->find()->contain(['Items','Colors']);
		//pr($ItemRows->toArray());
		foreach($ItemRows as $ItemRow){
			
				$id=$ItemRow->id;
				$color_name=strtoupper($ItemRow->color->name);
				$style_no=$ItemRow->item->style_no;
				$feature_image="Items/".$style_no."/".$color_name."/1.jpg";

				$query = $this->Items->ItemRows->query();
				$query->update()
				->set(['feature_image' =>$feature_image])
				->where(['id' =>$id])
				->execute();
			}
 */
		//$colors=$this->Items->ItemRows->Colors->get($rows->color_id);
		//$color_name=strtoupper($colors->name);

		
		
		
        $this->viewBuilder()->layout('index_layout');
        // $i=$this->Items->find()
        // ->Select(['Items.id'])
        // ->contain(['ItemRows'=>function($q)
        //     {
        //         return $q->Select('SUM(ItemRows.quantity)')->group('ItemRows.item_id');
        //     }]);
        // pr($i->toArray());exit;

        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
           // pr($this->request->getData());
             $images=$this->request->getData('item_rows');
            //pr($images);exit;
            
                    //pr($img);exit;
            //$item['item_rows']->feature_image=$img;
            $item = $this->Items->patchEntity($item, $this->request->getData());
            $item->item_rows=[];
            //pr($item);exit;
            if ($this->Items->save($item)) {
               
          
            foreach ($images as $item_row) {
               // $upload_dir = FULL_ROOT . "/uploads/blog/";
                 // pr($item_row['sku']);exit;
                //pr($item_row['color_id']);exit;
            $colors=$this->Items->ItemRows->Colors->get($item_row['color_id']);
            $color_name=strtoupper($colors->name);
             //pr($color_name);exit;
             $file = $item_row['feature_image']; //put the data into a var for easy use
                        //pr($file);
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                        
                           // $uploads_dir =new Folder();
                           //  $uploads_dir->create(WWW_ROOT . '/img/Items/'.$item->style_no.'/'.$color_name);
                           //  pr($uploads_dir);exit;
                           // move_uploaded_file($file['tmp_name'],'img/Items/'.$item->style_no.'/'.$img_name);.
                               
							$keyname = 'Items/'.$item->style_no.'/'.$color_name.'/'.$img_name;
							$this->AwsFile->putObjectFile($keyname,$file['tmp_name'],$file['type']);
                                
                              $img[]= $img_name;
                              

                        }
                     
                 $query = $this->Items->ItemRows->query();
                    $query->insert(['item_id', 'sku', 'color_id', 'size_id', 'quantity', 'sale_rate','feature_image'])
                    ->values([
                        'item_id' => $item->id,
                        'sku' => $item_row['sku'],
                        'color_id' => $item_row['color_id'],
                        'size_id' => $item_row['size_id'],
                        'quantity' => $item_row['quantity'],
                        'sale_rate' => $item_row['sale_rate'],
                        'feature_image' => 'Items/'.$item->style_no.'/'.$color_name.'/'.$img_name,
                   ]);
                    $query->execute();
                }
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $item_views=$this->Items->find()->contain(['Categories']);
        $categories = $this->Items->Categories->find()->where(['Categories.parent_id IS NOT NULL'])->contain(['ParentCategories']);
        $name="";
        foreach ($categories as $cat) {
            $name=$cat->parent_category->name.' >'.$cat->name;
            $catsub[$cat->id] = $name;
        }

        //pr($catsub);exit;

        //pr($results->toArray());exit;
        $colors = $this->Items->ItemRows->Colors->find('list');
        $sizes = $this->Items->ItemRows->Sizes->find('list');
        $this->set(compact('item', 'categories','colors','sizes','item_views','catsub'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function skuList($id=null)
    {
       
        
        
        $items_sku = $this->Items->ItemRows->find()->where(['ItemRows.item_id'=>$id])->contain(['Colors','Sizes']);
        
        
        $this->set('items_sku', $items_sku);
        $this->set('_serialize', ['items_sku']);
    }

    public function edit($id = null)
    {
         $this->viewBuilder()->layout('index_layout');
        $item = $this->Items->get($id, [
            'contain' => ['ItemRows'=>['Colors','Sizes']]
        ]);
       // pr($item);exit;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datas=$this->request->getData();
            //pr($datas);exit;
            $i=0;
            foreach ($datas['item_rows'] as $key =>$data) {
               // pr($datas['item_rows'][$key]['color_id']);exit;
                $color_id=$data['color_id'];
                $colors=$this->Items->ItemRows->Colors->get($color_id);
                $color_name=strtoupper($colors->name);
                if($data['feature_image']['name'] == null)
                {
                   // pr("aa");exit;
                    @$img=$data['image_hide'];
                    $datas['item_rows'][$key]['feature_image']= $img;
                }
                else
                {
                   // pr("bb");exit;
                   $file = $data['feature_image']; //put the data into a var for easy use
                        //pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                // $uploads_dir =new Folder();
                                // $uploads_dir->create(WWW_ROOT . '/img/Items/'.$item->id);
                               // //move_uploaded_file($file['tmp_name'],'img/Items/'.$item->id.'/'.$img_name);
								$keyname = 'Items/'.$item->style_no.'/'.$color_name.'/'.$img_name;
							    $this->AwsFile->putObjectFile($keyname,$file['tmp_name'],$file['type']);
                                
                                //prepare the filename for database entry
                               $datas['item_rows'][$key]['feature_image']='Items/'.$item->style_no.'/'.$color_name.'/'.$img_name;
                              //pr($item->item_rows=$image);

                        }
                }
                    $i++;
            }
           // pr($datas);exit;
            $items = $this->Items->patchEntity($item, $datas);
          // pr($items);exit;
            if ($this->Items->save($items)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
         $categories = $this->Items->Categories->find('list')->where(['Categories.parent_id IS NOT NULL']);
         $categories = $this->Items->Categories->find()->where(['Categories.parent_id IS NOT NULL'])->contain(['ParentCategories']);
        $name="";
        foreach ($categories as $cat) {
            $name=$cat->parent_category->name.' >'.$cat->name;
            $catsub[$cat->id] = $name;
        }

        //pr($categories->toArray());exit;
        $item_row=$this->Items->ItemRows->find()->where(['ItemRows.item_id'=>$id])->contain(['Colors','Sizes']);
        //pr($item_row->toArray());exit;
        $colors = $this->Items->ItemRows->Colors->find('list');
        $sizes = $this->Items->ItemRows->Sizes->find('list');
        $this->set(compact('item', 'categories','colors','sizes','item_row','catsub'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function Active($id=null)
    {
        $item = $this->Items->get($id);
        $item->is_deleted=0;
        if($this->Items->save($item))
            exit;
    }
    public function delete($id = null)
    {
        $item = $this->Items->get($id);
        $item->is_deleted=1;
        if($this->Items->save($item))
            exit;
    }
}
