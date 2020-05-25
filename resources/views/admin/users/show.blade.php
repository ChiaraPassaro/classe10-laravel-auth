@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>{{$user->name}}</h2>
          <div>
            {{$user->email}}
          </div>
        </div>
      </div>   
    </div>
@endsection