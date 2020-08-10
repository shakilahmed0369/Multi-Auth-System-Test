<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'sk shakil';
        $user->email = 'sk@gmail.com';
        $user->password = '$2y$10$6la78fVMmRm5TN4n5OopouEKSVFyRKyf4gRWA2VLDqEiOBUgb5u4q'; //skshakil
        $user->user_type = 'SuperAdmin';
        $user->save();
        
        $user = new User();
        $user->name = 'frey';
        $user->email = 'frey@gmail.com';
        $user->password = '$2y$10$6la78fVMmRm5TN4n5OopouEKSVFyRKyf4gRWA2VLDqEiOBUgb5u4q'; //skshakil
        $user->user_type = 'Admin';
        $user->save();
    }
}
