@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
@if(session()->has('message'))
<div class="alert alert-success" role="alert">
    {{session()->get('message')}}
</div>
@endif
                Go To <a href="{{ url('customer-lists') }}">Customer Lists</a><br>
                <form method="POST" action="{{ url('customer') }}">
                @csrf
                @include('form')
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
