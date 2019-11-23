<?php

use Illuminate\Database\Seeder;
use App\item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i = 0; $i < 20; $i++ ) {
            Item::insert([
                'user_id' => 1,
                'item_name' => 'model'.$i,
            ]);
        }
    }
}
