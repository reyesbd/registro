<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTalleres extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'id'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'nombre'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '100',
							'null'           => false,							
					],
					'semestre' => [
							'type'           => 'INT',
							'constraint'     => 2,								
							'null'           => false,
					],
					'carrera' => [
						'type'           => 'INT',
						'null'           => false,
						'constraint'     => 2,						
				],					
			]);
			$this->forge->addKey('id', true);
			$this->forge->createTable('talleres');
	}

	public function down()
	{
			$this->forge->dropTable('talleres');
	}
}
