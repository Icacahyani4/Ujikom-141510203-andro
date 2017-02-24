<?php $__env->startSection('content'); ?>

<div class="widget-content nopadding collapse in" id="collapseG2">
    <ul class="recent-posts">
        <li>
            <div class="user-thumb"> 
                <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> 
            </div>
            <div class="article-post"> 
                <span class="user-info"> 
                    Web Assalaam! 
                </span>
                <p>
                    Selamat Datang <u><b><?php echo e(Auth::user()->name); ?></b></u> sebagai <u><b><?php echo e(Auth::user()->permission); ?></b></u> di web Assalaam
                </p>
            </div>
        </li>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>