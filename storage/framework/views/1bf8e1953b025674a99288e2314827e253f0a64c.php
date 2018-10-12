    <nav>

        <ul class="pagination">

            <?php if($requests != ''): ?>

                <?php if($page_no == 1 && $page_count >= 3): ?>

                <li class="page-item"><a href="?page=<?php echo e($page_no); ?>" class="page-link"><?php echo e($page_no); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 1); ?>" class="page-link"><?php echo e($page_no + 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 2); ?>" class="page-link"><?php echo e($page_no + 2); ?></a></li>

                <?php elseif($page_count == 1 && $page_count == 2): ?>

                <li class="page-item"><a href="?page=<?php echo e($page_no); ?>" class="page-link"><?php echo e($page_no); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 1); ?>" class="page-link"><?php echo e($page_no + 1); ?></a></li>

                <?php elseif($page_no == 2): ?>

                <li class="page-item"><a href="?page=<?php echo e($page_no - 1); ?>" class="page-link"><?php echo e($page_no - 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no); ?>" class="page-link"><?php echo e($page_no); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 1); ?>" class="page-link"><?php echo e($page_no + 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 2); ?>" class="page-link"><?php echo e($page_no + 2); ?></a></li>

                <?php elseif($page_no == $page_count - 1 && $page_no > 2): ?>

                <li class="page-item"><a href="?page=<?php echo e($page_no - 2); ?>" class="page-link"><?php echo e($page_no - 2); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no - 1); ?>" class="page-link"><?php echo e($page_no - 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no); ?>" class="page-link"><?php echo e($page_no); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 1); ?>" class="page-link"><?php echo e($page_no + 1); ?></a></li>

                <?php elseif($page_no == $page_count && $page_no > 2): ?>

                <li class="page-item"><a href="?page=<?php echo e($page_no - 2); ?>" class="page-link"><?php echo e($page_no - 2); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no - 1); ?>" class="page-link"><?php echo e($page_no - 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no); ?>" class="page-link"><?php echo e($page_no); ?></a></li>

                <?php else: ?> 

                <li class="page-item"><a href="?page=<?php echo e($page_no - 2); ?>" class="page-link"><?php echo e($page_no - 2); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no - 1); ?>" class="page-link"><?php echo e($page_no - 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no); ?>" class="page-link"><?php echo e($page_no); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 1); ?>" class="page-link"><?php echo e($page_no + 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 2); ?>" class="page-link"><?php echo e($page_no + 2); ?></a></li>

                <?php endif; ?>


            <?php else: ?> 

                <?php if($blog_num < 20): ?>

                <?php else: ?>

                <li class="page-item"><a style="color: black;" href="" class="page-link"><?php echo e($page_no); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 1); ?>" class="page-link"><?php echo e($page_no + 1); ?></a></li>
                <li class="page-item"><a href="?page=<?php echo e($page_no + 2); ?>" class="page-link"><?php echo e($page_no + 2); ?></a></li>

                <?php endif; ?>
            <?php endif; ?>

        </ul>

    </nav>

