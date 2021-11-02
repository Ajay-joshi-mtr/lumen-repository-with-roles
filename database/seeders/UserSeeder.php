<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Ajay Joshi',
            'email' => 'admin@admin.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'            
        ]);
        $user->assignRole('administrator');

        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Mohit Rajput',
            'email' => 'mohitrajput@mp2it.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'            
        ]);
       $user->assignRole('administrator');

        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Deepak Deshwar',
            'email' => 'deepakdeshwarmp2it@gmail.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'            
        ]);
        $user->assignRole('accountant');

        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Rajesh Kumar',
            'email' => 'rajesher051@gmail.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'            
        ]);
        $user->assignRole('tech-lead');

        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Priya Dayal',
            'email' => 'priyadayalmp2it@gmail.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'
        ]);
        $user->assignRole('support-lead');

        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Ankita Chaturvedi',
            'email' => 'acmp2it@gmail.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'            
        ]);
        
        $user->assignRole('support');

        $uid = IdGenerator::generate(['table' => 'users','field'=>'uid', 'length' => 7, 'prefix' =>'EMP-']);
        
        $user = User::create([
            'uid'=>$uid,
            'name' => 'Pooja Sharma',
            'email' => 'poojasharmamp2it@gmail.com',            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'status'=>'Active'            
        ]);
        
        $user->assignRole('support');

    }
}
