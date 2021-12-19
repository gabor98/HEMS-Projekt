<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /** @var array $products */
        $products = $request
            ->session()
            ->get('cart');

        if (empty($products)) {
            return redirect()
                ->route('index');
        }

        return view('pages.cart.index', [
            'products' => $products,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id, Request $request)
    {
        /** @var null|array $products */
        $products = $request
            ->session()
            ->get('cart');

        // Redirect if cart is empty
        if ($products === null) {
            return redirect()
                ->route('index');
        }

        foreach ($products as $index => $product) {
            if ($product->id !== $id) {
                continue;
            }

            $products = array_splice($products, $index, 1);
        }

        Session::put('cart', $products);

        return redirect()
            ->route('cart.index');
    }
}