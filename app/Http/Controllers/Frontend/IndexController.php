<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Notifications\RegisterUserNotification;
use Illuminate\Support\Facades\Notification;

class IndexController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $products = Product::where('product_name', 'LIKE', "%$query%")
                           ->orWhere('product_slug', 'LIKE', "%$query%")
                           ->orWhereHas('categories', function($q) use ($query) {
                               $q->where('category_name', 'LIKE', "%$query%");
                           })
                           ->orWhereHas('subcategories', function($q) use ($query) {
                               $q->where('subcategory_name', 'LIKE', "%$query%");
                           })
                           ->get();
    
        return view('frontend.search_results', compact('products', 'query'));
    }




    public function ProductDetails($id, $slug)
    {
        $product = Product::findOrFail($id);

        $multiImage = MultiImg::where('product_id', $id)->get();

        return view('frontend.product.product_details', compact('product', 'multiImage'));
    } // End Method



    public function CatWiseProduct(Request $request, $id, $slug)
    {
        $products = Product::where('status', 1)->where('category_id', $id)->orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $breadcat = Category::where('id', $id)->first();
        $newProduct = Product::orderBy('id', 'DESC')->limit(5)->get();

        return view('frontend.product.category_view', compact('products', 'categories', 'breadcat', 'newProduct'));
    } // End Method



    public function SubCatWiseProduct(Request $request, $id, $slug)
    {
        $products = Product::where('status', 1)->where('subcategory_id', $id)->orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('category_name', 'ASC')->get();

        $breadsubcat = SubCategory::where('id', $id)->first();

        $newProduct = Product::orderBy('id', 'DESC')->limit(5)->get();

        return view('frontend.product.subcategory_view', compact('products', 'categories', 'breadsubcat', 'newProduct'));
    } // End Method



    public function ProductViewAjax($id)
    {
        $product = Product::with('brand', 'category', 'subcategory')->findOrFail($id);

        return response()->json(array(
            'product' => $product,
        ));
    } // End Method

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        // event(new Registered($user));
        Auth::login($user);
        $nuser = User::where('role', 'admin')->get();
        Notification::send($nuser, new RegisterUserNotification($request));

        return redirect(RouteServiceProvider::HOME);
    } // End Method
}
