<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public $categories = [

        'Elettronica',
        'Abbigliamento',
        'Casa e giardino',
        'Giochi e giocattoli',
        'Salute e bellezza',
        'Sport e tempo libero',
        'Motori',
        'Animali domestici',
        'Accessori',
        'Libri e reviste',
        'Musica e film',
    ];

    

    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::of($category)->slug('-'),
            ]);
        }
    }


}
