<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('productos')->insert([
            [
                'nombreProd' => 'Galleta Chocochip Vainilla',
                'descProd' => 'Galleta con masa de vainilla y chispas de chocolate Negro',
                'percioProd' => '3',
                'stokProduc' => '20',
            ],
            [
                'nombreProd' => 'Galleta Chocochip Chocolate',
                'descProd' => 'Galleta con masa de chocolate y chispas de chocolate Negro',
                'percioProd' => '3',
                'stokProduc' => '20',
            ]
        ]);
    }
}
