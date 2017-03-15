<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\AccountCreateRequest;
use Auth;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Auth::user()->accounts;
        return view('account.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\AccountForm', [
            'method' => 'POST',
            'url' => route('account.store')
        ]);

        return view('account.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountCreateRequest $request)
    {
        $account = new Account;
        $account->business_name = $request->get('business_name');
        $account->user_id = Auth::user()->id;
        $account->save();
        return redirect()->route('account.show',$account->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Account::findOrFail($id);
        return view('account.show', compact('account'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $account = Account::findOrFail($id);
        $form = $formBuilder->create('App\Forms\AccountForm', [
            'method' => 'PUT',
            'model'=> $account,
            'url' => route('account.update',$id)
        ]);

        return view('account.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountCreateRequest $request, $id)
    {
        $account = Account::findOrFail($id);
        $account->business_name = $request->get('business_name');
        $account->save();
        return redirect()->route('account.show',$account->id);
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
