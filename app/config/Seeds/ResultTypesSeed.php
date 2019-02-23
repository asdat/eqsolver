<?php
use Migrations\AbstractSeed;

/**
 * Types seed.
 */
class ResultTypesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Error'
            ],
            [
                'id' => 2,
                'name' => 'Single solution'
            ],
            [
                'id' => 3,
                'name' => 'Two solutions'
            ],
            [
                'id' => 4,
                'name' => 'No solution'
            ],
        ];

        $table = $this->table('result_types');
        $table->insert($data)->save();
    }
}
