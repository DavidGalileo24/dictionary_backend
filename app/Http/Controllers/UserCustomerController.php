<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCustomerRequest;
use App\Http\Requests\UpdateUserCustomerRequest;
use App\Models\UserCustomer;

class UserCustomerController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(UserCustomer $userCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCustomer $userCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCustomerRequest  $request
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCustomerRequest $request, UserCustomer $userCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCustomer $userCustomer)
    {
        //
    }
}
