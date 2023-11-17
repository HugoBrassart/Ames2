<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $u = new User;
        $u -> name = 'Méline';
        $u -> email = 'melineE@gmail.fr';
        $u -> password = Hash::make('azerty');
        $u->save();

        $u = new User;
        $u -> name = 'Jean';
        $u -> email = 'jeanR@gmail.fr';
        $u -> password = Hash::make('12345');
        $u->save();


        $this->call([
            AmeSeeder::class,
        ]);


    }
}
