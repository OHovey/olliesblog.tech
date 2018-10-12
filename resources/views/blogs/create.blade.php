@extends('layouts.master')

@section('content')


    <div class="container">
    
        <h1>New Blog Post</h1>

        <form action="/blog/store" method="POST">

        {{ csrf_field() }}
        
            <div class="form-group">
            
                <label for="title">Title</label>
                <input type="text" name="title" id='title' class="form-control">
            
            </div>

            <div class="form-group">
            
                <label for="body">Body</label>
                <textarea id="body" name="body" style="display: none;"></textarea>
                <div name="editor" id="editor"></div>
            </div>

            <div class="form-group">
            
                <label for="img_src">Img</label><br>
                <input type="file" name="img_src" id='img_src'>
            
            </div>
        
            <div class="form-group">
            
                <label for="tags">Tags</label>
                <input type="text" name="keywords" id='keywords' class="form-control">
            
            </div>

            <div class="form-group">
            
                <button type="submit" class="btn btn-primary">Post Blog</button>
            
            </div>

            @include('layouts.errors')

        </form>
    
    </div>

    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>

    var quill = new Quill('#editor', {
        modules: {
            toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic'],
            ['link', 'blockquote', 'code-block', 'image'],
            [{ list: 'ordered' }, { list: 'bullet' }]
            ]
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });

console.log(quill.container.firstChild.innerHTML)
var form = document.querySelector('form');
form.onsubmit = function() {

  var about = document.querySelector('textarea[name=body]');
  about.value = quill.container.firstChild.innerHTML


  var title = document.querySelector('input[name=title]').value
  var about = about.value
  var img = document.querySelector('input[name=img_src]').value
  var keywords = document.querySelector('input[name=tags]').value
  
  $.ajax({

      type: 'post',

      url: '/blog/store',

      data: {
          'title': title,
          'body': about,
          'img_src': img,
          'keywords': keywords 
      }

  })
  
};


</script>

<script type="text/javascript">

    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

</script>


@endsection