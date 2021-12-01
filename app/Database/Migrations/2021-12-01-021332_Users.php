<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
        		'id'          		=> [
         				'type'           => 'INT',
         				'unsigned'       => TRUE,
         				'auto_increment' => TRUE
         		],
         		'matricula'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                 'name'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                'apellidoP'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                'apellidoM'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                'grupo'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '10',
         		],
                'rol'       		=> [
         				'type'           => 'INT',
         				'constraint'     => '11',
         		],
                'password'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '20',
         		],
                 
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
