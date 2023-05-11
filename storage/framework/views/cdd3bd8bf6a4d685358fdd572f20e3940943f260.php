<?php $__env->startSection("content"); ?>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <div class="d-flex flex-column flex-xl-row p-7">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                        <!--begin::Ticket view-->
                        <div class="mb-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center mb-12">
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
                                        <?php echo e($ticket->subject); ?>

                                        <span class="badge badge-light-danger position-relative" style="top: -1rem; left: 1rem;"><?php echo e($ticket->ticket_status->option); ?></span>
                                    </h1>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <!--begin::Label-->
                                        <span class="fw-bold text-muted me-6"><?php echo e(__('panel.Category')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->category->name); ?></a></span>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-muted me-6"><?php echo e(__('form.By')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->email); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.First Name')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->first_name); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.Last Name')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->last_name); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.Company')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->company); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.Country')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->country); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.City')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->city); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.State')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->state); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.Postal Code')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->postal); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.Address line 1')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->address_line_one); ?></a></span>

                                        <span class="fw-bold text-muted me-6"><?php echo e(__('ticket.Address line 2')); ?>:
                                        <a href="#" class="text-muted text-hover-primary"><?php echo e($ticket->user->address_line_two); ?></a></span>

                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-muted"><?php echo e(__('form.Created Date')); ?>:
                                       <?php echo e($ticket->created_at->format("d M Y, g:i A")); ?></span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <sub class="float-end"><?php echo e($ticket->number); ?></sub>
                            <!--end::Heading-->
                            <!--begin::Details-->
                            <div>
                                <?php echo e($ticket->numer); ?>

                                <!--begin::Description-->
                                <div class="mb-5 fs-5 fw-normal text-gray-800 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Text-->
                                    <div class="mb-5"><?php echo e($ticket->description); ?></div>
                                    <?php if(isset($admin_access['read_ticket_notes'])): ?>
                                        <hr>
                                        <h3><?php echo e(__('form.Private Notes')); ?></h3>
                                        <div class="separator separator-dashed mb-7"></div>

                                        <?php $__currentLoopData = $ticket->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                            <div class="mb-5">
                                                <div class="overflow-hidden position-relative card-rounded  <?php if($note->user->roles->first()->name == "admin"): ?> col-md-12 ms-auto <?php else: ?> col-md-8 <?php endif; ?>">
                                                    <div class="card card-bordered w-100 <?php if($note->user->roles->first()->name == "admin"): ?> bg-light-success <?php else: ?> bg-light-primary <?php endif; ?>"  style="background-color: #de9206 !important; border: 1px solid #000000 !important;">
                                                        <div class="card-body">
                                                            <?php echo nl2br($note->description); ?> 
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                    <div>
                                                        <?php $__currentLoopData = explode(",", $note->file_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($name): ?>
                                                            <a href="<?php echo e(asset("storage/attached/".$name. "")); ?>"" class="image-link">
                                                                <img src="<?php echo e(asset("storage/attached/".$name. "")); ?>" style="width:100px;border: 2px solid gray;border-radius: 10px;">
                                                            </a>
                                                            
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>

                                                <div class="text-gray-400 <?php if($note->user->roles->first()->name == "admin"): ?> <?php endif; ?> mt-2 fs-8"> Posted by <b><?php echo e($note->user->name); ?></b> at <?php echo e($note->created_at->format("d M Y, g:i A")); ?> 
                                                <?php if(isset($admin_access['delete_ticket_notes'])): ?>
                                                    <?php if($note->user->roles->first()->name == "admin"): ?>
                                                        <a href="/admin/ticket/view/<?php echo e($ticket->id); ?>/delete_notes/<?php echo e($note->id); ?>">Delete</a>
                                                    <?php endif; ?>
                                                <?php endif; ?> | 
                                                <?php if(isset($admin_access['edit_ticket_notes'])): ?>
                                                    <?php if($note->user->roles->first()->name == "admin"): ?>
                                                        <a href="/admin/ticket/view/<?php echo e($ticket->id); ?>/edit_notes/<?php echo e($note->id); ?>">Edit</a>
                                                    <?php endif; ?>
                                                <?php endif; ?></div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                        <!--begin::Input group-->
                                        <div class="mb-0 fv-row">
                                            <?php if(!isset($notes_ticket_edit) AND isset($admin_access['send_ticket_notes'])): ?>
                                                <form action="<?php echo e(url("admin/ticket/notes")); ?>" id="ticket_notes_form">
                                                <div class="fv-row mb-8">
                                                    <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.Attachments')); ?></label>
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="attachments_notes">
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
                                                <textarea class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7" rows="6" name="description" placeholder="Send Notes" style="background:#ffa500 !important;"></textarea>

                                                <!--begin::Submit-->
                                                <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">

                                                <div class="d-flex gap-5 align-items-center justify-content-end">
                                                        
                                                    <div class="mt-3 text-end">
                                                        <button data-action="submit_notes" type="submit_notes" class="btn btn-primary">
                                                            <span class="indicator-label">Send</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button> 
                                                    </div>
                                                </div>
                                            </form>
                                            <?php endif; ?>

                                            <?php if(isset($notes_ticket_edit) AND isset($admin_access['edit_ticket_notes'])): ?>
                                                <form action="<?php echo e(url("admin/ticket/update_notes")); ?>" id="ticket_notes_form">
                                                <input type="hidden" name="id" value="<?php echo e($notes_ticket_edit->id); ?>">
                                                <div class="fv-row mb-8">
                                                    <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.Attachments')); ?></label>
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="attachments_notes">
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
                                                <textarea class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7" rows="6" name="description" placeholder="Send Notes" style="background:#ffa500 !important;"><?php echo e($notes_ticket_edit->description); ?></textarea>

                                                <!--begin::Submit-->
                                                <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">

                                                <div class="d-flex gap-5 align-items-center justify-content-end">
                                                        
                                                    <div class="mt-3 text-end">
                                                        <button data-action="submit_notes" type="submit_notes" class="btn btn-primary">
                                                            <span class="indicator-label">Send</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button> 
                                                    </div>
                                                </div>
                                            </form>
                                            <?php endif; ?>
                                        </div>

                                        <div class="separator separator-dashed mb-7"></div>
                                        <hr>
                                    <?php endif; ?>

                                    <div class="mb-10">

                                        <?php if($ticket->file_name): ?>
                                        <div class="mb-5">
                                            <h4 class="fw-bold text-gray-800 me-6"><?php echo e(__('form.Attached files')); ?></h4>
                                            <?php $__currentLoopData = explode(",", $ticket->file_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div>
                                                    <a href="<?php echo e(asset("storage/attached/".$name. "")); ?>" download="<?php echo e($name); ?>"><i class="fas fa-paperclip me-2"></i><?php echo e($name); ?></a>
                                                </div>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <?php endif; ?>

                                    </div>

                                    <div class="separator separator-dashed mb-7"></div>

                                    <?php $__currentLoopData = $ticket->reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                        <div class="mb-5">
                                            <div class="overflow-hidden position-relative card-rounded <?php if(isset($reply->user->roles)): ?> <?php if($reply->user->roles->first()->name == "admin"): ?> col-md-5 ms-auto <?php else: ?> col-md-8 <?php endif; ?> <?php endif; ?>">
                                                <div class="card card-bordered w-100 <?php if(isset($reply->user->roles)): ?> <?php if($reply->user->roles->first()->name == "admin"): ?> bg-light-success <?php else: ?> bg-light-primary <?php endif; ?> <?php endif; ?>">
                                                    <div class="card-body">
                                                        <?php echo nl2br($reply->description); ?> 
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                                <div>
                                                    <?php $__currentLoopData = explode(",", $reply->file_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($name): ?>
        
                                                        <div>
                                                            <a href="<?php echo e(asset("storage/attached/".$name. "")); ?>" download="<?php echo e($name); ?>"><i class="fas fa-paperclip me-2"></i><?php echo e($name); ?></a>
                                                        </div>
                                                        
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                            <div class="text-gray-400 <?php if(isset($reply->user->roles)): ?> <?php if($reply->user->roles->first()->name == "admin"): ?> text-end <?php endif; ?>  <?php endif; ?> mt-2 fs-8"><?php echo e($reply->created_at->format("d M Y, g:i A")); ?> <?php if(isset($reply->user->roles)): ?> <?php if($reply->user->roles->first()->name == "admin"): ?>
                                            <?php if(isset($admin_access['reply_delete_ticket'])): ?>
                                                <a href="/admin/ticket/view/<?php echo e($ticket->id); ?>/delete/<?php echo e($reply->id); ?>">Delete</a>
                                            <?php endif; ?>
                                            | 
                                            <?php if(isset($admin_access['reply_edit_ticket'])): ?>
                                                <a href="/admin/ticket/view/<?php echo e($ticket->id); ?>/edit/<?php echo e($reply->id); ?>">Edit</a> 
                                            <?php endif; ?>
                                            <?php endif; ?>  <?php endif; ?></div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                </div>
                                <!--end::Description-->


                                <!--begin::Input group-->
                                    <div class="mb-0 fv-row">
                                        <?php if(isset($ticket_edit)): ?>
                                            <?php if(isset($admin_access['reply_edit_ticket'])): ?>
                                                <form action="<?php echo e(url("admin/ticket/update-answer")); ?>" id="ticket_reply_form">
                                                    <input type="hidden" name="id" value="<?php echo e($ticket_edit->id); ?>">
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(isset($admin_access['send_reply_features'])): ?>
                                                <form action="<?php echo e(url("admin/ticket/send-answer")); ?>" id="ticket_reply_form">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                            <?php if(isset($admin_access['update_status_ticket'])): ?>
                                            <?php if(!isset($admin_access['send_reply_features']) AND !isset($ticket_edit)): ?>
                                                <form action="<?php echo e(url("admin/ticket/send-answer")); ?>" id="ticket_reply_form">
                                            <?php endif; ?>
                                            <?php if(!isset($admin_access['reply_edit_ticket']) AND isset($ticket_edit)): ?>
                                                <form action="<?php echo e(url("admin/ticket/update-answer")); ?>" id="ticket_reply_form">
                                            <?php endif; ?>
                                                <div class="mb-3 w-25 d-flex justify-content-end ms-auto">
                                                    <select class="form-select form-select-solid fw-bolder" name="status" data-kt-select2="true" data-placeholder="Select status" data-id="<?php echo e($ticket->id); ?>">
                                                        <option></option>
                                                        <?php $__currentLoopData = $ticket_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <?php $selected = ""; ?>
                                                        <?php if($status->id == $ticket->ticket_status->id): ?>
                                                            <?php echo $selected = "selected"; ?>
                                                        <?php endif; ?>

                                                        <option <?php echo $selected; ?> value="<?php echo e($status->id); ?>"><?php echo e($status->option); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            <?php if(!isset($admin_access['reply_edit_ticket']) AND isset($ticket_edit)): ?>
                                                </form>
                                            <?php endif; ?>
                                            <?php if(!isset($admin_access['send_reply_features']) AND !isset($ticket_edit)): ?>
                                                </form>
                                            <?php endif; ?>
                                            <?php else: ?>
                                                <input type="hidden" name="status" value="<?php echo e($ticket->ticket_status->id); ?>">
                                            <?php endif; ?>
                                            <?php if(isset($admin_access['send_reply_features']) AND !isset($ticket_edit)): ?>
                                                <div class="fv-row mb-8">
                                                    <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.Attachments')); ?></label>
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
                                                <textarea class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7" rows="6" name="description" placeholder="Send Message"></textarea>

                                                <!--begin::Submit-->
                                                <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">

                                                <div class="d-flex gap-5 align-items-center justify-content-end">
                                                    <div class="mt-3 text-end">
                                                        <button data-action="submit" type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Send</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button> 
                                                    </div>
                                                </div>
                                        </form>
                                        <?php endif; ?>
                                        <?php if(isset($admin_access['reply_edit_ticket']) AND isset($ticket_edit)): ?>
                                                <div class="fv-row mb-8">
                                                    <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.Attachments')); ?></label>
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
                                                <textarea class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7" rows="6" name="description" placeholder="Send Message"><?php echo e($ticket_edit->description); ?></textarea>

                                                <!--begin::Submit-->
                                                <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">

                                                <div class="d-flex gap-5 align-items-center justify-content-end">
                                                    <div class="mt-3 text-end">
                                                        <button data-action="submit" type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Send</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button> 
                                                    </div>
                                                </div>
                                        </form>
                                        <?php endif; ?>
                                        <!--end::Submit-->
                                    </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Details-->
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('after_script'); ?>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/ticket_notes.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/send_answer.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/f1vyvfuadfip/public_html/resources/views/admin/ticket/show.blade.php ENDPATH**/ ?>