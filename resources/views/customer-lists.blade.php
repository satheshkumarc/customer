@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->has('message'))
<div class="alert alert-success" role="alert">
    {{session()->get('message')}}
</div>
@endif
    <div class="row">
        <div class="col-6">
        <h3>Basic Customers</h3>
        <h3></h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
@foreach($basicCustomers as $basicCustomer)
                <tr>
                <td>{{$basicCustomer->name}}</td>
                <td>{{$basicCustomer->email}}</td>
                <td>{{$basicCustomer->phone}}</td>
                <td class="d-flex"><a href="{{ url('customer-edit') }}/{{$basicCustomer->id}}" class="btn btn-primary">EDIT</a> <a href="{{ url('customer-delete') }}/{{$basicCustomer->id}}" class="btn btn-danger">DELETE</a></td>
                </tr>
@endforeach            
            </tbody>
        </table>
        </div>
        <div class="col-6">
        <h3>Premium Customers</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
@foreach($premiumCustomers as $premiumCustomer)
                <tr>
                <td>{{$premiumCustomer->name}}</td>
                <td>{{$premiumCustomer->email}}</td>
                <td>{{$premiumCustomer->phone}}</td>
                <td class="d-flex"><a href="{{ url('customer-edit') }}/{{$premiumCustomer->id}}" class="btn btn-primary">EDIT</a> <a href="{{ url('customer-delete') }}/{{$premiumCustomer->id}}" class="btn btn-danger">DELETE</a></td>
                </tr>
@endforeach            
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection