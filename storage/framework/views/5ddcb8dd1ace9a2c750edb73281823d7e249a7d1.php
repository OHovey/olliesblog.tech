<?php $__env->startSection('content'); ?>

<div class="container">

    <ul class="list-group">

    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li class="list-group-item">

            <div class="row">

                <div class="col-md-3">

                    <h4><?php echo e($contact->name); ?></h4>

                </div>

                <div class="col-md-9">

                    <h5><strong>subject: </strong><?php echo e($contact->subject); ?></h5>
                    <br>
                    
                    <p><?php echo e($contact->message); ?></p>

                    <small><?php echo e($contact->message); ?></small>

                </div>

            </div>

        </li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>