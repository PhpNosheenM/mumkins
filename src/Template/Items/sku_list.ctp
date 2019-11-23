 <?php foreach ($items_sku as $item_sku) {?>
                            <tr>
                                <th scope="row"><?= $item_sku->sku ?></th>
                                <td><?= $item_sku->size->name ?></td>
                                <td><?= $item_sku->color->name ?></td>
                                <td><?= $item_sku->quantity ?></td>
                                <td><?= $item_sku->sale_rate ?></td>
                            </tr>
                            <?php } ?>