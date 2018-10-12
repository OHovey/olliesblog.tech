@extends('layouts.master')

@section('content')

<div class="container">

    <ul class="list-group">

    @foreach($contacts as $contact)

        <li class="list-group-item">

            <div class="row">

                <div class="col-md-3">

                    <h4>{{ $contact->name }}</h4>

                </div>

                <div class="col-md-9">

                    <h5><strong>subject: </strong>{{ $contact->subject }}</h5>
                    <br>
                    
                    <p>{{ $contact->message }}</p>

                    <small>{{ $contact->message }}</small>

                </div>

            </div>

        </li>

    @endforeach

    </ul>

</div>

@endsection