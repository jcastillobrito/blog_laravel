@extends('admin.layout')
    @section('content')
    
        <div class="row">
            <h4 class="mb-sm-0 font-size-18">Index</h4>
            <p>Usuario Autentificado : {{auth()->user()->name}}</p>
        </div>
          
    @endsection