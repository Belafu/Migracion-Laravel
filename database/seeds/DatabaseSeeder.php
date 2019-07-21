<?php

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

        //En caso de tener tablas pivot (tablas intermedias) para resolver relaciones de muchos a muchos tenemos que refactorizar el código para poder completar la tabla pivot con datos de cada una de las otras 2 tablas que componene la relación.
        $usuers = factory(\App\User::class, 5)->create();
        $tags = factory(\App\Tag::class, 5)->create();
        $products = factory(\App\Product::class, 5)->create();

        //Recorremos los productos que acabamos de crear y completamos la tabla pivot con el método attach().
        //Para que todo funcione debe estar creada la relación de muchos a muchos en los modelos Product y Tag.
        //Noten que usamos el método de la relación, ahora con los paréntesis porque necesitamos procesar CON la relación y no obtener un objeto TAG.
        foreach ($products as $product) {
          $product->tags()->attach($tags->random());
        }


    }
}
