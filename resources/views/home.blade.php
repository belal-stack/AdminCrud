@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("User's Dashboard") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                    $user=auth()->user();    
                    @endphp

                    <dl class="row">
                        <dt class="col-md-3">Name:</dt>
                        <dd class="col-md-9">{{$user->name}}</dd>
                      
                        <dt class="col-md-3">Email:</dt>
                        <dd class="col-md-9">{{$user->email}}</dd>
                      
                        <dt class="col-md-3">Phone:</dt>
                        <dd class="col-md-9">{{$user->phone}}</dd>
                      
                        <dt class="col-md-3">Address:</dt>
                        <dd class="col-md-9">{{$user->address}}</dd>

                        <dt class="col-md-3">Gender:</dt>
                        <dd class="col-md-9">{{$user->gender->type}}</dd>
                      
                        <dt class="col-md-3">Role:</dt>
                        <dd class="col-md-9">{{$user->role->name}}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
