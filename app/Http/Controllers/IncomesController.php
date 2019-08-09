<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Invoice;
use App\Finance;

class IncomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::orderBy('created_at', 'desc')->paginate(5);
        return view('incomes.index')->with('incomes', $incomes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'item_id[0]' => 'required',
        //     'price[0]' => 'required',
        //     'qty[0]' => 'required'
        // ]);

        // Store data
        $item_id = [];
        foreach($request->input('item_id') as $key => $value) {
            $item_id[$key] = $value;
        }
        $price = [];
        foreach($request->input('price') as $key => $value) {
            $price[$key] = $value;
        }
        $qty = [];
        foreach($request->input('qty') as $key => $value) {
            $qty[$key] = $value;
        }
        $transaction = [];
        foreach($request->input('price') as $key => $value) {
            $transaction[$key] = ($price[$key] * $qty[$key]);
        }

        // Create invoice
        $invoice = new Invoice;
        $invoice->total_transaction = 0;
        foreach ($transaction as $key => $value) {
          $invoice->total_transaction = $invoice->total_transaction + $value;
        }
        $invoice->save();

        // Create Income
        foreach ($transaction as $key => $value) {
            $income = new Income;
            $income->item_id = $item_id[$key];
            $income->invoice_id = $invoice->id;
            $income->finance_id = 1;
            $income->qty = $qty[$key];
            $income->transaction = $value;
            $income->save();
        }

        // Create Finance
        $oldFinance = Finance::orderBy('created_at', 'desc')->first();
        $finance = new Finance;
        if ($oldFinance) {
          $finance->total = $oldFinance->total + $invoice->total_transaction;
        } else {
          $finance->total = 0 + $invoice->total_transaction;
        }
        $finance->save();

        return redirect('/penjualan')->with('success', 'Item berhasil ditambahkan.');
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
}
