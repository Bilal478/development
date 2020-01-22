<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // DB::table(with(new User())->getTable())->truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        DB::statement("TRUNCATE TABLE ".(new User())->getTable()." RESTART IDENTITY CASCADE");

 //       $user = User::where('email','admin@macrotechgroups.com')->first();

        if(!isset($user)){
            $user = User::create([
               'name' => 'Admin',
               'email' => 'admin@superior.edu.pk',
               'password' => bcrypt('admin'),
               'type' => 'admin'
            ]);
            $user = User::create([
                'name' => 'user',
                'email' => 'user@superior.edu.pk',
                'password' => bcrypt('user'),
                'type' => 'user'
             ]);
        }

       // factory(User::class, 50)->create();
    }

}
