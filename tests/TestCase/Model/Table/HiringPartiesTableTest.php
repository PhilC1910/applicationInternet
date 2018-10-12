<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HiringPartiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HiringPartiesTable Test Case
 */
class HiringPartiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HiringPartiesTable
     */
    public $HiringParties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hiring_parties',
        'app.ref_hiring_party_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HiringParties') ? [] : ['className' => HiringPartiesTable::class];
        $this->HiringParties = TableRegistry::getTableLocator()->get('HiringParties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HiringParties);

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
