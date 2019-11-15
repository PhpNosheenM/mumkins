<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BoyGirlSectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BoyGirlSectionsTable Test Case
 */
class BoyGirlSectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BoyGirlSectionsTable
     */
    public $BoyGirlSections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BoyGirlSections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BoyGirlSections') ? [] : ['className' => BoyGirlSectionsTable::class];
        $this->BoyGirlSections = TableRegistry::getTableLocator()->get('BoyGirlSections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BoyGirlSections);

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
