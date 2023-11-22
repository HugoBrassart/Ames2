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
        $u -> name = 'Hugo';
        $u -> email = 'hugobrassart@orange.fr';
        $u -> password = Hash::make('invocation6');
        $u->is_admin=true;
        $u->save();

        $u = new User;
        $u -> name = 'Emi';
        $u -> email = 'emilevi@gmail.com';
        $u -> password = Hash::make('invocation6');
        $u->is_admin=false;
        $u->save();


        $this->call([
            AmeSeeder::class,
        ]);


    }
}
