<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tag;
use Faker\Generator as Faker;

/*------------------Usando factorys---------------*/
// $factory->define(Tag::class, function (Faker $faker) {
//     return [
//         'name'=>$faker->word,
//     ];
// });

//marca 
$categorias=["mouses" , "teclados" , "auriculares"];

foreach ($categorias as $value) {
  $tag = new Tag;
  $tag->name = $value;
  $tag->save();
}
