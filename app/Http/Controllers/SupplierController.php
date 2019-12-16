<?php

namespace App\Http\Controllers;
use App\Category;
use App\Supplier;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $suppliers = Supplier::latest()->get();
        return view('admin.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$inputs = $request->except('_token');
        $rules = [
            'name' => 'required | min:3',
            'email' => 'required| email | unique:suppliers',
            'phone' => 'required | unique:suppliers',
            'address' => 'required',
            'city' => 'required',
            'photo' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required | integer',
        ];

        $validation = Validator::make($inputs, $rules);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }*/


        $supplier = new Supplier();


        $image = $request->file('photo');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->address = $request->input('address');
        $supplier->city = $request->input('city');
        $supplier->type = $request->input('type');
        $supplier->shop_name = $request->input('shop_name');
        $supplier->account_holder = $request->input('account_holder');
        $supplier->account_number = $request->input('account_number');
        $supplier->bank_name = $request->input('bank_name');
        $supplier->bank_branch = $request->input('bank_branch');
        $supplier->photo = $imageName;
        $supplier->save();

        session()->flash('Supplier.','Successfully Added');
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
    public function edit(Supplier $supplier)
    {
        return view('admin.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //$supplier = new Supplier();
       /* $image = $request->file('photo');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);*/

        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->address = $request->input('address');
        $supplier->city = $request->input('city');
        $supplier->type = $request->input('type');
        $supplier->shop_name = $request->input('shop_name');
        $supplier->account_holder = $request->input('account_holder');
        $supplier->account_number = $request->input('account_number');
        $supplier->bank_name = $request->input('bank_name');
        $supplier->bank_branch = $request->input('bank_branch');
      //  $supplier->photo = $imageName;
        $supplier->save();

        session()->flash('Supplier.','Successfully Added');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('admin.supplier.index')
            ->with('success','Supplier deleted successfully');
    }
}
