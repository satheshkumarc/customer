<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basicCustomers = Customer::where('mode', '0')->get();
        $premiumCustomers = Customer::where('mode', '1')->get();
        return view('customer-lists', ['basicCustomers' => $basicCustomers, 'premiumCustomers' => $premiumCustomers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validatecustomer($request);
        Customer::create($data);
        return redirect('/home')->with('message', 'Saved Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($customer)
    {
        $customer = Customer::find($customer);
        return view('customer-edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customer)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:10|unique:customers,phone,'.$customer,
            'mode' => 'sometimes'
        ]);
        Customer::find($customer)->update($data);
        return redirect('customer-lists')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer)
    {
        Customer::find($customer)->delete();
        return redirect('customer-lists')->with('message', 'Deleted Successfully');
    }
    public function validatecustomer($customer)
    {
        return $customer->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:10|unique:customers',
            'mode' => 'sometimes'
        ]);
    }
}
