<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create(['name'=>'Programming']);
        Category::create(['name'=>'Bisnis dan Uang']);
        Category::create(['name'=>'Tips']);
        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ut.',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 1,
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sed eveniet, odio, aliquid vero ratione suscipit quia harum voluptas nisi ipsam dolorem enim eum recusandae, reprehenderit beatae sit. Qui labore quae placeat odio, dolorem iusto laudantium laborum illum culpa ullam iure nam officiis sequi, aliquam, commodi nihil nisi sint non?",
            'slug' => 'lorem-ipsum-dolor-sit,-amet-consectetur-adipisicing-elit.-odio-vitae1.'
        ]);
        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ut.',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 2,
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sed eveniet, odio, aliquid vero ratione suscipit quia harum voluptas nisi ipsam dolorem enim eum recusandae, reprehenderit beatae sit. Qui labore quae placeat odio, dolorem iusto laudantium laborum illum culpa ullam iure nam officiis sequi, aliquam, commodi nihil nisi sint non?",
            'slug' => 'lorem-ipsum-dolor-sit,-amet-consectetur-adipisicing-elit.-odio-vitae2.'
        ]);
        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ut.',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 3,
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sed eveniet, odio, aliquid vero ratione suscipit quia harum voluptas nisi ipsam dolorem enim eum recusandae, reprehenderit beatae sit. Qui labore quae placeat odio, dolorem iusto laudantium laborum illum culpa ullam iure nam officiis sequi, aliquam, commodi nihil nisi sint non?",
            'slug' => 'lorem-ipsum-dolor-sit,-amet-consectetur-adipisicing-elit.-odio-vitae3.'
        ]);
        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ut.',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 2,
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sed eveniet, odio, aliquid vero ratione suscipit quia harum voluptas nisi ipsam dolorem enim eum recusandae, reprehenderit beatae sit. Qui labore quae placeat odio, dolorem iusto laudantium laborum illum culpa ullam iure nam officiis sequi, aliquam, commodi nihil nisi sint non?",
            'slug' => 'lorem-ipsum-dolor-sit,-amet-consectetur-adipisicing-elit.-odio-vitae4.'
        ]);
        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ut.',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 1,
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sed eveniet, odio, aliquid vero ratione suscipit quia harum voluptas nisi ipsam dolorem enim eum recusandae, reprehenderit beatae sit. Qui labore quae placeat odio, dolorem iusto laudantium laborum illum culpa ullam iure nam officiis sequi, aliquam, commodi nihil nisi sint non?",
            'slug' => 'lorem-ipsum-dolor-sit,-amet-consectetur-adipisicing-elit.-odio-vita5.'
        ]);
        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ut.',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 3,
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sed eveniet, odio, aliquid vero ratione suscipit quia harum voluptas nisi ipsam dolorem enim eum recusandae, reprehenderit beatae sit. Qui labore quae placeat odio, dolorem iusto laudantium laborum illum culpa ullam iure nam officiis sequi, aliquam, commodi nihil nisi sint non?",
            'slug' => 'lorem-ipsum-dolor-sit,-amet-consectetur-adipisicing-elit.-odio-vitae6.'
        ]);
    }
}
