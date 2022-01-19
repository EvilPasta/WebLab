<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
* Контроллер для управления товарами
*/
class ProductController extends Controller
{

    public $arr = array(
    [
                                          'id' => 1,
                                          'title' => 'EvA, portrait.',
                                          'author' => 'EvilPasta',
                                          'description' => 'The first portrait of EvA. You are ordering a 50x50 cm high quality color printed picture. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 499,
                                          'type' =>'Framed picture'
                                      ],
                                      [
                                          'id' => 2,
                                          'title' => 'Subjugator.',
                                          'author' => 'EvilPasta',
                                          'description' => 'High quality retraced picture of a Vault Boy - Subjugator. You are ordering a 50x50 cm high quality color printed picture. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 399,
                                          'type' =>'Framed picture'
                                      ],
                                      [
                                          'id' => 3,
                                          'title' => 'EvilPasta and MurpXP.',
                                          'author' => 'EvilPasta',
                                          'description' => 'Initially made as a gift to MurpXP, now available for everyone! You are ordering a 50x50 cm high quality color printed picture. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 499,
                                          'type' =>'Framed picture'
                                      ],
                                      [
                                          'id' => 4,
                                          'title' => 'Impim the Detective.',
                                          'author' => 'EvilPasta',
                                          'description' => 'Town of Salem hero! You are ordering a 50x50 cm high quality color printed picture. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 439,
                                          'type' =>'Framed picture'
                                      ],
                                      [
                                          'id' => 5,
                                          'title' => 'Giggly Impim.',
                                          'author' => 'EvilPasta',
                                          'description' => 'That Impim is up to something. You are ordering a 50x50 cm high quality color printed picture. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 399,
                                          'type' =>'Framed picture'
                                      ],
                                      [
                                          'id' => 6,
                                          'title' => 'Bonked Ice.',
                                          'author' => 'EvilPasta',
                                          'description' => 'You were not supposed to say that Ice! :D You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 7,
                                          'title' => 'Angel Skye.',
                                          'author' => 'EvilPasta',
                                          'description' => 'She is so precious and innocent! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 8,
                                          'title' => 'Pika Pickle',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable mash up between a pickle and a Pikachu! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 9,
                                          'title' => 'Tiny boi Black',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 10,
                                          'title' => 'Tiny boi Blue',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 11,
                                          'title' => 'Tiny boi Brown',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 12,
                                          'title' => 'Tiny boi Cyan',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 13,
                                          'title' => 'Tiny boi Dark Green',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 14,
                                          'title' => 'Tiny boi Green',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 15,
                                          'title' => 'Tiny boi Orange',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 16,
                                          'title' => 'Tiny boi Pink',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 17,
                                          'title' => 'Tiny boi Purple',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 18,
                                          'title' => 'Tiny boi Red',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 19,
                                          'title' => 'Tiny boi White',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ],
                                      [
                                          'id' => 20,
                                          'title' => 'Tiny boi Yellow',
                                          'author' => 'EvilPasta',
                                          'description' => 'Adorable Tiny Boi of your preffered color! You are ordering a high quality color printed set of 5 stickers. Additionally you will be rewarded with an avatar to use in our upcoming game.',
                                          'price' => 99,
                                          'type' =>'Sticker'
                                      ]
                                      );
    /**
    * Список товаров.
    * @return array[]
    */
    public function list()
    {
        return $this->arr;
    }

    /**
    * Информация о товаре
    * @param $id
    * @return array
    */
    public function info($id)
    {
        return  $this->arr[$id-1];
    }
}
