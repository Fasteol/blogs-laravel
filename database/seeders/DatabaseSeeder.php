<?php

namespace Database\Seeders;
use App\Models\DataBlogs;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DataBlogs::create([
            'title' => 'Judul Default 1',
            'image' => 'https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptate beatae delectus. Temporibus pariatur animi minus nihil! Minima, pariatur est quas deserunt eligendi dolor ullam quos suscipit totam, voluptas ut distinctio dicta perferendis odit adipisci commodi mollitia temporibus laudantium voluptatibus quae voluptates facere ex placeat nisi! Sunt fugit alias, rem sequi hic reprehenderit blanditiis numquam doloribus cupiditate accusantium. Dolor fugit esse distinctio similique a cumque? Adipisci suscipit cum beatae ipsam esse corrupti, perferendis, fuga architecto assumenda ipsum voluptas ullam neque repellat? Dolorem fuga, tempore nemo nihil consequatur odit vero rem quod illo, deleniti totam id, qui commodi quis nesciunt quia!',
            'author' => 'Admin'
        ]);
    }
}
