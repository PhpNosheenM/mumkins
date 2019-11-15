<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsletterSectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsletterSectionsTable Test Case
 */
class NewsletterSectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsletterSectionsTable
     */
    public $NewsletterSections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.NewsletterSections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NewsletterSections') ? [] : ['className' => NewsletterSectionsTable::class];
        $this->NewsletterSections = TableRegistry::getTableLocator()->get('NewsletterSections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NewsletterSections);

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
