<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\ProductManagement;
use App\Models\Product;

class ProductCalculationsExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        // Get the data for export
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

        return collect($calculations); // Return the data collection
    }

    // Define the headings for the exported file
    public function headings(): array
    {
        return [
            'User Name',
            'Product Name',
            'Product Thumbnail',
            'Price',
            'Quantity',
            'Discount Price',
            'Total Price (Price * Quantity - Discount Price)',
        ];
    }

    // Optional: Map data for each row (if you need to customize it)
    public function map($calculation): array
    {
        return [
            $calculation['user_name'],
            $calculation['product_name'],
            $calculation['product_thumbnail'],
            $calculation['price'],
            $calculation['quantity'],
            $calculation['discount_price'],
            $calculation['total_price'],
        ];
    }
}
