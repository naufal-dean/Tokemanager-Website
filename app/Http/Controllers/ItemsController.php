<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Outcome;
use App\Finance;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('item_name', 'asc')->paginate(5);
        return view('items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        // Create Post
        $item = new Item;
        $item->item_name = $request->input('item_name');
        $item->desc = $request->input('desc');
        $item->stock = $request->input('stock');
        $item->price = $request->input('price');
        $item->save();

        return redirect('/items')->with('success', 'Item berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit')->with('item', $item);
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
      $this->validate($request, [
          'item_name' => 'required',
          'desc' => 'required',
          'price' => 'required',
          'stock' => 'required'
      ]);

      // Update Post
      $item = Item::find($id);
      $item->item_name = $request->input('item_name');
      $item->desc = $request->input('desc');
      $item->price = $request->input('price');
      $item->stock = $request->input('stock');
      $item->save();

      return redirect('/items/' . $id)->with('success', 'Item berhasil diperbarui.');
    }

    /**
     * List item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itemsList()
    {
        $items = Item::orderBy('item_name', 'asc')->paginate(5);
        return view('items.indexsupply')->with('items', $items);
    }

    /**
     * Redirect to supply.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function redirectToSupply($id)
    {
        $item = Item::find($id);
        return view('items.supply')->with('item', $item);
    }

    /**
     * Supply the item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function supply(Request $request, $id)
    {
      $this->validate($request, [
          'item_name' => 'required',
          'desc' => 'required',
          'buy_price' => 'required',
          'supply' => 'required'
      ]);

      // Update Item
      $item = Item::find($id);
      $item->item_name = $request->input('item_name');
      $item->desc = $request->input('desc');
      $item->price = $item->price;
      $item->stock = $item->stock + $request->input('supply');
      $item->save();

      // Create Outcome
      $outcome = new Outcome;
      $outcome->item_id = $id;
      $outcome->finance_id = 1;
      $outcome->qty = $request->input('supply');
      $outcome->transaction = $request->input('supply') * $request->input('buy_price');
      $outcome->save();

      // Create Finance
      $oldFinance = Finance::orderBy('created_at', 'desc')->first();
      $finance = new Finance;
      if ($oldFinance) {
        $finance->total = $oldFinance->total - $outcome->transaction;
      } else {
        $finance->total = 0 - $outcome->transaction;
      }
      $finance->save();

      return redirect('/suplai-barang')->with('success', 'Item berhasil disuplai.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items')->with('success', 'Item berhasil dihapus.');
    }
}
