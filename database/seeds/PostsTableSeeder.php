<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->title = 'Article title '.($i+1);
            $newPost->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, dolore. At, excepturi tenetur architecto asperiores accusamus ut facere aperiam deleniti culpa perferendis a doloribus ex pariatur, iusto nam itaque quam debitis eos quos dolore? Nisi, ullam? Tempore dolor pariatur autem recusandae neque officiis fugit molestias minima quod accusamus necessitatibus nemo in, deserunt aspernatur eius optio expedita non. Magnam, dolor. Ullam ex odit fuga tenetur dolorem laudantium asperiores reiciendis delectus deserunt, velit porro recusandae, expedita error unde! Officia error obcaecati qui a eius at ad fuga voluptas quos, eveniet voluptatem exercitationem deserunt consectetur aliquam quaerat accusamus, laudantium voluptates ea labore aliquid id adipisci? Reiciendis voluptatum ipsa quod, porro commodi tempora, facere assumenda laudantium saepe iusto asperiores maiores atque molestiae id. Suscipit vero dicta quas officiis, quasi officia in? Itaque earum dolor atque minima nulla deserunt perferendis recusandae, cupiditate porro facilis quia, ipsam possimus nostrum cumque dolorem rem id ea eum ut.';
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
