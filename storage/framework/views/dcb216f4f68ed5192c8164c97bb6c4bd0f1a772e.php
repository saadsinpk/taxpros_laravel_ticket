<?php $__env->startSection("content"); ?>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <div class="d-flex flex-column flex-xl-row p-7">
                    <!--begin::Content-->                    <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                        <!--begin::Ticket view-->
                        <div class="mb-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center mb-3">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                <span class="svg-icon svg-icon-4qx svg-icon-success ms-n2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"></path>
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Content-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-800 fw-bold position-relative">
                                        <?php echo e($repair_payment->serial_num); ?>

                                    </h1>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <!--begin::Label-->
                                        <span class="fw-bold text-muted me-6"><?php echo e(__('panel.Username')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($repair_payment->user->name); ?></a></span>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-muted me-6"><?php echo e(__('panel.Bitmain')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($repair_payment->bitmain->name); ?></a></span>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-muted me-6"><?php echo e(__('form.By')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($repair_payment->user->email); ?></a></span>
                                        <!--end::Label-->

                                         <span class="fw-bold text-muted me-6"><?php echo e(__('form.Phone number')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($repair_payment->user->phone); ?></a></span>
                                        <!--end::Label-->

                                        <!--begin::Label-->
                                      

                                        <div class="fw-bold text-muted">
                                            <span class="me-6"><?php echo e(__('form.Address')); ?>: 
                                                <?php if($repair_payment->address != '' AND $repair_payment->street == ''): ?>
                                                    <?php echo e($repair_payment->address); ?>

                                                <?php else: ?>
                                                    <?php echo e($repair_payment->street); ?>, <?php echo e($repair_payment->city); ?>, <?php echo e($repair_payment->country); ?>, <?php echo e($repair_payment->postalcode); ?>

                                                <?php endif; ?></span>
                                            <span class="me-6"><?php echo e(__('form.Payment method')); ?>: <?php echo e($repair_payment->payment_method); ?></span>
                                            <span class="fw-bold text-muted"><?php echo e(__('form.Created Date')); ?>:
                                                <?php echo e($repair_payment->created_at->format("d M Y, g:i A")); ?>

                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <div class="badge mt-10" style="background:<?php echo e($repair_payment->repairStatus->color); ?>; position:absolute; top: 3rem; right: 3rem;"><?php echo e($repair_payment->repairStatus->option); ?></div>
                                <!--end::Content-->
                            </div>

                             <div class="mb-5">
                                
                            </div>

                            <sub class="float-end"><?php echo e($repair_payment->number); ?></sub>
                            <!--end::Heading-->
                            <!--begin::Details-->
                            <div>
                                <!--begin::Description-->
                                <div class="mb-5 fs-5 fw-normal text-gray-800 border-bottom border-gray-300 border-bottom-dashed">

                                    <!--begin::Text-->
                                    <div class="mb-5"><?php echo e($repair_payment->problem); ?></div>


                                </div>
                            </div>

                           <form id="repair_payment_form" method="post" class="form" action="<?php echo e(url('/admin/repair/edit')); ?>/<?php echo e($repair_payment->id); ?>">
                                <input type="hidden" name="repair_id" value="<?php echo e($repair_payment->id); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3"><?php echo e(__('form.Edit Repair Request')); ?></h1>
                                    <!--end::Title-->
                                </div>
                                
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required"><?php echo e(__('form.Street')); ?></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="street"  value="<?php echo e($repair_payment->street); ?>" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required"><?php echo e(__('form.City')); ?></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="city"  value="<?php echo e($repair_payment->city); ?>" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required"><?php echo e(__('form.Country')); ?></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="country"  value="<?php echo e($repair_payment->country); ?>" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required"><?php echo e(__('form.Postalcode')); ?></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="postalcode"  value="<?php echo e($repair_payment->postalcode); ?>" />
                                        <!--end::Input-->
                                    </div>

                                 <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="required fs-6 fw-bold mb-2"><?php echo e(__('form.Payment method')); ?></label>
                                    <select class="form-select form-select-solid" data-hide-search="true" data-placeholder="form.Select a method" name="payment_method">
                                        <option value="card" <?php if($repair_payment->payment_method == 'card'): ?> selected <?php endif; ?>><?php echo e(__('form.Card')); ?></option>
                                        <option value="bank" <?php if($repair_payment->payment_method == 'bank'): ?> selected <?php endif; ?>><?php echo e(__('form.Bank')); ?></option>
                                    </select>
                                </div>

                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required"><?php echo e(__('form.Serial number')); ?></span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="serial_num" value="<?php echo e($repair_payment->serial_num); ?>" />
                                    <!--end::Input-->
                                </div>

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="required fs-6 fw-bold mb-2"><?php echo e(__('form.Bitmain')); ?></label>
                                    <select class="form-select form-select-solid" data-hide-search="true" data-placeholder="Select a bitmain" name="bitmain_id" multiple>
                                            <?php $__currentLoopData = $bitmain->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($bit->id); ?>" <?php if($repair_payment->bitmain_id == $bit->id): ?> selected <?php endif; ?>><?php echo e($bit->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.problem')); ?></label>
                                    <textarea class="form-control form-control-solid" rows="4" name="problem" placeholder="Type your problem"><?php echo e($repair_payment->problem); ?></textarea>
                                </div>
                                <!--end::Input group-->
                                <input type="hidden" name="user_id" value="68 ">
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label"><?php echo e(__('form.Update')); ?></span>
                                        </button>
                                </div>
                                <!--end::Actions-->
                            </form>                            
                        </div>
                        <!--end::Ticket view-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->

</div>

<div class="modal fade" id="kt_payment_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="<?php echo e(url('/admin/repair/paymentRequest')); ?>" >
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_payment_modal_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder"><?php echo e(__('form.Send payment request')); ?></h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div data-action="close" class="btn btn-icon btn-sm btn-active-icon-primary">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-action="cancel" class="btn btn-light me-3"><?php echo e(__('form.Discard')); ?></button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button data-action="submit" type="submit" class="btn btn-primary">
                        <span class="indicator-label"><?php echo e(__('form.Send')); ?></span>
                        <span class="indicator-progress"><?php echo e(__('form.Please wait...')); ?>

                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('after_script'); ?>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/repair_detail.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/payment.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/896782.cloudwaysapps.com/epbvaezrzy/public_html/resources/views/admin/repair_edit.blade.php ENDPATH**/ ?>