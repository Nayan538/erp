<?php

namespace App\Http\Controllers;

use App\Models\Accountig;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Accountig  $accountig
     * @return \Illuminate\Http\Response
     */
    public function show(Accountig $accountig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accountig  $accountig
     * @return \Illuminate\Http\Response
     */
    public function edit(Accountig $accountig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accountig  $accountig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accountig $accountig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accountig  $accountig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accountig $accountig)
    {
        //
    }

    public function accountHeadType()
    {
        return view('accounting.account-head-type');
    }

    public function accountHead()
    {
        return view('accounting.account-heads');
    }

    public function addIncome()
    {
        return view('accounting.add-income');
    }

    public function cashAccount()
    {
        return view('accounting.cash-accounts');
    }

    public function generalLedger()
    {
        return view('accounting.general-ledger');
    }

    public function incomeExpense()
    {
        return view('accounting.income-expense');
    }
    public function paymentChannel()
    {
        return view('accounting.payment-channels');
    }

}
