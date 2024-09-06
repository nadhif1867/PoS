<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage(){
        $products = [
            ['nama' => 'Burger'],
            ['nama' => 'Crispy Chicken'],
            ['nama' => 'French Fries'],
            ['nama' => 'Hash Brown'],
            ['nama' => 'Chicken Nugget']
        ];
        return view ('products', ['category' => 'FoodBeverage', 'products' => $products]);
    }

    public function beautyHealth(){
        $products = [
            ['nama' => 'Makeup'],
            ['nama' => 'Skin Care'],
            ['nama' => 'Hair Care'],
            ['nama' => 'Bath&Body'],
            ['nama' => 'Fragrance']
        ];
        return view ('products', ['category' => 'beautyHealth', 'products' => $products]);
    }

    public function homeCare(){
        $products = [
            ['nama' => 'Glass Cleaner'],
            ['nama' => 'Dishwashing Detergents'],
            ['nama' => 'Foam Soap'],
            ['nama' => 'Marble Cleaner'],
            ['nama' => 'Commode']
        ];
        return view ('products', ['category' => 'homeCare', 'products' => $products]);
    }

    public function babyKid(){
        $products = [
            ['nama' => 'Baby Food Maker'],
            ['nama' => 'Bottle Stelirilizer & Dryer'],
            ['nama' => 'Milk Shaker'],
            ['nama' => 'Bottle Warmer'],
            ['nama' => 'Baby Food Processor']
        ];
        return view ('products', ['category' => 'babyKid', 'products' => $products]);
    }
}
