@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="{{route('admin.users.update', $user->id)}}" method="POST">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" type="text" name="name" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="name">Email</label>
            <input class="form-control" type="email" name="name" value="{{old('email')}}">
          </div>
          <input class="btn btn-primary" type="submit" name="" value="Salva">
        </form>
      </div>
    </div>
  </div>
@endsection
