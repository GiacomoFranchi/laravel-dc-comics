<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic_list = config('comic'); 
        foreach ($comic_list as $comic) {
            $new_comic = new Comic();
            $new_comic->titolo = $comic['title'];
            $new_comic->descrizione = $comic['description'];
            $new_comic->img = $comic['thumb'];
            $new_comic->prezzo = $comic['price'];
            $new_comic->serie = $comic['series'];
            $new_comic->data_pubblicazione = $comic['sale_date'];
            $new_comic->tipologia = $comic['type'];

            $new_comic->save();
        }
    }
}