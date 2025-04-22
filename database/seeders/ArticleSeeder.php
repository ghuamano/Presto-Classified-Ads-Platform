<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                "title" => "iPhone 13 Pro Max 256GB",
                "image" => "https://picsum.photos/400/400?random=1",
                "description" => "Vendo iPhone 13 Pro Max in ottime condizioni, completo di scatola e accessori.",
                "price" => 900,
                "category_id" => 1 // Electronica
            ],
            [
                "title" => "T-Shirt Nike Uomo",
                "image" => "https://picsum.photos/400/400?random=2",
                "description" => "T-shirt sportiva Nike, colore nero, taglia L.",
                "price" => 30,
                "category_id" => 2 // Abbigliamento
            ],
            [
                "title" => "Divano in pelle 3 posti",
                "image" => "https://picsum.photos/400/400?random=3",
                "description" => "Divano in pelle marrone, comodo e ben tenuto.",
                "price" => 350,
                "category_id" => 3 // Casa e giardino
            ],
            [
                "title" => "LEGO Technic Ferrari 488 GTE",
                "image" => "https://picsum.photos/400/400?random=4",
                "description" => "Modello dettagliato della Ferrari 488 GTE, perfetto per collezionisti.",
                "price" => 180,
                "category_id" => 4 // Giochi e giocattoli
            ],
            [
                "title" => "Set di creme viso anti-età",
                "image" => "https://picsum.photos/400/400?random=5",
                "description" => "Creme idratanti con acido ialuronico per una pelle luminosa.",
                "price" => 50,
                "category_id" => 5 // Salute e bellezza
            ],
            [
                "title" => "Bicicletta da corsa Bianchi",
                "image" => "https://picsum.photos/400/400?random=6",
                "description" => "Bici da corsa Bianchi, telaio in carbonio, cambio Shimano Ultegra.",
                "price" => 1200,
                "category_id" => 6 // Sport e tempo libero
            ],
            [
                "title" => "Fiat Panda 1.2 Benzina 2015",
                "image" => "https://picsum.photos/400/400?random=7",
                "description" => "Auto in ottime condizioni, pochi km, revisione e bollo pagati.",
                "price" => 6000,
                "category_id" => 7 // Motori
            ],
            [
                "title" => "Cuccia per cane taglia grande",
                "image" => "https://picsum.photos/400/400?random=8",
                "description" => "Cuccia in legno impermeabile per cani di grossa taglia.",
                "price" => 120,
                "category_id" => 8 // Animali domestici
            ],
            [
                "title" => "Zaino in pelle Gucci",
                "image" => "https://picsum.photos/400/400?random=9",
                "description" => "Zaino originale Gucci in pelle marrone, modello esclusivo.",
                "price" => 800,
                "category_id" => 9 // Accessori
            ],
            [
                "title" => "Collezione completa Harry Potter",
                "image" => "https://picsum.photos/400/400?random=10",
                "description" => "Tutti i 7 libri di Harry Potter in edizione speciale.",
                "price" => 130,
                "category_id" => 10 // Libri e riviste
            ],
            [
                "title" => "Vinile Pink Floyd - The Dark Side of the Moon",
                "image" => "https://picsum.photos/400/400?random=11",
                "description" => "Edizione limitata del vinile dei Pink Floyd, in perfette condizioni.",
                "price" => 60,
                "category_id" => 11 // Musica e film
            ]
        ];

        foreach ($articles as $article) {
            Article::create([
                
                'title' => $article['title'],
                'image' => $article['image'],
                'description' => $article['description'],
                'price' => $article['price'],
                'category_id' => $article['category_id'],
                'user_id' => 1
            ]);
        }
    }
}