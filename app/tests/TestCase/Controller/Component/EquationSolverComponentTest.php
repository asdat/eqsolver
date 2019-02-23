<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\EquationSolverComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\EquationSolverComponent Test Case
 */
class EquationSolverComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\EquationSolverComponent
     */
    public $EquationSolver;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->EquationSolver = new EquationSolverComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EquationSolver);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
