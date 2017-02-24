<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="loginbox">            
            <form id="loginform" class="form-vertical" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                <div class="header">
                    <center><h3>Site <font color="#5379fa">Login</font></h3></center>
                    <hr/>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" />

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control" name="password" placeholder="Password" required/>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="<?php echo e(url('/password/reset')); ?>" class="flip-link btn btn-info" id="to-recover">Forgot Your Password?</a></span>
                    <span class="pull-right">
                        <button type="submit" class="btn btn-success" /> Login</button>
                    </span>
                </div>
            </form>
        </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>