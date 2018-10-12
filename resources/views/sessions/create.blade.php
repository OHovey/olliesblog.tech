@extends('layouts.master')

@section('content')


    <div class="col-sm-8" style="margin-left: 10%; padding: 20px;">
    
        <h1>Register:</h1>


        <form action="/register" method="POST">
        
            {{ csrf_field() }}
        
            <div class="form-group">
            
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" class="form-control" required>
            
            </div>

            <div class="form-group">
            
                <label for="email">email:</label>
                <input id="email" name="email" type="email" class="form-control" required>

            </div>

            <div class="form-group">
            
                <label for="Password">Password:</label>
                <input id="password" name="password" type="password" class="form-control" required>

            </div>

            <div class="form-group">
            
                <label for="password_confirmation">Confirm Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" required>
            
            </div>

            <div class="form-group">
            
                <button type="submit" class="btn btn-primary">Register</button>
            
            </div>
            
            @include('layouts.errors')

        </form>


    </div>


@endsection