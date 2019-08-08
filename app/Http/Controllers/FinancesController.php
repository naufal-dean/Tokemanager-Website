<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance;
use App\Income;
use App\Outcome;

class FinancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finances = Finance::orderBy('created_at', 'desc')->paginate(5);
        return view('finances.index')->with('finances', $finances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $operator)
    {
        $this->validate($request, [
            'total' => 'required'
        ]);

        // Create Post
        $finance = new Finance;
        $finance->total = $request->input('total');
        $finance->save();
        if($operator === '+'){
            return redirect('/penjualan')->with('success', 'data keuangan telah diupdate.');
        }else{
            return redirect('/outcomes/create')->with('success', 'data keuangan telah diupdate.');
        }

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
    public function edit($id,$operator)
    {
        if ($operator === '+'){
            $money = Income::find($id);
        } else{
            $money = Outcome::find($id);
        }
        $total = Finance::orderBy('created_at', 'desc')->take(1)->get();
        $finance = new Finance;
        $finance->total = $total->total+$money->input('total');
        $finance->save();
        return view('finances.edit')->with('finance', $finance);
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
        $finance = Finance::find($id);
        $finance->delete();
        return redirect('/finance')->with('success', 'Finance berhasil dihapus.');
    }
}
