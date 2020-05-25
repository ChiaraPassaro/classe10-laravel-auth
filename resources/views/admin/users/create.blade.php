@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="{{route('admin.users.store')}}" method="POST">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="name">Nome</label>
          <input class="form-control" type="text" name="name" 
          value="{{old('name')}}">
          @error('name')
              <span class="alert alert-danger">
                {{$message}}
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="name">Email</label>
          <input class="form-control" type="email" name="email" value="{{old('email')}}">
          @error('email')
              <span class="alert alert-danger">
                {{$message}}
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="name">Password</label>
          <input class="form-control" type="password" name="password" value="{{old('password')}}">
          @error('password')
              <span class="alert alert-danger">
                {{$message}}
              </span>
          @enderror
        </div>
        <input class="btn btn-primary" type="submit" value="Salva">
      </form>
    </div>
  </div>
</div>
@endsection