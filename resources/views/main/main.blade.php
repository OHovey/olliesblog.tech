@extends('layouts.master')

@section('content')


<div class="row">

<div class="col-sm-2 archive-nav">

    @include('layouts.archives')

</div>

<div class="col-sm-10 blog-nav">
    
        <h1>The Blog</h1>

    @if (Auth::check())
    
        <a href="/blog/create"><button class="btn btn-primary">New Blog</button></a>
    
    @endif


        <div class="row main-cols">
        
            <div class="col-md-4">
            
                @foreach ($cols[0] as $blog)
                

                    <div class="card">

                        <a class="card-link" href="/blog/{{ $blog->id }}">
                    
                            <h1>{{ $blog->title }}</h1>
                            <p>{!! str_limit($blog->body, 150, '...') !!}</p>
                            <p class="tags-list">{{ $blog->tags }}</p>
                            <p class="created_date">{{ $blog->created_at->toFormattedDateString() }}</p>

                        </a>

                    </div>

                
                @endforeach
            
            </div>

            <div class="col-md-4">
            
                @foreach ($cols[1] as $blog)
                    

                    <div class="card">

                        <a class="card-link" href="/blog/{{ $blog->id }}">
                        
                            
                            <h1>{{ $blog->title }}</h1>
                            <p>{!!  str_limit($blog->body, 150, '...') !!}</p>
                            <p class="tags-list">{{ $blog->tags }}</p>
                            <p class="created_date">{{ $blog->created_at->toFormattedDateString() }}</p>

                        </a>

                    </div>

                
                @endforeach
            
            </div>

            <div class="col-md-4">
            
                @foreach ($cols[2] as $blog)
                    

                    <div class="card">

                        <a class="card-link" href="/blog/{{ $blog->id }}">
                        
                            <h1>{{ $blog->title }}</h1>
                            <p>{!! str_limit($blog->body, 150, '...') !!}</p>
                            <p class="tags-list">{{ $blog->tags }}</p>
                            <p class="created_date">{{ $blog->created_at->toFormattedDateString() }}</p>

                        </a>

                    </div>

                
                @endforeach
            
            </div>
        
        </div>

        

        @include('layouts.paginator')


@endsection

@include('layouts.footer')