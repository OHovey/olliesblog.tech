@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-2 archive-nav">

        @include('layouts.archives')

    </div>

    <div class="col-sm-10 blog-nav">

        <h1><strong>{{ $blog->title }}</strong> @if (Auth::check()) <small><a href="/blog/destroy/{{ $blog->id }}"><button class="btn btn-warning">delete blog</button></a></small> @endif </h1>
        <br>

        <!-- <img src="{{ asset('images/' . $blog->img_src ) }}" class="img-fluid"> -->

        <p>{!! $blog->body !!}</p>

        <div class="container comment-container">

        @foreach ($comments as $comment)

            <span class="d-block bg-dark comment">
                <h6>{{ $comment->name }} - <small>{{ $comment->created_at->toFormattedDateString() }}</small>
                @if (Auth::check()) <a style="float:right;" href="/comment/destroy/{{ $comment->id }}"><button class="btn btn-warning">Delete comment</button></a>  @endif</h6>
                <p style="font-weight: 100;">{{ $comment->body }}</p>
            </span>

        @endforeach

        <div style="padding-top: 0;" class="all-comments container-fluid comment-container"></div>

        <span class="d-block bg-dark comment-box">

            <form>

                <div class="form-group">

                    <label for="name">name</label>
                    <input type="text" class="form-control" id="name" class="name">

                </div>

                <div class="form-group">

                    <textarea placeholder="Leave a Comment..." name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>

                </div>

            </form>

            <div class="form-group">
                <button class="btn btn-success">Post Comment</button>
            </div>

        </span>        

    </div>

    </div>

    <br>

</div>

<script type="text/javascript">

    $('#comment').click(function () {

        $('.btn-success').css('display', 'block');

    })

    $('.btn-success').click(function () {

        var name = $('#name').val()
        var comment = $('#comment').val()

        $.ajax({

            type: 'get',

            url: '/comment/store',

            data: {
                'name' : name,
                'comment': comment,
                'blog_id': '{{ $blog->id }}'
            },

            success: function(data) {
               var span = document.createElement('span')
               var h6 = document.createElement('h6')
               var p = document.createElement('p')
               var small = document.createElement('small')

               
               h6.innerHTML = name
               p.innerHTML = comment
               span.appendChild(h6)
               span.appendChild(p)
               span.className = 'comment bg-dark d-block'
            //    comment_container.appendChild(span)
               var container = $('.all-comments')
               container.append(span)
               
            }
        })

    })

</script>

<script type="text/javascript">

    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>

@endsection