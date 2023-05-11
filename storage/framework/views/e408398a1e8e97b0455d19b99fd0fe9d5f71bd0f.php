<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Tax Pros 911 & Bookkeeping Services')); ?></title>

        <link rel="shortcut icon" href="<?php echo e(asset('public/assets/media/logos/logo-icon.png')); ?>" type="image/png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">

        <!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

        <!-- Scripts -->
     <script src="<?php echo e(asset('public/js/app.js')); ?>" defer></script>
    </head>
    
    <body id="kt_body" class="bg-body">

        <div class="align-items-lg-stretch container-fluid text-end mt-5">
            <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                <span class="flag-icon flag-icon-<?php echo e(Config::get('languages')[App::getLocale()]['flag-icon']); ?>"></span><img src="<?php echo e(asset('public/assets/media/')); ?>/<?php echo e(Config::get('languages')[App::getLocale()]['display']); ?>.png" style="  max-width: 25px;    margin-right: 10px;"> <?php echo e(Config::get('languages')[App::getLocale()]['display']); ?>

            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-150px" data-kt-menu="true">
                <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($lang != App::getLocale()): ?>
                    <div class="menu-item px-3">
                        <a class="menu-link px-5" href="<?php echo e(route('lang.switch', $lang)); ?>"> <span class="flag-icon flag-icon-<?php echo e($language['flag-icon']); ?>"></span><img src="<?php echo e(asset('public/assets/media/')); ?>/<?php echo e($language['display']); ?>.png" style="  max-width: 25px;    margin-right: 10px;"> <?php echo e($language['display']); ?></a>
                    </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

       <?php echo $__env->yieldContent("content"); ?>
       <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="<?php echo e(asset('public/assets/js/scripts.bundle.js')); ?>"></script>
        <!--end::Global Javascript Bundle-->
       <?php echo $__env->yieldContent("after_script"); ?>
    </body>

</html>
<?php /**PATH /home/f1vyvfuadfip/public_html/resources/views/layouts/guest.blade.php ENDPATH**/ ?>