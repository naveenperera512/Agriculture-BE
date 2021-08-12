<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                "name" => "Admin",
                "email" => "admin@agriculture.com",
                "password" => bcrypt("password"),
                "is_admin" => 1,
                "email_verified_at" => Carbon::now(),
                "remember_token" => "basic_token",
            ],
            [
                "name" => "Naveen",
                "email" => "naveen@10qbit.com",
                "password" => bcrypt("password"),
                "is_admin" => 0,
                "email_verified_at" => Carbon::now(),
                "remember_token" => "basic_token",
            ],
            [
                "name" => "Sunil",
                "email" => "sunil@10qbit.com",
                "password" => bcrypt("password"),
                "is_admin" => 0,
                "email_verified_at" => Carbon::now(),
                "remember_token" => "basic_token",
            ],
        ];

        foreach($users as $user) User::create([
            "name" => $user["name"],
            "email" => $user["email"],
            "email_verified_at" => $user["email_verified_at"],
            "password" => $user["password"],
            "is_admin" => $user["is_admin"],
            "remember_token" => $user["remember_token"],
        ]);
    }
}
