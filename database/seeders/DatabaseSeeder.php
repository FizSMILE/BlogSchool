<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
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
        User::Create([
            'name' => 'Hafiz Aza',
            'username' => 'hafizaza',
            'email' => 'Hafizaza@gmail.com',
            'avatar' => 'https://ui-avatars.com/api/?name=Hafiz+Aza',
            'password' => bcrypt('12312345'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => 'food',
        ]);
        
        Category::create([
            'name' => 'Programmer',
            'slug' => 'programmer',
        ]);
        Blog::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Hafiz',
        //     'email' => 'hafiz@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // User::create([
        //     'name' => 'Ferdy SAMBO',
        //     'email' => 'FerdySambo@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        

        // Blog::create([
        //     'title' => 'Belajar web design',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, perspiciatis.',
        //     'about' => 'Web Design',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam consequuntur neque, soluta fugit, ipsa corporis voluptates ea aliquam accusamus nihil laborum consectetur, odio eos quod quasi iure impedit sunt amet voluptatem minus. Sed rerum fugit soluta tempore perferendis iste dolorum, harum corporis voluptates quasi deleniti necessitatibus nisi, cupiditate nobis libero quos sit maxime eos nihil laudantium veniam. Dolores ipsam nulla corporis quibusdam exercitationem eos obcaecati impedit nesciunt enim, consequatur soluta deleniti optio fugit dolore odit possimus quam commodi ipsa porro pariatur in? Aspernatur eaque voluptatum architecto saepe temporibus, alias illum aliquid modi dignissimos, doloribus cum? Quo voluptatum odio commodi! Incidunt.',
        //     'picture' => '/assets/img/post-3.jpg',
        // ]);

        // Blog::create([
        //     'title' => 'Belajar web design 2s',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, perspiciatis.',
        //     'about' => 'Web Design',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam consequuntur neque, soluta fugit, ipsa corporis voluptates ea aliquam accusamus nihil laborum consectetur, odio eos quod quasi iure impedit sunt amet voluptatem minus. Sed rerum fugit soluta tempore perferendis iste dolorum, harum corporis voluptates quasi deleniti necessitatibus nisi, cupiditate nobis libero quos sit maxime eos nihil laudantium veniam. Dolores ipsam nulla corporis quibusdam exercitationem eos obcaecati impedit nesciunt enim, consequatur soluta deleniti optio fugit dolore odit possimus quam commodi ipsa porro pariatur in? Aspernatur eaque voluptatum architecto saepe temporibus, alias illum aliquid modi dignissimos, doloribus cum? Quo voluptatum odio commodi! Incidunt.',
        //     'picture' => '/assets/img/post-3.jpg',
        // ]);

        // Blog::create([
        //     'title' => 'Makanan cepat saji 3',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, perspiciatis.',
        //     'about' => 'Food',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente corrupti, quibusdam, molestias ullam consequuntur similique beatae quaerat quos aliquam veniam, atque rem consectetur? Quis doloribus officiis odio a nihil facere culpa sequi quod laudantium, reiciendis obcaecati suscipit sunt adipisci, rerum mollitia iure quam quibusdam quasi accusamus veritatis explicabo labore! Enim.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, quidem voluptas ullam at incidunt accusamus harum sint ipsum tempora asperiores natus, error nulla iste quas ad dolore. Recusandae possimus tempora eaque, repellendus tempore impedit blanditiis quis consectetur praesentium aperiam nihil quibusdam eveniet ipsam nulla ex error est natus incidunt. Recusandae?</p>',
        //     'picture' => '/assets/img/post-2.jpg',
        // ]);

        // Blog::create([
        //     'title' => 'Makanan cepat saji 4',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-post-keeempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, perspiciatis.',
        //     'about' => 'Food',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente corrupti, quibusdam, molestias ullam consequuntur similique beatae quaerat quos aliquam veniam, atque rem consectetur? Quis doloribus officiis odio a nihil facere culpa sequi quod laudantium, reiciendis obcaecati suscipit sunt adipisci, rerum mollitia iure quam quibusdam quasi accusamus veritatis explicabo labore! Enim.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, quidem voluptas ullam at incidunt accusamus harum sint ipsum tempora asperiores natus, error nulla iste quas ad dolore. Recusandae possimus tempora eaque, repellendus tempore impedit blanditiis quis consectetur praesentium aperiam nihil quibusdam eveniet ipsam nulla ex error est natus incidunt. Recusandae?</p>',
        //     'picture' => '/assets/img/post-2.jpg',
        // ]);

        
    }
}
