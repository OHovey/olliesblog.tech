<?php $__env->startSection('content'); ?>


<div class="container" style="padding:40px; font-weight: 100;">

    <h2 style="font-weight:100;">Make Contact</h2>

    <form action="/contacts/store" method="post">
    
    <?php echo e(csrf_field()); ?>


    <div class="form-group">

        <label for="name">Name *</label>
        <input type="text" name="name" id="name" class="form-control" required>

    </div>

    <div class="form-group">

        <label for="subject">Subject *</label>
        <input type="text" name="subject" id="subject" class="form-control" required>

    </div>

    <div class="form-group">

        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email" class="form-control">

    </div>

    <div class="form-group">

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>

    </div>

    <div class="form-group">

        <button class="btn btn-primary" type="submit">Submit</button>

    </div>

    <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    </form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>