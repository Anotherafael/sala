<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{

    public function run()
    {
        $this->createPermissions();
        $this->createRoles();
    }

    private function createPermissions()
    {
        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission['name']],
                ['description' => $permission['description']]
            );
        }

        $this->command->info('Default Permissions added.');
    }

    private function createRoles()
    {

        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'description' => 'Admin'
        ]);
        $professor = Role::firstOrCreate([
            'name' => 'professor',
            'description' => 'Professor'
        ]);
        $student = Role::firstOrCreate([
            'name' => 'student',
            'description' => 'Estudante'
        ]);
        
        $admin->permissions()->sync(Permission::all());
        $professor->permissions()->sync(Permission::where('name','professor_report_user')->first());
        $student->permissions()->sync(Permission::where('name','student_report_user')->first());
        $this->command->info('Full Permissions sucessfull added');
    }
}
