<?php

use App\User;
use App\Model\Review;

use App\Model\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // The code will run according to order of arrangement: User -> Product -> Reviews
        factory(User::class,5)->create();

        factory(Product::class,50)->create();

        factory(Review::class,300)->create();
    }
}
