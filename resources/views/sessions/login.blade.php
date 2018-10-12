@extends('layouts.master')

@section('content')


    <div class="col-sm-8" style="margin-left: 10%; padding: 20px;">
    
        <h1>Login</h1>


        <form action="/login" method="POST">
        
            {{ csrf_field() }}

            <div class="form-group">
            
                <label for="email">email:</label>
                <input id="email" name="email" type="email" class="form-control" required>

            </div>

            <div class="form-group">
            
                <label for="Password">Password:</label>
                <input id="password" name="password" type="password" class="form-control" required>

            </div>

            <div class="form-group">
            
                <button type="submit" class="btn btn-primary">Login</button>
            
            </div>
            
            @include('layouts.errors')

        </form>


    </div>


@endsection