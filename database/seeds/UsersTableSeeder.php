<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'lecturer')->first();

        $user = new User();
        $user->name = 'lecturer';
        $user->email = 'lecturer@lecturer.com';
        $user->password = bcrypt('lecturer');
        
        $user->save(); 
        $user->roles()->attach($role->id);
    }
}
