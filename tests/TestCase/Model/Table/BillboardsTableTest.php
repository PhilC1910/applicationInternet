<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillboardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillboardsTable Test Case
 */
class BillboardsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillboardsTable
     */
    public $Billboards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.billboards'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Billboards') ? [] : ['className' => BillboardsTable::class];
        $this->Billboards = TableRegistry::getTableLocator()->get('Billboards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Billboards);

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
