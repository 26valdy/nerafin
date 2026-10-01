<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | User internal
        |--------------------------------------------------------------------------
        */

        User::updateOrCreate(
            [
                'email' => 'bendahara@lsp-nusantara.id',
            ],
            [
                'name' => 'Bendahara LSP',
                'password' => Hash::make('Bendahara123'),
                'role' => 'Bendahara',
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'ketua@lsp-nusantara.id',
            ],
            [
                'name' => 'Ketua LSP',
                'password' => Hash::make('Ketua12345'),
                'role' => 'Ketua',
            ]
        );

        $categories = [
            [
                'type' => 'Penerimaan',
                'name' => 'Biaya Sertifikasi',
                'is_active' => true,
            ],
            [
                'type' => 'Penerimaan',
                'name' => 'Pelatihan Kompetensi',
                'is_active' => true,
            ],
            [
                'type' => 'Pengeluaran',
                'name' => 'Honor Asesor',
                'is_active' => true,
            ],
            [
                'type' => 'Pengeluaran',
                'name' => 'Operasional TUK',
                'is_active' => true,
            ],
            [
                'type' => 'Pengeluaran',
                'name' => 'Perlengkapan ATK',
                'is_active' => true,
            ],
            [
                'type' => 'Pengeluaran',
                'name' => 'Perjalanan Dinas',
                'is_active' => false,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                [
                    'type' => $category['type'],
                    'name' => $category['name'],
                ],
                [
                    'is_active' => $category['is_active'],
                ]
            );
        }
    }
}