<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
  $categorias=["mouses" , "teclados" , "auriculares"];
  

    return [
        'name'=>$categorias[0],
    ];

});
