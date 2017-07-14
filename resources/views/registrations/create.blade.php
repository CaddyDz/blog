@extends('layouts.master')

@section('content')

  <div class="col-sm-8">
    <h1>Register</h1>


    <form action="/register" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirm password:</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
    @include('layouts.errors')
  </div>

@endsection
