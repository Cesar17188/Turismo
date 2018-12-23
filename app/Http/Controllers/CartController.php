<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
    	$cart = auth()->user()->cart;
    	$cart->status = 'Pending';
    	$cart->save(); //update


		$notification = 'Tu tour se ha registrado correctamente, te contactaremos pronto!';
    	return back()->with(compact('notification')); 
    }
}
