<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::orderBy('id', 'DESC')->paginate(10);

        return view('products.index', compact('products'));
    }

    public function destroy($id){

        $product = Product::find($id);
        $product->delete();

        return back()->with('info', 'producto eliminado!!!');
    }

    public function create(){

        return view('products.create');
    }

    public function store(ProductRequest $request){

        $product = new Product;
        $product->name = $request->name;
        $product->short = $request->short;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index')
            ->with('info', "producto $product->name creado!!!");
    }

    public function show($id){

        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    public function edit($id){

        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id){

        $product = Product::find($id);
        $product->name = $request->name;
        $product->short = $request->short;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index')
            ->with('info', "producto $product->name actualizado!!!");
    }
}
