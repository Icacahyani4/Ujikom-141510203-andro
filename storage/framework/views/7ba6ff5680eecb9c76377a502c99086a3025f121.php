@component('mail::message')

<?php if(! empty($greeting)): ?>
# <?php echo e($greeting); ?>

<?php else: ?>
<?php if($level == 'error'): ?>
# Whoops!
<?php else: ?>
# Hello!
<?php endif; ?>
<?php endif; ?>


<?php $__currentLoopData = $introLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<?php echo e($line); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


<?php if(isset($actionText)): ?>
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
<?php echo e($actionText); ?>

@endcomponent
<?php endif; ?>


<?php $__currentLoopData = $outroLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<?php echo e($line); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<!-- Salutation -->
<?php if(! empty($salutation)): ?>
<?php echo e($salutation); ?>

<?php else: ?>
Regards,<br><?php echo e(config('app.name')); ?>

<?php endif; ?>

<!-- Subcopy -->
<?php if(isset($actionText)): ?>
@component('mail::subcopy')
If you’re having trouble clicking the "<?php echo e($actionText); ?>" button, copy and paste the URL below
into your web browser: [<?php echo e($actionUrl); ?>](<?php echo e($actionUrl); ?>)
@endcomponent
<?php endif; ?>
@endcomponent
