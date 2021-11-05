<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Resources\AccountResource;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AccountResource::collection(Account::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
            'number' => 'required|string|max:255',
        ]);

        $account = new Account;
        $account->name = $request->name;
        $account->bank = $request->bank;
        $account->number = $request->number;
        $account->save();

        return new AccountResource($account);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return new MaterialResource($account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
            'number' => 'required|string|max:255',
        ]);

        $account->name = $request->name;
        $account->bank = $request->bank;
        $account->number = $request->number;
        $account->save();

        return new AccountResource($account);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $account->delete();
    }
}
