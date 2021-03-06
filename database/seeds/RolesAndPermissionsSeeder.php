<?php

use App\Models\UserPermissions;
use App\Models\UserRoles;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRegularUserRolesAndPermissions();
        $this->createAdminRolesAndPermissions();
    }

    /**
     * Create the roles and permissions for admin users
     */
    private function createAdminRolesAndPermissions()
    {
        $adminUser = Role::create(['name' => UserRoles::ADMIN_USER]);

        $canCrudUsers = Permission::create(['name' => UserPermissions::CAN_CRUD_USERS]);

        $adminUser->syncPermissions([$canCrudUsers]);
    }

    /**
     * Create the roles and permissions for regular users
     */
    private function createRegularUserRolesAndPermissions()
    {
        $regularUser = Role::create(['name' => UserRoles::REGULAR_USER]);

        $saveMoney = Permission::create(['name' => UserPermissions::SAVE_MONEY]);

        $regularUser->syncPermissions([$saveMoney]);
    }
}
