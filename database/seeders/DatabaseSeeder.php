<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias aliquam asperiores autem commodi consequuntur, dolore doloribus dolorum eligendi id in incidunt ipsum iste laboriosam laudantium magni maxime minus molestiae natus placeat porro recusandae repellendus sed tempore totam vitae. Culpa harum illo magni maxime provident quibusdam, tempore veniam vitae! Architecto asperiores, aspernatur debitis deleniti eligendi esse ex fugit incidunt maiores, natus nostrum numquam obcaecati quasi rerum, sint soluta voluptatem. Blanditiis corporis cupiditate exercitationem explicabo in iure laboriosam magnam, nihil odio optio perferendis qui ratione sequi ullam voluptatibus? Ad aliquid et facere facilis id! Debitis facere fuga laboriosam nostrum, officiis repellat suscipit tenetur ullam voluptatibus voluptatum? Atque eius eum ipsam minus nobis quibusdam soluta totam. Aperiam, consequuntur debitis dignissimos ducimus ea iure laborum maxime odit quasi repudiandae velit voluptatem? Ab magnam numquam sint! Ab architecto autem commodi cum doloremque ducimus ea excepturi ipsum, magnam natus obcaecati quae quasi quisquam reiciendis sit tenetur, vero? Iusto laboriosam mollitia non, praesentium reiciendis rerum tenetur ut? A ad aperiam asperiores aspernatur beatae blanditiis commodi consectetur deserunt dicta ea eaque eligendi eum expedita fugiat ipsam maiores minus nihil obcaecati optio pariatur porro possimus provident quas quibusdam quo quod repellat, rerum sapiente sint soluta veritatis voluptatibus.'
        ]);

    }
}
