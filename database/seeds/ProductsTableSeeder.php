<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Элемент соединительный внутренний',
                'description' => 'Для скругления соединений конструкций',
                'price' => '370',
                'image' => '/images/esv.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-70',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный наружный',
                'description' => 'Для скругления соединений конструкций',
                'price' => '420',
                'image' => '/images/esn.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-70',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный Заглушка',
                'description' => 'Предназначена для оформления торцевых срезов напольного скругляющего профиля',
                'price' => '330',
                'image' => '/images/esz.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-70',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный внутренний(ленолеум)',
                'description' => 'Для скругления соединений конструкций',
                'price' => '370',
                'image' => '/images/esv_ln_r-70.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-70',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный наружный(ленолеум)',
                'description' => 'Для скругления соединений конструкций',
                'price' => '420',
                'image' => '/images/esn_ln_r-70.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-70',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный Заглушка(ленолеум)',
                'description' => 'Предназначена для оформления торцевых срезов напольного скругляющего профиля',
                'price' => '330',
                'image' => '/images/esz_ln_r-70.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-70',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный внутренний',
                'description' => 'Для скругления соединений конструкций',
                'price' => '330',
                'image' => '/images/esv_50.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-50',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный наружный. Заглушка(ленолеум)',
                'description' => 'Предназначена для оформления торцевых срезов напольного скругляющего профиля',
                'price' => '330',
                'image' => '/images/esz_l_50.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-50',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный Заглушка',
                'description' => 'Предназначена для оформления торцевых срезов напольного скругляющего профиля',
                'price' => '300',
                'image' => '/images/esz_50.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-50',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный внутренний(потолок)',
                'description' => 'Для скругления соединений конструкций',
                'price' => '390',
                'image' => '/images/esv_p_50.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-50',
                'installation_elements' => 'саморезы'
            ],
            [
                'name' => 'Элемент соединительный наружный (потолок)',
                'description' => 'Для скругления соединений конструкций',
                'price' => '320',
                'image' => '/images/esn_p_50.png',
                'materials' => 'Алюминий - литье',
                'size' => 'R-50',
                'installation_elements' => 'саморезы'
            ]
        ]);
    }
}
