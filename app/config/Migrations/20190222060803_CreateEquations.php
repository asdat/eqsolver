<?php
use Migrations\AbstractMigration;

class CreateEquations extends AbstractMigration
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
        $table = $this->table('equations');
        $table->addColumn('result_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('token', 'string', [
            'default' => null,
            'limit' => 40,
            'null' => false,
        ]);
        $table->addColumn('a', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('b', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('c', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
