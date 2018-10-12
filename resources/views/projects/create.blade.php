@extends('layouts.master')

@section('content')

    <div class="container">

        <h4>New Project</h4>

        <form action="/project" method="post" enctype="multipart/form-data">
        
            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Name of project</label>
                <input type="text" name="name" id="name" class="form-control">

            </div>

            <div class="form-group">

                <label for="github">Github</label>
                <input type="text" name="github" id="github" class="form-control">

            </div>

            <div class="form-group">

                <label for="site">Site</label>
                <input type="text" name="site" id="site" class="form-control">

            </div>

            <div class="form-group">

                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>

            </div>

            <div class="form-group">

                <label for="image">Image</label>
                <input name="img" id="img" type="file" class="form-control">

            </div>

            <div class="form-group">

                <button class="btn btn-primary" type="submit">Submit</button>

            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection