<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
        //For testing purpose, use hard coded data, till we design UI
        
  public function register()
  {
  return view('products.register');
  }
    function store(Request $request)
    
    {
      $products =new products();
      $products->id = $request->id;
      $products->name = $request->name;
      $products->unit = $request->unit;
      $products->price = $request->price;
      $products->quantity = $request->quantity;
     $is_saved = $products->save();
    if($is_saved){
    echo "  saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $products = products::all();
     return view('products.list', compact('products'));
    } 
    public function edit($id)
 {
 $products = products::find($id);
 return view('products.edit', compact('products'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $products= products::find($request->id);
    $products->id = $request->id;
    $products->name = $request->name;
    $products->unit = $request->unit;
    $products->price = $request->price;
    $products->quantity = $request->quantity;
    $products->save();
    return redirect('products/list');
    }
    public function delete($id)
 {
 products::where('id', $id)->delete();
 return redirect('products/list');
   
}

public function search($id)
    {
     $products = products::where('id',$id)->first();
     return view('products.search', compact('products'));
    } 
  }