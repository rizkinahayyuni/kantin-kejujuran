<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balances = Balance::where('id', 1)->get();

        return view('balance.index', compact('balances'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balance $balance)
    {
        //
    }

    public function addBalance(Request $request)
    {
        $request->validate([
            'balance' => 'required',
        ]);

        $balance = Balance::find(1);
        $balance_now = $balance->balance;
        $total_balance = $balance_now + $request->balance;

        Balance::where('id', 1)->update(array('balance' => $total_balance));

        return redirect()->route('balance.index')
            ->with('success', 'Balance updated successfully');
    }

    public function reduceBalance(Request $request)
    {
        $request->validate([
            'balance' => 'required',
        ]);

        $balance = Balance::find(1);
        $balance_now = $balance->balance;
        if ($balance_now >= $request->balance) {
            $total_balance = $balance_now - $request->balance;

            Balance::where('id', 1)->update(array('balance' => $total_balance));

            return redirect()->route('balance.index')
                ->with('success', 'Balance updated successfully');
        }
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
