@extends('layouts.master')

@section('content')
<div class="col-md-8">
    <h1>Sign In</h1>
    <form class="" action="/login" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" name="email" value="" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" value="" required>
        </div>
        <button type="submit" name="signin">Sign IN</button>
        @include('layouts.errors')
    </form>
</div>
@endsection
