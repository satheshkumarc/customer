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
    {{session()->has('message')}}
</div>
@endif
                <form method="POST" action="{{ url('customer-update') }}/{{ $customer->id }}">
                @csrf
                @include('form')
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
