<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Advertisement;

class AdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $advertisements = [
            [
                'category_id' => 1,
                'subcategory_id' => 1,
                'admin_id' => 1,
                'slug' => 'First ad',
                'title' => 'First Advertisement',
                'description' => 'You can buy plants',
                'status' => 1,
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 2,
                'admin_id' => 2,
                'slug' => 'First ad',
                'title' => 'First Advertisement',
                'description' => 'You can buy plants',
                'status' => 1,
            ],
        ];

        foreach ($advertisements as $advertisement){
            Advertisement::create([
                'category_id' => $advertisement['category_id'],
                'subcategory_id' => $advertisement['subcategory_id'],
                'admin_id' => $advertisement['admin_id'],
                'slug' => $advertisement['slug'],
                'title' => $advertisement['title'],
                'description' => $advertisement['description'],
                'status' => $advertisement['status'],
            ]);
        }
    }
}
