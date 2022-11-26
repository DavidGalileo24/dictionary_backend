<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $user = CompanyResource::collection(Company::all());
            return jsend_success($user);
        } 
        catch(\Exception $e){
            return jsend_error($e);
        }
    }




    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        try{
            $user = CompanyResource::create($request->all());
            return jsend_success([
                'message' => 'Added succesfully',
                'data' => new CompanyResource($user)
            ]);
        } 
        catch(\Exception $e){
            return jsend_error($e);
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        try{
            $companyData = CompanyResource::make($company);
            return jsend_success($companyData);
        } 
        catch(\Exception $e){
            return jsend_error($e);
        }
    }

    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        try{
            $company->update($request->all());
            return jsend_success([
                'message' => 'Updated successfully',
                'data' => new CompanyResource($company)
            ]);
           } 
           catch(\Exception $e){
                return jsend_error($e);
            }
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        try{
            $company->delete();
            return jsend_success(['message' => 'Deleted successfully!']);
        }
        catch(\Exception $e){
            return jsend_error($e);
        }
    }
}
