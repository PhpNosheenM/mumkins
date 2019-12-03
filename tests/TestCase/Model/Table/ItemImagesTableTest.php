<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemImagesTable Test Case
 */
class ItemImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemImagesTable
     */
    public $ItemImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ItemImages',
        'app.ItemRows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ItemImages') ? [] : ['className' => ItemImagesTable::class];
        $this->ItemImages = TableRegistry::getTableLocator()->get('ItemImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemImages);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
