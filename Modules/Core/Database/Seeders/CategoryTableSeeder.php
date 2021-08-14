<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Category;
use Modules\Core\Entities\CategorySubcategory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categories = [
            [
                "name" => "Plants",
                "slug" => "Plants",
                "description" => "You can buy plants",
                "subcategories" => [
                    [
                        "name" => "Flowering Plants",
                        "slug" => "Flowering Plants",
                        "description" => "You can buy plants",
                    ],
                    [
                        "name" => "Vegetable Plants",
                        "slug" => "Vegitable Plants",
                        "description" => "You can buy plants",
                    ],
                    [
                        "name" => "Fruit Plants",
                        "slug" => "Fruit Plants",
                        "description" => "You can buy plants",
                    ],
                ]
            ],
            [
                "name" => "Seed",
                "slug" => "Seed",
                "description" => "You can buy plants",
                "subcategories" => [
                    [
                        "name" => "Seed1",
                        "slug" => "Seed1",
                        "description" => "You can buy plants",
                    ],
                    [
                        "name" => "Seed2",
                        "slug" => "Seed2",
                        "description" => "You can buy plants",
                    ],
                ]
            ],
            [
                "name" => "Fertilizer",
                "slug" => "Fertilizer",
                "description" => "You can buy plants",
                "subcategories" => [
                    [
                        "name" => "Fertilizer1",
                        "slug" => "Fertilizer1",
                        "description" => "You can buy plants",
                    ],
                    [
                        "name" => "Fertilizer2",
                        "slug" => "Fertilizer2",
                        "description" => "You can buy plants",
                    ],
                ]
            ],
        ];

        foreach($categories as $category){
            $category_entity = Category::create([
                "slug" => $category["slug"],
                "name" => $category["name"],
                "description" => $category["description"],
            ]);
            foreach($category["subcategories"] as $subcategory){
                CategorySubcategory::create([
                    "category_id" => $category_entity -> id,
                    "form_id" => 1,
                    "slug" => $subcategory["slug"],
                    "name" => $subcategory["name"],
                    "description" => $subcategory["description"],
                ]);
            }
        }
    }
}
