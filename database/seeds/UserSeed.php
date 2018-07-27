<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//admin
        $admin = new User;
        $admin->name = 'Admin';
        $admin->ic = '01';
        $admin->email = 'nooraisyam@perlis.gov.my';
        $admin->password = bcrypt('bptm2018');
        $admin->save();

        //user
        $user = new User;
        $user->name = 'User';
        $user->ic = '02';
        $user->email = 'syamz2534@gmail.com';
        $user->password = bcrypt('bptm2018');
        $user->save();
    }
}
