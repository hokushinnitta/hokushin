<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ユーザー作成
        $AdminUser = User::updateOrCreate(
            ['email' => 'hokushinnitta@gmail.com'],
            ['name' => 'admin', 'password' => bcrypt('mihara369')]
        );

        $normalUser = User::updateOrCreate(
            ['email' => 'test@gmail.com'],
            ['name' => 'test', 'password' => bcrypt('testtest')]
        );

        $runfreeAdminUser = User::updateOrCreate(
            ['email' => 'runfreeadmin@gmail.com'],
            ['name' => 'runfreeadmin', 'password' => bcrypt('runfree123')]
        );

        $manufacturerUser = User::updateOrCreate(
            ['email' => 'manufacturer@gmail.com'],
            ['name' => 'manufacturer', 'password' => bcrypt('manufacturer123')]
        );

        $outsideOrderUser = User::updateOrCreate(
            ['email' => 'outsideorder@gmail.com'],
            ['name' => 'outsideorder', 'password' => bcrypt('outsideorder123')]
        );

        $shippingUser = User::updateOrCreate(
            ['email' => 'shipping@gmail.com'],
            ['name' => 'shipping', 'password' => bcrypt('shipping123')]
        );

        // ロール作成
        $adminRole = Role::firstOrCreate(['name' => '社内管理者']);
        $userRole = Role::firstOrCreate(['name' => '社内事務員']);
        $runfreeAdminRole = Role::firstOrCreate(['name' => 'アプリ保守管理者']);
        $manufacturerRole = Role::firstOrCreate(['name' => '製造担当者']);
        $outsideOrderRole = Role::firstOrCreate(['name' => '外注先']);
        $shippingRole = Role::firstOrCreate(['name' => '出荷担当者']);

        // 権限作成
        $manageUsersPermission = Permission::firstOrCreate(['name' => 'manage users']);
        $viewReportsPermission = Permission::firstOrCreate(['name' => 'view reports']);
        $manageOrdersPermission = Permission::firstOrCreate(['name' => 'manage orders']);
        $manageProductionPermission = Permission::firstOrCreate(['name' => 'manage production']);
        $manageShippingPermission = Permission::firstOrCreate(['name' => 'manage shipping']);
        $manageExternalOrdersPermission = Permission::firstOrCreate(['name' => 'manage external orders']);

        // ロールに権限を割り当て
        $adminRole->givePermissionTo([$manageUsersPermission, $viewReportsPermission, $manageOrdersPermission, $manageProductionPermission, $manageShippingPermission, $manageExternalOrdersPermission]);
        $runfreeAdminRole->givePermissionTo([$manageUsersPermission, $viewReportsPermission, $manageOrdersPermission, $manageProductionPermission, $manageShippingPermission, $manageExternalOrdersPermission]);
        $userRole->givePermissionTo([$manageOrdersPermission, $manageProductionPermission, $manageShippingPermission]);
        $manufacturerRole->givePermissionTo([$manageProductionPermission]);
        $outsideOrderRole->givePermissionTo([$manageExternalOrdersPermission]);
        $shippingRole->givePermissionTo([$manageShippingPermission]);

        // ユーザーにロールを割り当て
        $AdminUser->assignRole($adminRole);
        $normalUser->assignRole($userRole);
        $runfreeAdminUser->assignRole($runfreeAdminRole);
        $manufacturerUser->assignRole($manufacturerRole);
        $outsideOrderUser->assignRole($outsideOrderRole);
        $shippingUser->assignRole($shippingRole);
    }
}
