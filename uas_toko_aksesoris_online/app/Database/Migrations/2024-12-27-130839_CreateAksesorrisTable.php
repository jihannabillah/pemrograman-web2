<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAksesorissTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'ketersediaan' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('aksesoriss');
    }

    public function down()
    {
        $this->forge->dropTable('aksesoriss');
    }
}
