<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCustomerRequest;
use App\Http\Requests\UpdateUserCustomerRequest;
use App\Http\Resources\UserCustomerResource;
use App\Models\UserCustomer;

class UserCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $user = UserCustomerResource::collection(UserCustomer::all());
        return $user;
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCustomerRequest $request) {
        $user = UserCustomer::create($request->all());
        return new UserCustomerResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(UserCustomer $userCustomer) {
        return UserCustomerResource::make($userCustomer);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCustomerRequest  $request
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCustomerRequest $request, UserCustomer $userCustomer) {
        $userCustomer->update($request->all());
        return new UserCustomerResource($userCustomer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCustomer $userCustomer){
        $userCustomer->delete();
    }
}
