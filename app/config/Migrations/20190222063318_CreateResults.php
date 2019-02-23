<?php
use Migrations\AbstractMigration;

class CreateResults extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('results');
        $table->addColumn('result_type_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('equation_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('x1', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('x2', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('message', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);
        $table->addColumn('count', 'integer', [
            'default' => 1,
            'null' => false,
        ]);
        $table->create();
    }
}
