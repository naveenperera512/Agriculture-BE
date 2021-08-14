<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\UserFavoriteAdvertisement;

class UserFavoriteAdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $favorites = [
            [
                'admin_id' => '1',
                'advertisement_id' => '1',
            ],
            [
                'admin_id' => '2',
                'advertisement_id' => '2',
            ],
        ];

        foreach ($favorites as $favorite){
            UserFavoriteAdvertisement::create([
                'admin_id' => $favorite['admin_id'],
                'advertisement_id' => $favorite['advertisement_id'],
            ]);
        }
    }
}
