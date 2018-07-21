<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Macbook pro',
            'slug' => 'makbook-pro',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam asperiores at blanditiis consequuntur earum, eius eligendi, excepturi id inventore libero optio provident, quam quo veniam? Dolor itaque quo sit!',
            'price' => 500,
            'details' => '15inch, 1TB, 16GB RAM',
            'category_id' => 1,
        ]);
        Product::create([
            'name' => 'Asus',
            'slug' => 'asus',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam asperiores at blanditiis consequuntur earum, eius eligendi, excepturi id inventore libero optio provident, quam quo veniam? Dolor itaque quo sit!',
            'price' => 500,
            'details' => '15inch, 1TB, 16GB RAM',
            'category_id' => 1,
        ]);
        Product::create([
            'name' => 'iMac',
            'slug' => 'i-mac',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam asperiores at blanditiis consequuntur earum, eius eligendi, excepturi id inventore libero optio provident, quam quo veniam? Dolor itaque quo sit!',
            'price' => 500,
            'details' => '15inch, 1TB, 16GB RAM',
            'category_id' => 1,
        ]);
        Product::create([
            'name' => 'Acer',
            'slug' => 'acer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam asperiores at blanditiis consequuntur earum, eius eligendi, excepturi id inventore libero optio provident, quam quo veniam? Dolor itaque quo sit!',
            'price' => 500,
            'details' => '15inch, 1TB, 16GB RAM',
            'category_id' => 1,
        ]);
        Product::create([
            'name' => 'Lenavo',
            'slug' => 'lenavo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam asperiores at blanditiis consequuntur earum, eius eligendi, excepturi id inventore libero optio provident, quam quo veniam? Dolor itaque quo sit!',
            'price' => 500,
            'details' => '15inch, 1TB, 16GB RAM',
            'category_id' => 1,
        ]);
    }
}
