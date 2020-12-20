<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Item;
use App\Route;
class ItemController extends Controller
{
    
    public function index()
    {
        $items = Item::all();
        echo('<pre>');

        echo($items);
        die;
    }

    public function create()
    {
        $items = Item::all();
        return view('items.create',compact('items'));
    }

    public function store(Request $request)
    {
        Item::create([
            'name'=> $request->Input('name'),
            'price'=> $request->Input('price')]);
        return redirect()->back();
    }


    public function edit($id)
    {
        $item = Item:: find($id);
        return view('items.edit')->with('item',$item);
    }

    public function update($id)
    {
        $item = item::find($id);
        return view('edit', compact('item', 'id'));

    }

     

 public function destroy($id)
    {

        $items = item::find($id);
        $items->delete();
        return redirect()->back()->with('success', true);
    }
}
