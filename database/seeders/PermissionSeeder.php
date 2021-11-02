<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'user_manage']);
        Permission::create(['name' => 'user_add']);
        Permission::create(['name' => 'user_show']);
        Permission::create(['name' => 'user_edit']);
        Permission::create(['name' => 'user_trash']);
        Permission::create(['name' => 'user_contact']);
        Permission::create(['name' => 'user_roles']);
        Permission::create(['name' => 'user_permission']);
        Permission::create(['name' => 'user_archive']);
        Permission::create(['name' => 'user_restore']);
        Permission::create(['name' => 'user_setting']); //profile edit & password
        Permission::create(['name' => 'user_delete']); //user permission
        Permission::create(['name' => 'scholar_manage']);
        Permission::create(['name' => 'scholar_show']);
        Permission::create(['name' => 'scholar_add']);
        Permission::create(['name' => 'scholar_edit']);
        Permission::create(['name' => 'scholar_trash']);
        Permission::create(['name' => 'scholar_contact']);
        Permission::create(['name' => 'scholar_archive']);
        Permission::create(['name' => 'scholar_restore']);
        Permission::create(['name' => 'scholar_delete']);  // scholar permission
        Permission::create(['name' => 'query_manage']);
        Permission::create(['name' => 'query_show']);
        Permission::create(['name' => 'query_add']);
        Permission::create(['name' => 'query_edit']);
        Permission::create(['name' => 'query_trash']);
        Permission::create(['name' => 'query_followup']);
        Permission::create(['name' => 'query_activity']);
        Permission::create(['name' => 'query_archive']);
        Permission::create(['name' => 'query_restore']);
        Permission::create(['name' => 'query_delete']);  //query permission
        Permission::create(['name' => 'work_manage']);
        Permission::create(['name' => 'work_show']);
        Permission::create(['name' => 'work_add']);
        Permission::create(['name' => 'work_edit']);
        Permission::create(['name' => 'work_trash']);
        Permission::create(['name' => 'work_todo']);
        Permission::create(['name' => 'work_activity']);
        Permission::create(['name' => 'work_archive']);
        Permission::create(['name' => 'work_restore']);
        Permission::create(['name' => 'work_delete']); //work permission
        Permission::create(['name' => 'task_manage']);
        Permission::create(['name' => 'task_show']);
        Permission::create(['name' => 'task_add']);
        Permission::create(['name' => 'task_edit']);
        Permission::create(['name' => 'task_delete']);
        Permission::create(['name' => 'task_todo']);
        Permission::create(['name' => 'task_activity']); // task permission
        Permission::create(['name' => 'team_manage']);
        Permission::create(['name' => 'team_show']);
        Permission::create(['name' => 'team_add']);               
        Permission::create(['name' => 'team_edit']);
        Permission::create(['name' => 'team_delete']); //team permission
        Permission::create(['name' => 'admin_setting']);    //admin setting    
        Permission::create(['name' => 'wallet_manage']);  // txs 
        Permission::create(['name' => 'update_tx_status']); 
        Permission::create(['name' => 'area_crud']); 
    }
}
