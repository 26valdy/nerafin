<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
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
    }
}