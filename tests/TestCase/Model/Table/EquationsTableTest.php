<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquationsTable Test Case
 */
class EquationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EquationsTable
     */
    public $Equations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Equations',
        'app.Results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Equations') ? [] : ['className' => EquationsTable::class];
        $this->Equations = TableRegistry::getTableLocator()->get('Equations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equations);

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
