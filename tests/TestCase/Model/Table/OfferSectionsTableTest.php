<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfferSectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfferSectionsTable Test Case
 */
class OfferSectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfferSectionsTable
     */
    public $OfferSections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfferSections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfferSections') ? [] : ['className' => OfferSectionsTable::class];
        $this->OfferSections = TableRegistry::getTableLocator()->get('OfferSections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfferSections);

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
