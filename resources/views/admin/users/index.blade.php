@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
    <a href="{{route('admin.users.create')}}" class="btn btn-primary">Inserisci un nuovo utente</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="3"></th>
          </tr>
        </thead>
        <tbody>

          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a class="badge badge-warning" href="{{route('admin.users.edit', $user->id)}}">Modifica</a></td>
            <td>
            <form action="{{route('admin.users.destroy', $user->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <input class="btn btn-danger" type="submit" value="Cancella">
            </form>

            </td>
            <td></td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
   
@endsection