<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProductManagement;
use Illuminate\Support\Facades\Log;

class ProductManagementController extends Controller
{
    public function AddProduct()
    {
        $users = User::where('role','user')->get(); // Fetch all users
        $products = Product::all(); // Fetch all products

        return view('backend.manageProduct.add_productManagement', compact('users', 'products'));
    }



    public function StoreProduct(Request $request)
    {
        // Validate the incoming request (optional but recommended)
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',  // Ensure user is selected
            'products' => 'required|array',  // Ensure products are provided
            'products.*.product_id' => 'required|exists:products,id',  // Ensure product IDs are valid
            'products.*.price' => 'required|numeric',  // Validate price
            'products.*.quantity' => 'required|integer',  // Validate quantity
            'products.*.discount_price' => 'nullable|numeric',  // Validate discount price
        ]);
    
        try {
            // Extract product data from the request
            $productIds = [];
            $productPrices = [];
            $quantities = [];
            $discountPrices = [];
    
            // Loop through each product and store the data in arrays
            foreach ($request->products as $product) {
                $productIds[] = $product['product_id'];
                $productPrices[] = $product['price'];
                $quantities[] = $product['quantity'];
                $discountPrices[] = $product['discount_price'] ?? 0;  // Default to 0 if discount price is not provided
            }
    
            // Save the product data as JSON arrays
            $product = new ProductManagement();
            $product->user_id = $request->user_id;
            $product->product_id = json_encode($productIds);
            $product->product_price = json_encode($productPrices);
            $product->quantity = json_encode($quantities);
            $product->discount_price = json_encode($discountPrices);
            $product->save();
    
            // Return success response
            return response()->json(['success' => 'Products saved successfully!']);
        } catch (\Exception $e) {
            // Return error response if an exception occurs
            return response()->json(['error' => 'Something went wrong!']);
        }
    }


    public function showProductCalculations()
    {
        // Fetch all product management records along with user relationships
        $productManagementRecords = ProductManagement::with('user')->get();
    
        $calculations = [];
    
        foreach ($productManagementRecords as $record) {
            // Decode JSON arrays
            $productIds = json_decode($record->product_id);
            $productPrices = json_decode($record->product_price);
            $quantities = json_decode($record->quantity);
            $discountPrices = json_decode($record->discount_price);
    
            // Get user name
            $userName = $record->user ? $record->user->name : 'Unknown User';
    
            // Loop through each product ID and fetch the product name, thumbnail, and details
            foreach ($productIds as $index => $productId) {
                // Fetch the product name and thumbnail using the product ID
                $product = Product::find($productId);
                $productName = $product ? $product->product_name : 'Unknown Product';
                $productThumbnail = $product ? asset($product->product_thambnail) : 'default-thumbnail.jpg'; // Set default if no thumbnail exists
    
                // Get the price, quantity, and discount for the current product
                $price = $productPrices[$index];
                $quantity = $quantities[$index];
                $discountPrice = $discountPrices[$index];
    
                // Calculate price * quantity - discount price
                $totalPrice = ($price * $quantity) - $discountPrice;
    
                // Store the calculation with all details
                $calculations[] = [
                    'user_name' => $userName,
                    'product_name' => $productName,
                    'product_thumbnail' => $productThumbnail,
                    'price' => $price,
                    'quantity' => $quantity,
                    'discount_price' => $discountPrice,
                    'total_price' => $totalPrice,
                ];
            }
        }
    
        // Pass the calculations to the Blade view
        return view('backend.manageProduct.show_all_product', compact('calculations'));
    }


    // public function exportProductCalculations()
    // {
    //     // Fetch the calculations data for export
    //     $productManagementRecords = ProductManagement::with('user')->get();

    //     $calculations = [];

    //     foreach ($productManagementRecords as $record) {
    //         $productIds = json_decode($record->product_id);
    //         $productPrices = json_decode($record->product_price);
    //         $quantities = json_decode($record->quantity);
    //         $discountPrices = json_decode($record->discount_price);

    //         $userName = $record->user ? $record->user->name : 'Unknown User';

    //         foreach ($productIds as $index => $productId) {
    //             $product = Product::find($productId);
    //             $productName = $product ? $product->product_name : 'Unknown Product';
    //             $productThumbnail = $product ? asset($product->product_thambnail) : 'default-thumbnail.jpg';

    //             $price = $productPrices[$index];
    //             $quantity = $quantities[$index];
    //             $discountPrice = $discountPrices[$index];

    //             $totalPrice = ($price * $quantity) - $discountPrice;

    //             $calculations[] = [
    //                 'user_name' => $userName,
    //                 'product_name' => $productName,
    //                 'product_thumbnail' => $productThumbnail,
    //                 'price' => $price,
    //                 'quantity' => $quantity,
    //                 'discount_price' => $discountPrice,
    //                 'total_price' => $totalPrice,
    //             ];
    //         }
    //     }

    //     // Return the Excel file download
    //     return Excel::download(new ProductCalculationsExport($calculations), 'product_calculations.xlsx');
    // }
    
 
}
