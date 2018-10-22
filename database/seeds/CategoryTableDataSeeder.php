<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'root',
                'children' => [
                    [
                    'name' => 'Electronics',
                        'children' => [
                            [
                                'name' => 'Mobile',
                                'children' => [
                                    ['name' => 'Apple'],
                                    ['name' => 'Samsung'],
                                    ['name' => 'Xiaomi'],
                                    ['name' => 'Honor'],
                                ],
                            ],
                            [
                                'name' => 'TV',
                                'children' => [
                                    ['name' => 'LED'],
                                    ['name' => 'OLED'],
                                    ['name' => 'IPS'],
                                ],
                            ],
                        ],
                    ],
                    [
                    'name' => 'Computer',
                        'children' => [
                            [
                                'name' => 'Processors',
                                'children' => [
                                    ['name' => 'AMD'],
                                    ['name' => 'Intel'],
                                ],
                            ],
                            [
                                'name' => 'VideoCart',
                                'children' => [
                                    ['name' => 'Nvidia'],
                                    ['name' => 'Radeon'],
                                ]
                            ],
                            [
                                'name' => 'RAM',
                                'children' => [
                                    ['name' => 'Patriot'],
                                    ['name' => 'Corsair'],
                                    ['name' => 'Kingston'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
