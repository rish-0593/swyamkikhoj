<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create = Post::insert([
            'category_id' => "1",
            'title' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit ",
            'slug' => "Lorem ipsum dolor sit amet, consectet",
            'content' => "Duis dictum, velit vel placerat imperdiet, urna nisl dictum ante, eu accumsan arcu ex ac quam. Fusce et vehicula tellus. Nullam nisl justo, facilisis iaculis diam blandit, sollicitudin semper diam. Fusce dictum felis eu arcu maximus rutrum. Nullam hendrerit fringilla massa,
             ac auctor orci elementum blandit. Ut eleifend enim pulvinar, feugiat nulla in, 
             dapibus odio. Vivamus sed tellus lorem. Sed pretium ante non elementum volutpat. Donec eget mollis nunc. Mauris mauris ligula,
              pellentesque et pellentesque in, tincidunt vel felis. Aenean tempor rhoncus ante, iaculis pretium dolor aliquam eget.
             Fusce erat lacus, vulputate ut tincidunt sit amet, porta vel augue. Curabitur pharetra venenatis aliquet. Integer semper bibendum vestibulum. Etiam tristique scelerisque ante eget suscipit. Ut euismod lorem turpis, a cursus elit auctor eget. In quis fringilla neque. Integer placerat augue eu lectus molestie, nec bibendum massa eleifend."
           ]);
    }
}
