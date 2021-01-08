<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body'=> $faker->text,
        'category'=> $faker->word,
        'image'=> 'https://source.unsplash.com/640x640/?rock-concert',
        'user_id'=> function(){
            return \App\User::all()->random();
        }
    ];
});
