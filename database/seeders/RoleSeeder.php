<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
            //All permissions
            // ['user_manage','user_show','user_add','user_edit','user_trash','user_contact','user_roles','user_permission','user_archive','user_restore','user_setting','user_delete','scholar_manage','scholar_show','scholar_add','scholar_edit','scholar_trash','scholar_contact','scholar_archive','scholar_restore','scholar_delete','query_manage','query_show','query_add','query_edit','query_trash','query_followup','query_activity','query_archive','query_restore','query_delete','work_manage','work_show','work_add','work_edit','work_trash','work_todo','work_activity','work_archive','work_restore','work_delete','task_manage','task_show','task_add','task_edit','task_delete','task_todo','task_activity','team_manage','team_show','team_add','team_edit','team_delete','admin_setting','wallet_manage','update_tx_status']
    
            $role = Role::create(['name' => 'administrator']);
            $role = Role::create(['name' => 'tech-lead']);
            $role->givePermissionTo(['user_setting','scholar_show','query_show','work_manage','work_show','work_add','work_edit','work_trash','work_todo','work_activity','work_archive','task_manage','task_show','task_add','task_edit','task_delete','task_todo','task_activity','team_manage','team_show','team_add','team_edit','team_delete',]);
            
            $role = Role::create(['name' => 'accountant']);
            $role->givePermissionTo(['user_manage','user_show','user_contact','user_setting','scholar_manage','scholar_show','scholar_contact','query_show','work_show','wallet_manage','update_tx_status',]);    
    
            $role = Role::create(['name' => 'support-lead']);
            $role->givePermissionTo(['user_setting','scholar_manage','scholar_show','scholar_add','scholar_edit','scholar_trash','scholar_contact','scholar_archive','query_manage','query_show','query_add','query_edit','query_trash','query_followup','query_activity','query_archive','work_manage','work_show','work_add','work_edit','work_trash','work_todo','work_activity','work_archive','task_manage','task_show','task_add','task_edit','task_delete','task_todo','task_activity','team_manage','team_show','team_add','team_edit','team_delete','area_crud']);
    
            $role = Role::create(['name' => 'support']);
            $role->givePermissionTo(['user_setting','scholar_manage','scholar_show','scholar_add','scholar_edit','scholar_contact','query_manage','query_show','query_add','query_edit','query_followup','query_activity','work_manage','work_show','work_add','work_edit','work_trash','work_todo','work_activity','task_manage','task_show','task_todo','task_activity','team_manage','team_show',]);   
            
            $role = Role::create(['name' => 'executive']);
            $role->givePermissionTo(['user_setting','scholar_show','query_show','work_manage','work_show','work_todo','work_activity','task_manage','task_show','task_todo','task_activity','team_manage','team_show',]);   
        
    }
}
