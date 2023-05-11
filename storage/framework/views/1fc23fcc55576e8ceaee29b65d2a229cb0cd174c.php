<?php $__env->startComponent('mail::message'); ?>
<?php echo e($data['title']); ?>


<?php echo e($data['description']); ?>


<?php $__env->startComponent('mail::button', ['url' => $data['url']]); ?>
<?php echo e($data['button']); ?>

<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>


<b>Note</b><br>
You can not respond direct to this email, please login to www.support.taxpros911.com using your username and password and reply on the open ticket.
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/f1vyvfuadfip/public_html/resources/views/Email/ticketEmail.blade.php ENDPATH**/ ?>