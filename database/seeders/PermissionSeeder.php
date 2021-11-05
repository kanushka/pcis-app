<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 201,
                'name' => 'View User',
            ],
            [
                'id' => 202,
                'name' => 'Create User',
            ],
            [
                'id' => 203,
                'name' => 'Update User',
            ],
            [
                'id' => 204,
                'name' => 'Delete User',
            ],

            [
                'id' => 211,
                'name' => 'View Role',
            ],
            [
                'id' => 212,
                'name' => 'Create Role',
            ],
            [
                'id' => 213,
                'name' => 'Update Role',
            ],
            [
                'id' => 214,
                'name' => 'Delete Role',
            ],

            [
                'id' => 221,
                'name' => 'View Order',
            ],
            [
                'id' => 222,
                'name' => 'Create Order',
            ],
            [
                'id' => 223,
                'name' => 'Update Order',
            ],
            [
                'id' => 225,
                'name' => 'Approve Order',
            ],
            [
                'id' => 224,
                'name' => 'Delete Order',
            ],

            [
                'id' => 231,
                'name' => 'View Supplier',
            ],
            [
                'id' => 232,
                'name' => 'Create Supplier',
            ],
            [
                'id' => 233,
                'name' => 'Update Supplier',
            ],
            [
                'id' => 234,
                'name' => 'Delete Supplier',
            ],

            [
                'id' => 241,
                'name' => 'View Material',
            ],
            [
                'id' => 242,
                'name' => 'Create Material',
            ],
            [
                'id' => 243,
                'name' => 'Update Material',
            ],
            [
                'id' => 244,
                'name' => 'Delete Material',
            ],

            [
                'id' => 251,
                'name' => 'View Account',
            ],
            [
                'id' => 252,
                'name' => 'Create Account',
            ],
            [
                'id' => 253,
                'name' => 'Update Account',
            ],
            [
                'id' => 254,
                'name' => 'Delete Account',
            ],

            [
                'id' => 261,
                'name' => 'View Delivery',
            ],
            [
                'id' => 262,
                'name' => 'Create Delivery',
            ],
            [
                'id' => 263,
                'name' => 'Update Delivery',
            ],
            [
                'id' => 264,
                'name' => 'Delete Delivery',
            ],
        ]);
    }
}
