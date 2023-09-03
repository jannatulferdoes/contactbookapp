<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        /* get all data from contacts */
        $contacts = Contact::get();
        return view('products.index', compact('contacts'));
    }
    public function create(){
        return view("products.create");
    }
    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'name' => 'required',
            'phoneno' => 'required',
            'email' =>'required',
        ]);
        // upload image
       // dd($request->all());
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path("products"), $imageName);

        $product = new Contact;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->Phoneno = $request->phoneno;
        $product->email = $request->email;
        $product->save();
        return back()->withSuccess("Product Created !!!!");

    }
    public function edit ($id){
        $product = Contact::where("id",$id)->first();
        return view("products.edit", ["product" =>$product]);
    }
    public function update(Request $request,$id){
        dd($id);
    }

}
