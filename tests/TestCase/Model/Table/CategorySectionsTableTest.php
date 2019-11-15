<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategorySectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategorySectionsTable Test Case
 */
class CategorySectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategorySectionsTable
     */
    public $CategorySections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategorySections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategorySections') ? [] : ['className' => CategorySectionsTable::class];
        $this->CategorySections = TableRegistry::getTableLocator()->get('CategorySections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategorySections);

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
}
