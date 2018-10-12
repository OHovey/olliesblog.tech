<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-sm-2 archive-nav">

        <?php echo $__env->make('layouts.archives', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>

    <div class="col-sm-10 blog-nav">

        <h1><strong><?php echo e($blog->title); ?></strong> <?php if(Auth::check()): ?> <small><a href="/blog/destroy/<?php echo e($blog->id); ?>"><button class="btn btn-warning">delete blog</button></a></small> <?php endif; ?> </h1>
        <br>

        <!-- <img src="<?php echo e(asset('images/' . $blog->img_src )); ?>" class="img-fluid"> -->

        <p><?php echo $blog->body; ?></p>

        <div class="container comment-container">

        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <span class="d-block bg-dark comment">
                <h6><?php echo e($comment->name); ?> - <small><?php echo e($comment->created_at->toFormattedDateString()); ?></small>
                <?php if(Auth::check()): ?> <a style="float:right;" href="/comment/destroy/<?php echo e($comment->id); ?>"><button class="btn btn-warning">Delete comment</button></a>  <?php endif; ?></h6>
                <p style="font-weight: 100;"><?php echo e($comment->body); ?></p>
            </span>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                'blog_id': '<?php echo e($blog->id); ?>'
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>