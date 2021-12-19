<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Menu;
use App\Services\Shop\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ShopController extends Controller
{
    /**
     * List all drink shop items
     * 
     * @return View 
     * @throws BindingResolutionException 
     */
    public function drinks(CategoryService $categoryService): View
    {
        return view('pages.shop.index', [
            'type' => 'drink',
            'products' => Drink::paginate(15),
            'categories' => $categoryService->mapDrinkCategories(),
        ]);
    }

    /**
     * List all menu shop items
     * 
     * @return View 
     * @throws BindingResolutionException 
     */
    public function menus(): View
    {
        return view('pages.shop.index', [
            'type' => 'menu',
            'products' => Menu::paginate(15),
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