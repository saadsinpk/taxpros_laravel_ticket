<?php $__env->startSection("content"); ?>
    	<!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Hero card-->
                <div class="card mb-12 px-10">
                    <!--begin::Hero body-->
                    <div class="card-body flex-column p-5">
                        <div class="d-flex flex-column align-items-start justify-content-center flex-equal me-5">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <!--begin::Title-->
                                <h1 class="fw-bolder fs-4 fs-lg-1 text-gray-800"><?php echo e(__('ticket.Support Center')); ?></h1>
                                <!--end::Title-->

                                <a href="<?php echo e(url("/")); ?>" class="btn btn-light-primary"><?php echo e(__('form.Back')); ?></a>
                            </div>
                            <!--begin::Input group-->
                            <div class="position-relative w-100 p-10 justify-content-between">
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <h3><?php echo e(__('ticket.Ticket Subject')); ?></h3>
                                        <div class="text-gray-800 fs-6"><?php echo e($ticket->subject); ?></div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3><?php echo e(__("ticket.number")); ?></h3>
                                        <div class="text-gray-800 fs-6"><?php echo e($ticket->number); ?></div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mb-7"></div>
                                <div class="row mb-5">
                                    <div class="col-md-4">
                                        <h3><?php echo e(__("ticket.Category")); ?></h3>
                                        <div class="text-gray-800 fs-6"><?php echo e($ticket->category->name); ?></div>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <h3><?php echo e(__('ticket.Status')); ?></h3>
                                            <div class="text-gray-800 fs-6"><?php echo e($ticket->ticket_status->option); ?></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <h3><?php echo e(__('ticket.Date')); ?></h3>
                                            <div class="text-gray-800 fs-6"><?php echo e($ticket->created_at->format("d M Y, g:i A")); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mb-7"></div>

                                <div>
                                    <h3><?php echo e(__('form.Description')); ?></h3>
                                    <div class="text-gray-800 fs-6"><?php echo e($ticket->description); ?></div>
                                </div>
                                <div class="separator separator-dashed mb-7"></div>

                                <div class="mb-5">
                                    <h3><?php echo e(__('form.Attached files')); ?></h3>
                                    <?php if($ticket->file_name): ?> 
                                        <div class="mb-5">
                                            <h3><?php echo e(__('form.Attached files')); ?></h3>
                                            <?php $__currentLoopData = explode(",", $ticket->file_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div>
                                                    <a href="<?php echo e(asset("storage/attached/".$name. "")); ?>" download="<?php echo e($name); ?>"><i class="fas fa-paperclip me-2"></i><?php echo e($name); ?></a>
                                                </div>
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="separator separator-dashed mb-7"></div>
                                            
                                        </div>
                                    <?php endif; ?> 
                                </div> 
                            </div> 
                                
                            <div class="w-100 px-17">
                                <h1 class="text-center mb-4"><?php echo e(__('ticket.Ticket Reply From support')); ?></h1>

                                <?php $__currentLoopData = $ticket->reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mb-5">
                                    <div class="overflow-hidden position-relative card-rounded">
                                        <!--begin::Ribbon-->
                                        <?php if(isset($reply->user->roles)): ?>
                                            <?php if($reply->user->roles->first()->name == "admin"): ?>
                                                <div class="ribbon ribbon-triangle ribbon-top-start border-success">
                                                    <!--begin::Ribbon icon-->
                                                    <div class="ribbon-icon mt-n5 ms-n6">
                                                        <i class="bi bi-check2 fs-2 text-white"></i>
                                                    </div>
                                                    <!--end::Ribbon icon-->
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <!--end::Ribbon-->
                                        <!--begin::Card-->
                                        <div class="card card-bordered w-100">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <?php echo nl2br($reply->description); ?> 
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <?php $__currentLoopData = explode(",", $reply->file_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($name): ?>

                                        <div>
                                            <a href="<?php echo e(asset("storage/attached/".$name. "")); ?>" download="<?php echo e($name); ?>"><i class="fas fa-paperclip me-2"></i><?php echo e($name); ?></a>
                                        </div>
                                        
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <div class="text-gray-400 <?php if(isset($reply->user->roles)): ?> <?php if($reply->user->roles->first()->name == "admin"): ?> text-end <?php endif; ?> <?php endif; ?> mt-2 fs-8"><?php echo e($reply->created_at->format("d M Y, g:i A")); ?></div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="mb-0">
                                    <form action="<?php echo e(url("user/ticket/send-answer")); ?>" id="ticket_reply_form">
                                        <div class="fv-row">
                                            <textarea class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7" rows="6" name="description" placeholder="Send Message"></textarea>
                                            <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
                                            <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">  
                                        </div>
                                        
                                        <div class="fv-row mb-8">
                                            <label class="fs-6 fw-bold mb-2">Attachments</label>
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick align-items-center">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                                    <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 12.6L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L8 12.6H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V12.6H16Z" fill="black" />
                                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                        <span class="fw-bold fs-7 text-gray-400">Upload up to 10 files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        
                                        <div class="text-end mt-3">
                                            <button data-action="submit" type="submit" class="btn btn-primary">
                                                <span class="indicator-label"><?php echo e(__('form.Send')); ?></span>
                                                <span class="indicator-progress"><?php echo e(__("form.Please wait...")); ?>

                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div> 
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Hero body-->
                </div>
                <!--end::Hero card-->
              
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->

        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('after_script'); ?>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/send_answer.js')); ?>"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/stripe.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/896782.cloudwaysapps.com/epbvaezrzy/public_html/resources/views/user/ticket_detail.blade.php ENDPATH**/ ?>