<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Supplier;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\productsImport;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->with('category', 'supplier')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('admin.product.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $product = new Product();
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->supplier_id = $request->input('supplier_id');
        $product->code = $request->input('code');
        $product->garage = $request->input('garage');
        $product->route = $request->input('route');
        $product->buying_date = $request->input('buying_date');
        $product->expire_date = $request->input('expire_date');
        $product->buying_price = $request->input('buying_price');
        $product->selling_price = $request->input('selling_price');
        $product->image = $imageName;
        $product->save();

        session()->flash('Product.','Successfully Added');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


//products import and export
    public function ImportProduct()
    {
        return view('import_product');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }


    public function import(Request $request)
    {
        $import=Excel::import(new ProductsImport, $request->file('import_file'));
        if ($import) {
            $notification=array(
                'messege'=>'Product Import Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->route('home')->with($notification);
        }else{
            return Redirect()->back();
        }

    }



}
