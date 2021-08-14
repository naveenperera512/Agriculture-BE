<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Advertisement;

class CoreDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            AdvertisementTableSeeder::class,
            UserFavoriteAdvertisementTableSeeder::class,
        ]);
    }
}
