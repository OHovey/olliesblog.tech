<?php $__env->startSection('content'); ?>


    <div class="col-sm-8" style="margin-left: 10%; padding: 20px;">
    
        <h1>Register:</h1>


        <form action="/register" method="POST">
        
            <?php echo e(csrf_field()); ?>

        
            <div class="form-group">
            
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" class="form-control">
            
            </div>

            <div class="form-group">
            
                <label for="email">email:</label>
                <input id="email" name="email" type="text" class="form-control">

            </div>

            <div class="form-group">
            
                <label for="Password">Password:</label>
                <input id="password" name="password" type="text" class="form-control">

            </div>

            <div class="form-group">
            
                <button type="submit" class="btn btn-primary">Register</button>
            
            </div>

        </form>


    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>