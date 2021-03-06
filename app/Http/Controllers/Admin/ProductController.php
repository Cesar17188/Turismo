<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products')); //listado
    }
    public function create()
    {
    	return view('admin.products.create'); //formulario de registro
    }
    public function store(Request $request)
    {
		//validar

		$messages = [
			'name.required' => 'Es ncesario ingresar el nombre del lugar',
			'name.min' => 'El nombre del lugar debe tener al menos 3 caracteres',
			'description.required' => 'Es necesario ingresar una descripcion corta del lugar',
			'description.max' => 'La descripción corta admite hasta 200 caracteres',
			'price.required' => 'Es necesario ingresar un precio para el lugar',
			'price.numeric' => 'Ingresar un precio valido',
			'price.min' => 'No se aceptan valores negativos'
		];

		$rules = [ 
			'name' => 'required|min:3',
			'description' => 'required|max:200',
			'price' => 'required|numeric|min:0'
		];


		$this->validate($request, $rules, $messages);

    	 //registrar el nuevo producto en la DB
    	//dd($request->all());
    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');

    	$product->save();//insert
    	 return redirect('/admin/products');
    }
    public function edit($id)
    {
    	$product = Product::find($id);
    	return view('admin.products.edit')->with(
    	compact('product')); //formulario de registro
    }
    public function update(Request $request, $id)
    {

    	$messages = [
			'name.required' => 'Es ncesario ingresar el nombre del lugar',
			'name.min' => 'El nombre del lugar debe tener al menos 3 caracteres',
			'description.required' => 'Es necesario ingresar una descripcion corta del lugar',
			'description.max' => 'La descripción corta admite hasta 200 caracteres',
			'price.required' => 'Es necesario ingresar un precio para el lugar',
			'price.numeric' => 'Ingresar un precio valido',
			'price.min' => 'No se aceptan valores negativos'
		];

		$rules = [ 
			'name' => 'required|min:3',
			'description' => 'required|max:200',
			'price' => 'required|numeric|min:0'
		];


		$this->validate($request, $rules, $messages);
    	 //registrar el nuevo producto en la DB
    	//dd($request->all());
    	$product = Product::find($id);
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');

    	$product->save();//update
    	 return redirect('/admin/products');
    }
    public function destroy($id)
    {

    	$product = Product::find($id);
       	$product->delete();//delete

    	 return back();
    }
}
