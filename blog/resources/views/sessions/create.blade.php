@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8">
        <h1>Register</h1>
        <form action="/register" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="button">Register</button>
            </div>
            @include ('layouts.errors')
        </form>
    </div>
@endsection
