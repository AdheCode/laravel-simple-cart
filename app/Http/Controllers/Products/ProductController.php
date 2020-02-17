<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Scoping\Scopes\CategoryScope;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::with(['variations.stock'])->withScopes($this->scopes())->paginate(10);

    	return ProductIndexResource::collection($products);
    }

    public function show(Product $product)
    {
        $product->load(['variations.type', 'variations.stock', 'variations.product']);

    	return new ProductResource(
    		$product
    	);
    }

    protected function scopes()
    {
        return [
            'category' => new CategoryScope()
        ];
    }

    public function search(Request $request)
    {
        //Users should be able to search on any field, full value matching is fine
        if (!empty($request->search)) {
            $products = Product::where ('name', $request->search)
                                    ->orWhere('slug', $request->search)
                                    ->orWhere('price', $request->search)
                                    ->orWhere('description', $request->search)
                                    ->with(['variations.stock'])->withScopes($this->scopes())->paginate(10);
                                    
        } else {
            $products = Product::with(['variations.stock'])->withScopes($this->scopes())->paginate(10);
        }

        return ProductIndexResource::collection($products);
    }
}
