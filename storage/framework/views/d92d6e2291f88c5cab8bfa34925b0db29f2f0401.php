<h6>Archives</h6>

    <ul class="list-group">

        <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item"><a href="?month=<?php echo e($archive['month']); ?>&year=<?php echo e($archive['year']); ?>"><?php echo e($archive['month']); ?> <?php echo e($archive['year']); ?></a></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>