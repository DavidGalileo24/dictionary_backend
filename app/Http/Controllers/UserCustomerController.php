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
        try{
            $user = UserCustomerResource::collection(UserCustomer::all());
            return jsend_success($user);
        } 
        catch(\Exception $e){
            return jsend_error($e);
        }
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCustomerRequest $request) {
        try{
            $user = UserCustomer::create($request->all());
            return jsend_success([
                'message' => 'Added succesfully',
                'data' => new UserCustomerResource($user)
            ]);
        } 
        catch(\Exception $e){
            return jsend_error($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(UserCustomer $user) {
        try{
            $user = UserCustomerResource::make($user);
            return jsend_success($user);
        } 
        catch(\Exception $e){
            return jsend_error($e);
        }
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCustomerRequest  $request
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCustomerRequest $request, UserCustomer $user) {
       try{
        $user->update($request->all());
        return jsend_success(new UserCustomerResource($user));
       } catch(\Exception $e){
            return jsend_error($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCustomer $user){
        try{
            $user->delete();
            return jsend_success(['message' => 'Deleted successfully!']);
        }
        catch(\Exception $e){
            return jsend_error($e);
        }
    }
}
