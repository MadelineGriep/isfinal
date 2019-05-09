<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //public function run() {
       /* $this->call(UsersTableSeeder::class);
    }*/
    public function run()
{
    // Disable all mass assignment restrictions
    Model::unguard();
 
    $this->call(PostsTableSeeder::class);
 
    // Re enable all mass assignment restrictions
    Model::reguard();
}

}
