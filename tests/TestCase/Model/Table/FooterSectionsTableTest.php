<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FooterSectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FooterSectionsTable Test Case
 */
class FooterSectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FooterSectionsTable
     */
    public $FooterSections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FooterSections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FooterSections') ? [] : ['className' => FooterSectionsTable::class];
        $this->FooterSections = TableRegistry::getTableLocator()->get('FooterSections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FooterSections);

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
