<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /*Camisetas deportivas*/
            [
                'category_id' => 1,
                'name' => 'Camisetas deportivas hombres',
                'slug' => Str::slug('Camisetas deportivas hombres'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' => 1,
                'name' => 'Camisetas deportivas mujeres',
                'slug' => Str::slug('Camisetas deportivas mujeres'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' => 1,
                'name' => 'Ofertas',
                'slug' => Str::slug('Ofertas')
            ],
            /*Accesorios*/
            [
                'category_id' => 2,
                'name' => 'Accesorios para dama',
                'slug' => Str::slug('Accesorios para dama'),
                'color' => true

            ],
            [
                'category_id' => 2,
                'name' => 'Accesorios para caballero',
                'slug' => Str::slug('Accesorios para caballero'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Ofertas Accesorios',
                'slug' => Str::slug('Ofertas Accesorios'),

            ],

            [
                'category_id' => 3,
                'name' => 'Moda para caballeros',
                'slug' => Str::slug('Moda para caballeros'),
                'color' => true,
                'size' => true

            ],

            [
                'category_id' => 3,
                'name' => 'Moda para damas',
                'slug' => Str::slug('Moda para damas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Moda para caballeros',
                'slug' => Str::slug('Moda para caballeros'),
                'color' => true,
                'size' => true

            ],

            [
                'category_id' => 4,
                'name' => 'Moda para damas',
                'slug' => Str::slug('Moda para damas'),
                'color' => true,
                'size' => true
            ],

        ];

        foreach ($subcategories as $subcategory) {


            Subcategory::create($subcategory);

        }
    }
}
