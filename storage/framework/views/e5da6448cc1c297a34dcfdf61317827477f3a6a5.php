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

                                    <div class="separator separator-dashed mb-7"></div>

                                    <?php if($repair_payment->status == '2' || $repair_payment->status == '7'): ?>
                                        <h3><?php echo e(__('form.Shipping Information')); ?></h3>
                                    <?php endif; ?>
                                    <?php if($repair_payment->status == '2'): ?>
                                        <?php echo e(__('form.Tracking Number')); ?>:<b><?php echo e($repair_payment->tracking_number); ?></b><br>
                                        <?php echo e(__('form.Shipping company')); ?>:<b><?php echo e($repair_payment->shipping_company); ?></b><br>
                                        <?php echo e(__('form.Attached')); ?>:<a href="<?php echo e(asset("storage/attached/".$repair_payment->ship_attach. "")); ?>" download="<?php echo e($repair_payment->ship_attach); ?>"><i class="fas fa-paperclip me-2"></i><?php echo e($repair_payment->ship_attach); ?></a>
                                    <?php endif; ?>
                                    <?php if($repair_payment->status == '7'): ?>
                                        <form action="" method="post">
                                            <?php echo csrf_field(); ?>
                                            <label>Shipping Company</label>
                                            <input type="text" name="return_shipping_company" class="form-control form-control-solid placeholder-gray-600" value="<?php echo e($repair_payment->return_shipping_company); ?>">

                                            <div class="separator separator-dashed mb-7"></div>

                                            <label>Shipping Tracking</label>
                                            <input type="text" name="return_tracking_number" class="form-control form-control-solid placeholder-gray-600" value="<?php echo e($repair_payment->return_tracking_number); ?>">

                                            <div class="mt-3 text-end">
                                                <button data-action="update_shipping" type="submit" class="btn btn-primary" name="update_shipping">
                                                    <span class="indicator-label">Send</span>
                                                </button> 
                                            </div>
                                        </form>
                                    <?php endif; ?>
                                    <?php if($repair_payment->status == '2' || $repair_payment->status == '7'): ?>
                                        <div class="separator separator-dashed mb-7"></div>
                                        <a href="<?php echo e(url('label/download/'.$repair_payment->number)); ?>" class="btn btn-primary" target="_blank">Download LABEL</a>
                                        <div class="separator separator-dashed mb-7"></div>
                                    <?php endif; ?>

                                    <?php if(isset($admin_access['read_repair_notes'])): ?>
                                        <h3><?php echo e(__('form.Private Notes')); ?></h3>
                                        <div class="separator separator-dashed mb-7"></div>

                                        <?php $__currentLoopData = $repair_payment->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
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
                                                <?php if(isset($admin_access['delete_repair_notes'])): ?>
                                                    <?php if($note->user->roles->first()->name == "admin"): ?>
                                                        <a href="/admin/repair/view/<?php echo e($repair_payment->id); ?>/delete_notes/<?php echo e($note->id); ?>">Delete</a>
                                                    <?php endif; ?>
                                                <?php endif; ?> | 
                                                <?php if(isset($admin_access['edit_repair_notes'])): ?>
                                                    <?php if($note->user->roles->first()->name == "admin"): ?>
                                                        <a href="/admin/repair/view/<?php echo e($repair_payment->id); ?>/edit_notes/<?php echo e($note->id); ?>">Edit</a>
                                                    <?php endif; ?>
                                                <?php endif; ?></div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                        <!--begin::Input group-->
                                        <div class="mb-0 fv-row">
                                            <?php if(!isset($notes_ticket_edit) AND isset($admin_access['send_repair_notes'])): ?>
                                                <form action="<?php echo e(url("admin/repair_payment/notes")); ?>" id="repair_notes_form">
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
                                                <input type="hidden" name="repair_id" value="<?php echo e($repair_payment->id); ?>">
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

                                            <?php if(isset($notes_ticket_edit) AND isset($admin_access['edit_repair_notes'])): ?>
                                                <form action="<?php echo e(url("admin/repair_payment/update_notes")); ?>" id="repair_notes_form">
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
                                                <input type="hidden" name="repair_id" value="<?php echo e($repair_payment->id); ?>">
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
                                    <?php endif; ?>

                                    <?php if(isset($admin_access['read_repair_payment'])): ?>
                                        <h3><?php echo e(__('form.Payment Request')); ?></h3>
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_admins_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-125px"><?php echo e(__('form.Date')); ?></th>
                                                    <th class="min-w-125px"><?php echo e(__('form.Description')); ?></th>
                                                    <th class="min-w-125px"><?php echo e(__('form.Amount')); ?></th>
                                                    <th><?php echo e(__('form.status')); ?></th>
                                                    <th><?php echo e(__('form.Action')); ?></th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <?php $__currentLoopData = $repair_payment->request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(isset($payment_edit)): ?>
                                                        <?php if($payment_edit == $p->id): ?>
                                                            <?php if(isset($admin_access['edit_repair_payment'])): ?>
                                                                <form method="post">
                                                                    <?php echo csrf_field(); ?> 

                                                                    <input type="hidden" name="payment_id" value="<?php echo e($p->id); ?>">
                                                                    <tr>
                                                                        <td><?php echo e($p->created_at->format("d M Y, g:i A")); ?></td>
                                                                        <td><input type="text" value="<?php echo e($p->description); ?>" name="description"></td>
                                                                        <td>
                                                                            <span class="me-1"><input type="text" value="<?php echo e($p->amount); ?>" name="amount"></span>
                                                                            <span class="text-uppercase"> <?php echo e($p->currency); ?></span>
                                                                        </td>

                                                                         <td>
                                                                            <select name="payment_status">
                                                                                <option value="1" <?php if($p->status > 0): ?> selected <?php endif; ?>>Paid</option>
                                                                                <option value="0" <?php if($p->status == 0): ?> selected <?php endif; ?>>Unpaid</option>
                                                                            </select> 
                                                                        </td>
                                                                        <td><input type="submit" class="btn" value="update" name="update_payment" style="display: none;"><div id="payment_update_form" class="btn">Update</div></td>
                                                                    </tr>
                                                                </form>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <tr>
                                                                <td><?php echo e($p->created_at->format("d M Y, g:i A")); ?></td>
                                                                <td><?php echo e($p->description); ?></td>
                                                                <td>
                                                                    <span class="me-1"><?php echo e($p->amount); ?></span>
                                                                    <span class="text-uppercase"> <?php echo e($p->currency); ?></span>
                                                                </td>

                                                                 <td>
                                                                    <?php if($p->status > 0): ?>
                                                                        <span class="badge badge-light-success">Paid</span>
                                                                    <?php else: ?>
                                                                        <span class="badge badge-light-danger">Unpaid</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td><?php if(isset($admin_access['edit_repair_payment'])): ?><a href="<?php echo e(url('/admin/repair/view/'.$repair_payment->id.'/edit_payment/'.$p->id)); ?>"><?php echo e(__('form.Edit')); ?></a><?php endif; ?>
                                                                |
                                                                <?php if(isset($admin_access['delete_repair_payment'])): ?><a href="<?php echo e(url('/admin/repair/view/'.$repair_payment->id.'/delete_payment/'.$p->id)); ?>"><?php echo e(__('form.Delete')); ?></a><?php endif; ?></td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td><?php echo e($p->created_at->format("d M Y, g:i A")); ?></td>
                                                            <td><?php echo e($p->description); ?></td>
                                                            <td>
                                                                <span class="me-1"><?php echo e($p->amount); ?></span>
                                                                <span class="text-uppercase"> <?php echo e($p->currency); ?></span>
                                                            </td>

                                                             <td>
                                                                <?php if($p->status > 0): ?>
                                                                    <span class="badge badge-light-success">Paid</span>
                                                                <?php else: ?>
                                                                    <span class="badge badge-light-danger">Unpaid</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?php if(isset($admin_access['edit_repair_payment'])): ?><a href="<?php echo e(url('/admin/repair/view/'.$repair_payment->id.'/edit_payment/'.$p->id)); ?>"><?php echo e(__('form.Edit')); ?></a><?php endif; ?> | <?php if(isset($admin_access['delete_repair_payment'])): ?><a href="<?php echo e(url('/admin/repair/view/'.$repair_payment->id.'/delete_payment/'.$p->id)); ?>"><?php echo e(__('form.Delete')); ?></a><?php endif; ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>

                                        <div class="separator separator-dashed mb-7"></div>
                                    <?php endif; ?>

                                    <?php $__currentLoopData = $repair_payment->reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                        <div class="mb-5">
                                            <div class="overflow-hidden position-relative card-rounded  <?php if($reply->user->roles->first()->name == "admin"): ?> col-md-5 ms-auto <?php else: ?> col-md-8 <?php endif; ?>">
                                                <div class="card card-bordered w-100 <?php if($reply->user->roles->first()->name == "admin"): ?> bg-light-success <?php else: ?> bg-light-primary <?php endif; ?>">
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
                                            <div class="text-gray-400 <?php if($reply->user->roles->first()->name == "admin"): ?> text-end <?php endif; ?> mt-2 fs-8"> Posted by <b><?php echo e($reply->user->name); ?></b> at <?php echo e($reply->created_at->format("d M Y, g:i A")); ?>

                                            <?php if($reply->user->roles->first()->name == "admin"): ?> 
                                                <?php if(isset($admin_access['delete_repair_reply'])): ?> 
                                                    <a href="/admin/repair/view/<?php echo e($repair_payment->id); ?>/delete/<?php echo e($reply->id); ?>">Delete</a>
                                                <?php endif; ?>
                                            <?php endif; ?> | 
                                            <?php if($reply->user->roles->first()->name == "admin"): ?> 
                                                <?php if(isset($admin_access['edit_repair_reply'])): ?> 
                                                    <a href="/admin/repair/view/<?php echo e($repair_payment->id); ?>/edit/<?php echo e($reply->id); ?>">Edit</a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                </div>
                                <!--end::Description-->


                                <!--begin::Input group-->
                                <div class="mb-0 fv-row">
                                    <?php if(!isset($ticket_edit) AND isset($admin_access['send_repair_reply'])): ?>
                                        <form action="<?php echo e(url("admin/repair_payment/reply")); ?>" id="repair_form">
                                            <div class="fv-row mb-8">
                                                <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.Attachments')); ?></label>
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="attachments">
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
                                            <input type="hidden" name="repair_id" value="<?php echo e($repair_payment->id); ?>">
                                            <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">

                                            <div class="d-flex gap-5 align-items-center justify-content-end">
                                                
                                                <?php if(isset($admin_access['send_repair_payment'])): ?>
                                                    <div class="mt-3">
                                                        <a class="btn btn-light-warning" data-action='send_payment' data-id="<?php echo e($repair_payment->id); ?>" data-user-id="<?php echo e($repair_payment->user_id); ?>" data-bs-toggle="modal" data-bs-target="#kt_payment_modal">
                                                            <span class="indicator-label">Send Amount</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </a> 
                                                    </div>
                                                <?php endif; ?>
                                                    
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

                                    <?php if(isset($ticket_edit) AND isset($admin_access['edit_repair_reply'])): ?>
                                        <form action="<?php echo e(url("admin/repair_payment/update_reply")); ?>" id="repair_form">
                                            <input type="hidden" name="id" value="<?php echo e($ticket_edit->id); ?>">
                                            <div class="fv-row mb-8">
                                                <label class="fs-6 fw-bold mb-2"><?php echo e(__('form.Attachments')); ?></label>
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="attachments">
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
                                            <input type="hidden" name="repair_id" value="<?php echo e($repair_payment->id); ?>">
                                            <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">

                                            <div class="d-flex gap-5 align-items-center justify-content-end">
                                                
                                                <?php if(isset($admin_access['send_repair_payment'])): ?>
                                                    <div class="mt-3">
                                                        <a class="btn btn-light-warning" data-action='send_payment' data-id="<?php echo e($repair_payment->id); ?>" data-user-id="<?php echo e($repair_payment->user_id); ?>" data-bs-toggle="modal" data-bs-target="#kt_payment_modal">
                                                            <span class="indicator-label">Send Amount</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </a> 
                                                    </div>
                                                <?php endif; ?>
                                                    
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

<?php if(isset($admin_access['send_repair_payment'])): ?>
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
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_payment_modal_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_payment_modal" data-kt-scroll-wrappers="#kt_payment_modal_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2"><?php echo e(__('form.Amount')); ?></label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-solid" placeholder="" name="amount" value="" />
                                    <div class="min-w-50px">
                                        <select  class="form-select form-select-solid" name="currency" data-kt-select2="true" data-placeholder="Select currency">
                                            <option value="eur" class="text-white">EUR</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <textarea name="description"  rows="4" class="form-control form-control-solid" placeholder="description"></textarea>
                            </div>
                        </div>
                        <!--end::Scroll-->
                    </div>
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
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('after_script'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/magnific-popup.css')); ?>">
    <script src="<?php echo e(asset('public/assets/jquery.magnific-popup.js')); ?>"></script>
    <script type="text/javascript">
        $('.image-link').magnificPopup({
          type: 'image',
          mainClass: 'mfp-with-zoom', // this class is for CSS animation below

          zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
              // openerElement is the element on which popup was initialized, in this case its <a> tag
              // you don't need to add "opener" option if this code matches your needs, it's defailt one.
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
          }

        });        
    </script>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/repair_notes.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/repair_detail.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom/apps/support-center/tickets/payment.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/896782.cloudwaysapps.com/epbvaezrzy/public_html/resources/views/admin/repair__detail.blade.php ENDPATH**/ ?>