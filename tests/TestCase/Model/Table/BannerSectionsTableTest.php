<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BannerSectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BannerSectionsTable Test Case
 */
class BannerSectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BannerSectionsTable
     */
    public $BannerSections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BannerSections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BannerSections') ? [] : ['className' => BannerSectionsTable::class];
        $this->BannerSections = TableRegistry::getTableLocator()->get('BannerSections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BannerSections);

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
