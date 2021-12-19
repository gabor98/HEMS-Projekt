<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Menu;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class ShopController extends Controller
{
    /**
     * Shop product list page
     * 
     * @param string $type 
     * @return View|Factory|RedirectResponse 
     * @throws BindingResolutionException 
     * @throws RouteNotFoundException 
     */
    public function index(string $type = '')
    {
        if (empty($type)) {
            return redirect()
                ->route('index');
        }

        if ($type !== 'drink' && $type !== 'menu') {
            return redirect()
                ->route('index');
        }

        // List all drink items 
        if ($type === 'drink') {
            $products = Drink::paginate(15);
        }

        // List all menu items
        if ($type === 'menu') {
            $products = Menu::paginate(15);
        }

        return view('pages.shop.index', [
            'products'  => $products,
            'type'      => $type,
        ]);
    }

    /**
     * Add to the shopping cart
     * 
     * @param Request $request 
     * @return RedirectResponse 
     * @throws ValidationException 
     * @throws BindingResolutionException 
     */
    public function storeShoppingCart(Request $request)
    {
        // Validate request data
        $data = $this->validate($request, [
            'type' =>  [
                'required',
                'string',
                Rule::in(['drink', 'menu']),
            ],
            'product' => 'required|numeric',
        ]);

        if ($data['type'] === 'drink') {
            $product = Drink::find($data['product']);
        }
        
        if ($data['type'] === 'menu') {
            $product = Menu::find($data['product']);
        }

        /** @var array $currentCart */
        $currentCart = Session::get('cart', []);

        // Product already exists, redirect back
        if (in_array($product, $currentCart) === true) {
            return redirect()
                ->back();
        }


        // Add to the cart
        $currentCart[] = $product;
        Session::put('cart', $currentCart);

        return redirect()
            ->back();
    }
}