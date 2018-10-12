<?php $__env->startSection('content'); ?>


<div class="row">

<div class="col-sm-2 archive-nav">

    <?php echo $__env->make('layouts.archives', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<div class="col-sm-10 blog-nav">
    
        <h1>The Blog</h1>

    <?php if(Auth::check()): ?>
    
        <a href="/blog/create"><button class="btn btn-primary">New Blog</button></a>
    
    <?php endif; ?>


        <div class="row main-cols">
        
            <div class="col-md-4">
            
                <?php $__currentLoopData = $cols[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                

                    <div class="card">

                        <a class="card-link" href="/blog/<?php echo e($blog->id); ?>">
                    
                            <h1><?php echo e($blog->title); ?></h1>
                            <p><?php echo str_limit($blog->body, 150, '...'); ?></p>
                            <p class="tags-list"><?php echo e($blog->tags); ?></p>
                            <p class="created_date"><?php echo e($blog->created_at->toFormattedDateString()); ?></p>

                        </a>

                    </div>

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </div>

            <div class="col-md-4">
            
                <?php $__currentLoopData = $cols[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    

                    <div class="card">

                        <a class="card-link" href="/blog/<?php echo e($blog->id); ?>">
                        
                            
                            <h1><?php echo e($blog->title); ?></h1>
                            <p><?php echo str_limit($blog->body, 150, '...'); ?></p>
                            <p class="tags-list"><?php echo e($blog->tags); ?></p>
                            <p class="created_date"><?php echo e($blog->created_at->toFormattedDateString()); ?></p>

                        </a>

                    </div>

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </div>

            <div class="col-md-4">
            
                <?php $__currentLoopData = $cols[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    

                    <div class="card">

                        <a class="card-link" href="/blog/<?php echo e($blog->id); ?>">
                        
                            <h1><?php echo e($blog->title); ?></h1>
                            <p><?php echo str_limit($blog->body, 150, '...'); ?></p>
                            <p class="tags-list"><?php echo e($blog->tags); ?></p>
                            <p class="created_date"><?php echo e($blog->created_at->toFormattedDateString()); ?></p>

                        </a>

                    </div>

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </div>
        
        </div>

        

        <?php echo $__env->make('layouts.paginator', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>