<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDatesColumn extends Migration
{
    public function up()
    {
        // add column created_at, updated_at, deleted_at to table 
        // mitra, panita_event, juri_event, peserta_event, mitra_event
        // sertifikat_event

        $this->forge->addColumn('mitra', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addColumn('panitia_event', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addColumn('juri_event', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addColumn('peserta_event', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addColumn('mitra_event', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addColumn('sertifikat_event', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
    }

    public function down()
    {
        // drop column created_at, updated_at, deleted_at from table
        // mitra, panitia_event, juri_event, peserta_event, mitra_event
        // sertifikat_event

        $this->forge->dropColumn('mitra', 'created_at');
        $this->forge->dropColumn('mitra', 'updated_at');
        $this->forge->dropColumn('mitra', 'deleted_at');

        $this->forge->dropColumn('panitia_event', 'created_at');
        $this->forge->dropColumn('panitia_event', 'updated_at');
        $this->forge->dropColumn('panitia_event', 'deleted_at');

        $this->forge->dropColumn('juri_event', 'created_at');
        $this->forge->dropColumn('juri_event', 'updated_at');
        $this->forge->dropColumn('juri_event', 'deleted_at');

        $this->forge->dropColumn('peserta_event', 'created_at');
        $this->forge->dropColumn('peserta_event', 'updated_at');
        $this->forge->dropColumn('peserta_event', 'deleted_at');

        $this->forge->dropColumn('mitra_event', 'created_at');
        $this->forge->dropColumn('mitra_event', 'updated_at');
        $this->forge->dropColumn('mitra_event', 'deleted_at');

        $this->forge->dropColumn('sertifikat_event', 'created_at');
        $this->forge->dropColumn('sertifikat_event', 'updated_at');
        $this->forge->dropColumn('sertifikat_event', 'deleted_at');
    }
}
