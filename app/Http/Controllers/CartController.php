<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function ticket(Request $request) {
        $priceShirt = 5;
        $priceShoes = 2;
        $priceSocks = 4;
        $name = $request->input('name');
        $address = $request->input('address');
        $qShirts = $request->input('qShirts');
        $qShoes = $request->input('qShoes');
        $qSocks = $request->input('qSocks');
        $totalShirts = $priceShirt * $qShirts;
        $totalShoes = $priceShoes * $qShoes;
        $totalSocks = $priceSocks * $qSocks;
        $total = $totalShirts + $totalSocks + $totalShoes;

        if ($total >= 100) {
            $promotion = 'You have a promotion';
        } else {
            $promotion = 'You don`t have a promotion';
        }

        echo "<div class='ticket'>";
        echo "<h2> Name : " . $name . "</h2>";
        echo "<h2> Address : " . $address . "</h2>";
        echo "<h2> Shirts : " . $totalShirts . "</h2>";
        echo "<h2> Shoes : " . $totalShoes . "</h2>";
        echo "<h2> Socks : " . $totalSocks . "</h2>";
        echo "<h2> Total : " . $total . "</h2>";
        echo "<h2>" . $promotion . "</h2>";
        echo "</div>";

        return view('store.cart');
    }

    public function index() {

        return view('store.cart');
    }

}
