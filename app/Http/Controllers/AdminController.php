<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Produk;
use App\Models\Order;



class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function view_adhome()
    {
        return view('admin.home');
    }

    public function add_category(Request $request)
    {
       $data=new category;
       $data->category_name=$request->category;
       $data->save();

       return redirect()->back()->with('message','Kategori Berhasil Ditambahkan');
    }

    public function add_product(Request $request)
    {
       $product=new Produk;
       $product->title=$request->product;
       $product->description=$request->description;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $product->discount_price=$request->discount;
       $product->category=$request->category;
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('product',$imagename);
       $product->image=$imagename;
       $product->save();

       return redirect()->back()->with('message','Produk Berhasil Ditambahkan');
    }

    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Kategori Berhasil Dihapus');
    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function show_product()
    {
        $product=Produk::all();
        return view('admin.show_product',compact('product'));
    }

    public function show_order()
    {
        $order=Order::all();
        return view('admin.show_order',compact('order'));
    }

    public function delete_product($id)
    {
        $data=produk::find($id);
        $data->delete();
        return redirect()->back()->with('message','Kategori Berhasil Dihapus');
    }

    public function update_product($id)
    {

        $product=Produk::find($id);
        $category=category::all();
        

        return view('admin.update_product',compact('product','category'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        $product=Produk::find($id);
        $product->title=$request->product;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->category;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();

        return redirect()->back()->with('message','Produk Berhasil Diubah');
    }
}
