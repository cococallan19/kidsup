<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UpdateUserSeeder_20220930::class);
        // $this->call(SchoolMetaTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
