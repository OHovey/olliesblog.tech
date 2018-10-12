<?php $__env->startSection('content'); ?>

    <div class="container">

        <h4 id="all-projects" style="font-weight: 100;">All Projects</h4>

        <?php if(Auth::check()): ?>

            <a href="/project/create"><button class="btn btn-primary">New Project</button></a>

        <?php endif; ?>

        <ul class="list-group">

            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="list-group-item">

                    <h5><?php echo e($project->name); ?>

                    <?php if(Auth::check()): ?> <a style="float:right;" href="/project/delete/<?php echo e($project->id); ?>"><button class="btn btn-warning">Delete project</button></a>  <?php endif; ?></h5>
                    <br>
                    <?php if($project->site): ?>
                        <small>site:<a href="<?php echo e($project->site); ?>"><?php echo e($project->site); ?></a></small>
                    <?php endif; ?>
                    <small>Github: <a href="<?php echo e($project->github); ?>"><?php echo e($project->github); ?></a></small>
                    <?php if($img = $project->img): ?>
                        <img src="<?php echo e(asset('images/' . $project->img )); ?>" class="img-fluid">
                    <?php endif; ?>
                    <br>
                    <p><?php echo e($project->description); ?></p>

                </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>