<?php $__env->startSection("content"); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container-xxl">
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-4">
					<h3 class="card-title align-items-start flex-column">
						<span class="fw-bolder mb-2 text-dark"><?php echo e(__('form.Log')); ?></span>
						<span class="text-muted fw-bold fs-7"><?php echo e($total_logs); ?> <?php echo e(__('form.Total log')); ?></span>
					</h3>
					</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-5">
					<!--begin::Timeline-->
					<div class="timeline-label">
						<!--begin::Item-->
						<?php $__currentLoopData = $logs_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-8"><?php echo e($log->created_at->format('h:i a')); ?></div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-<?php echo e($log->status); ?> fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="fw-mormal timeline-content text-muted ps-3"><?php echo e($log->message); ?> <br> <b><?php echo e($log->created_at->format('d/m/Y')); ?></b></div>
								<!--end::Text-->
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<!--end::Timeline-->
				</div>
				<!--end: Card Body-->
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/896782.cloudwaysapps.com/epbvaezrzy/public_html/resources/views/admin/logs.blade.php ENDPATH**/ ?>