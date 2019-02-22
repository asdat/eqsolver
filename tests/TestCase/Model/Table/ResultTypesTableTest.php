<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultTypesTable Test Case
 */
class ResultTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultTypesTable
     */
    public $ResultTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ResultTypes',
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
        $config = TableRegistry::getTableLocator()->exists('ResultTypes') ? [] : ['className' => ResultTypesTable::class];
        $this->ResultTypes = TableRegistry::getTableLocator()->get('ResultTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResultTypes);

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
