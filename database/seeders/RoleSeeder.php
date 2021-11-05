<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 14,
                'name' => 'Site Manager',
            ],
            [
                'id' => 13,
                'name' => 'Procurement',
            ],
            [
                'id' => 12,
                'name' => 'Accountant',
            ],
            [
                'id' => 11,
                'name' => 'Manager',
            ],
        ]);

        DB::table('permission_role')->insert([
            [
                'role_id' => 11,
                'permission_id' => 201,
            ],
            [
                'role_id' => 11,
                'permission_id' => 202,
            ],
            [
                'role_id' => 11,
                'permission_id' => 203,
            ],
            [
                'role_id' => 11,
                'permission_id' => 204,
            ],
            [
                'role_id' => 11,
                'permission_id' => 211,
            ],
            [
                'role_id' => 11,
                'permission_id' => 212,
            ],
            [
                'role_id' => 11,
                'permission_id' => 213,
            ],
            [
                'role_id' => 11,
                'permission_id' => 214,
            ],
            [
                'role_id' => 11,
                'permission_id' => 221,
            ],
            [
                'role_id' => 11,
                'permission_id' => 222,
            ],
            [
                'role_id' => 11,
                'permission_id' => 223,
            ],
            [
                'role_id' => 11,
                'permission_id' => 224,
            ],
            [
                'role_id' => 11,
                'permission_id' => 225,
            ],
            [
                'role_id' => 11,
                'permission_id' => 231,
            ],
            [
                'role_id' => 11,
                'permission_id' => 232,
            ],
            [
                'role_id' => 11,
                'permission_id' => 233,
            ],
            [
                'role_id' => 11,
                'permission_id' => 234,
            ],
            [
                'role_id' => 11,
                'permission_id' => 241,
            ],
            [
                'role_id' => 11,
                'permission_id' => 242,
            ],
            [
                'role_id' => 11,
                'permission_id' => 243,
            ],
            [
                'role_id' => 11,
                'permission_id' => 244,
            ],
            [
                'role_id' => 11,
                'permission_id' => 251,
            ],
            [
                'role_id' => 11,
                'permission_id' => 252,
            ],
            [
                'role_id' => 11,
                'permission_id' => 253,
            ],
            [
                'role_id' => 11,
                'permission_id' => 254,
            ],
            [
                'role_id' => 11,
                'permission_id' => 261,
            ],
            [
                'role_id' => 11,
                'permission_id' => 262,
            ],
            [
                'role_id' => 11,
                'permission_id' => 263,
            ],
            [
                'role_id' => 11,
                'permission_id' => 264,
            ],

            [
                'role_id' => 12,
                'permission_id' => 201,
            ],
            [
                'role_id' => 12,
                'permission_id' => 202,
            ],
            [
                'role_id' => 12,
                'permission_id' => 203,
            ],
            [
                'role_id' => 12,
                'permission_id' => 204,
            ],
            [
                'role_id' => 12,
                'permission_id' => 213,
            ],
            [
                'role_id' => 12,
                'permission_id' => 212,
            ],
            [
                'role_id' => 12,
                'permission_id' => 213,
            ],
            [
                'role_id' => 12,
                'permission_id' => 214,
            ],
            [
                'role_id' => 12,
                'permission_id' => 221,
            ],
            [
                'role_id' => 12,
                'permission_id' => 222,
            ],
            [
                'role_id' => 12,
                'permission_id' => 223,
            ],
            [
                'role_id' => 12,
                'permission_id' => 224,
            ],
            [
                'role_id' => 12,
                'permission_id' => 225,
            ],
            [
                'role_id' => 12,
                'permission_id' => 231,
            ],
            [
                'role_id' => 12,
                'permission_id' => 232,
            ],
            [
                'role_id' => 12,
                'permission_id' => 233,
            ],
            [
                'role_id' => 12,
                'permission_id' => 234,
            ],
            [
                'role_id' => 12,
                'permission_id' => 241,
            ],
            [
                'role_id' => 12,
                'permission_id' => 242,
            ],
            [
                'role_id' => 12,
                'permission_id' => 243,
            ],
            [
                'role_id' => 12,
                'permission_id' => 244,
            ],
            [
                'role_id' => 12,
                'permission_id' => 251,
            ],
            [
                'role_id' => 12,
                'permission_id' => 252,
            ],
            [
                'role_id' => 12,
                'permission_id' => 253,
            ],
            [
                'role_id' => 12,
                'permission_id' => 254,
            ],
            [
                'role_id' => 12,
                'permission_id' => 261,
            ],
            [
                'role_id' => 12,
                'permission_id' => 262,
            ],
            [
                'role_id' => 12,
                'permission_id' => 263,
            ],
            [
                'role_id' => 12,
                'permission_id' => 264,
            ],

            [
                'role_id' => 13,
                'permission_id' => 201,
            ],
            [
                'role_id' => 13,
                'permission_id' => 202,
            ],
            [
                'role_id' => 13,
                'permission_id' => 203,
            ],
            [
                'role_id' => 13,
                'permission_id' => 204,
            ],
            [
                'role_id' => 13,
                'permission_id' => 215,
            ],
            [
                'role_id' => 13,
                'permission_id' => 212,
            ],
            [
                'role_id' => 13,
                'permission_id' => 215,
            ],
            [
                'role_id' => 13,
                'permission_id' => 214,
            ],
            [
                'role_id' => 13,
                'permission_id' => 221,
            ],
            [
                'role_id' => 13,
                'permission_id' => 222,
            ],
            [
                'role_id' => 13,
                'permission_id' => 223,
            ],
            [
                'role_id' => 13,
                'permission_id' => 224,
            ],
            [
                'role_id' => 13,
                'permission_id' => 225,
            ],
            [
                'role_id' => 13,
                'permission_id' => 231,
            ],
            [
                'role_id' => 13,
                'permission_id' => 232,
            ],
            [
                'role_id' => 13,
                'permission_id' => 233,
            ],
            [
                'role_id' => 13,
                'permission_id' => 234,
            ],
            [
                'role_id' => 13,
                'permission_id' => 241,
            ],
            [
                'role_id' => 13,
                'permission_id' => 242,
            ],
            [
                'role_id' => 13,
                'permission_id' => 243,
            ],
            [
                'role_id' => 13,
                'permission_id' => 244,
            ],
            [
                'role_id' => 13,
                'permission_id' => 251,
            ],
            [
                'role_id' => 13,
                'permission_id' => 252,
            ],
            [
                'role_id' => 13,
                'permission_id' => 253,
            ],
            [
                'role_id' => 13,
                'permission_id' => 254,
            ],
            [
                'role_id' => 13,
                'permission_id' => 261,
            ],
            [
                'role_id' => 13,
                'permission_id' => 262,
            ],
            [
                'role_id' => 13,
                'permission_id' => 263,
            ],
            [
                'role_id' => 13,
                'permission_id' => 264,
            ],

            [
                'role_id' => 14,
                'permission_id' => 201,
            ],

            [
                'role_id' => 14,
                'permission_id' => 211,
            ],

            [
                'role_id' => 14,
                'permission_id' => 221,
            ],
            [
                'role_id' => 14,
                'permission_id' => 222,
            ],
            [
                'role_id' => 14,
                'permission_id' => 223,
            ],

            [
                'role_id' => 14,
                'permission_id' => 231,
            ],

            [
                'role_id' => 14,
                'permission_id' => 241,
            ],

            [
                'role_id' => 14,
                'permission_id' => 251,
            ],

            [
                'role_id' => 14,
                'permission_id' => 261,
            ],
            [
                'role_id' => 14,
                'permission_id' => 262,
            ],
            [
                'role_id' => 14,
                'permission_id' => 263,
            ],

        ]);
    }
}
