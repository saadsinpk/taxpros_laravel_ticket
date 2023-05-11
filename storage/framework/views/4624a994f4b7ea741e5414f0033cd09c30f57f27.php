<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Tax Pros 911 & Bookkeeping Services')); ?></title>

	    <link rel="shortcut icon" href="<?php echo e(asset('public/assets/media/logos/logo-icon.png')); ?>" type="image/png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">

        <!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
    </head>
    <body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
                <!--begin::Aside-->
                <?php echo $__env->make("pages.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Aside-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Aside search-->
                        <?php echo $__env->make("pages.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--end::Aside search-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<?php echo $__env->yieldContent('content'); ?>
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                        <?php echo $__env->make("pages.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
        <?php echo $__env->make("pages.scrollTop", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?php echo e(asset('public/assets/plugins/global/plugins.bundle.js')); ?>"></script>
		<script src="<?php echo e(asset('public/assets/js/scripts.bundle.js')); ?>"></script>
		<!--end::Global Javascript Bundle-->
		
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?php echo e(asset('public/assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
		<!--end::Page Vendors Javascript-->
		
		<?php echo $__env->yieldContent("after_script"); ?>
	</body>

</html>
<?php /**PATH /home/f1vyvfuadfip/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>