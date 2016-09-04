<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use Cart;
use \App\Colour;
use \App\Size;
use Validator;
class CartController extends Controller
{

    /*
    add items to cart
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
            'product_id' => 'required',
        ]);
        if ($validator->fails()) {
           //validation error
            $data['error'] = $validator->errors()->all();
            return \Response::json($data, 422 ); // Status code here
        }
        //validate product is correct
        $product = Product::find($request->product_id);
        if ($product == '') {
           $data['error'] = 'Invalid product or inactive product please try again later';
            return \Response::json($data, 422 ); // Status code here
        }
        
        $price = ($product->is_sale == 1 ? $product->price_discounts : $product->price);
        $items = array(
            'id'       => $product->id,
            'name'     => $product->title,
            'price'    => $price,
            'options'  => [
                'size'  => $request->size,
                'color' => $request->color,
            ],
            'quantity' => $request->quantity,
        );

        // Make the insert...
        Cart::insert($items);

        $data['message'] = $product->title." aded to your cart";
        $data['status']=true;
        return \Response::json($data, 200 ); // Status code here
    }

    public function view(){
        
        return view('products.cart');
    }

}
