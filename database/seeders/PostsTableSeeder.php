<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Post;
use App\models\Category;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        $category = new Category();
        $category->name = "Categoria #1";
        $category->save();

        $category = new Category();
        $category->name = "Categoria #2";
        $category->save();

        $category = new Category();
        $category->name = "Categoria #3";
        $category->save();

        $post = new Post;
        $post->title = 'mi primer post';
        $post->excerpt = 'extracto #1';
        $post->body = 'lorem ipsum dolor sit amet, consectetlorem ipsum dolor sit amet, consectet';
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = 'mi segundo post';
        $post->excerpt = 'extracto #2';
        $post->body = 'lorem ipsum dolor sit amet, consectetlorem ipsum dolor sit amet, consectet';
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title = 'mi tercer post';
        $post->excerpt = 'extracto #3';
        $post->body = 'lorem ipsum dolor sit amet, consectetlorem ipsum dolor sit amet, consectet';
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = 'mi cuarto post';
        $post->excerpt = 'extracto #4';
        $post->body = 'lorem ipsum dolor sit amet, consectetlorem ipsum dolor sit amet, consectet';
        $post->published_at = Carbon::now()->subDays(5);
        $post->category_id = 3;
        $post->save();
    }
}
