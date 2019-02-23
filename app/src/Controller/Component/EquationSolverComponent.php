<?php
namespace App\Controller\Component;

use App\Exception\Component\NoSolutionsException;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * EquationSolver component
 */
class EquationSolverComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function solve($a, $b, $c)
    {
        try
        {
            if($this->hasSolutions($a)){
                throw new NoSolutionsException();
            }
        }catch (NoSolutionsException $e)
        {

        }

        if ($b == 0) {
            if ($c < 0) {
                $x1 = sqrt(abs($c / $a));
                $x2 = sqrt(abs($c / $a));
            } elseif ($c == 0) {
                $x1 = $x2 = 0;
            } else {
                $x1 = sqrt($c / $a) . 'i';
                $x2 = -sqrt($c / $a) . 'i';
            }
        } else {
            $d = $this->calculateDescriminant($a, $b, $c);
            if ($d > 0) {
                $x1 = (-$b + sqrt($d)) / 2 * $a;
                $x2 = (-$b - sqrt($d)) / 2 * $a;
            } elseif ($d == 0) {
                $x1 = $x2 = (-$b) / 2 * $a;
            } else {
                $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
                $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
            }
        }
        return array($x1, $x2);
    }

    protected function hasSolutions($a)
    {
        return $a != 0;
    }

    protected function hasSingleSolution($b)
    {
        return $b == 0;
    }

    protected function calculateDescriminant($a, $b, $c)
    {
        return $b * $b - 4 * $a * $c;
    }
}
