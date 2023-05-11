<?php $__env->startSection("content"); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container-xxl">
			<div class="card card-xl-stretch mb-xl-8">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-4">
					<h3 class="card-title align-items-start flex-column">
						<span class="fw-bolder mb-2 text-dark"><?php echo e(__('form.Features')); ?></span>
						<span class="text-muted fw-bold fs-7"><?php echo e(__('form.Admin Features')); ?></span>
					</h3>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<form action="" method="post">
				    <?php echo csrf_field(); ?>

					<div class="card-body pt-5">
						<h3><?php echo e(__('form.Users')); ?></h3>
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Read User?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to read user?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="read_user" type="checkbox" value="1" <?php if(isset($return_features['read_user'])): ?> <?php if($return_features['read_user'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Add new User?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to add new user?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="add_user" type="checkbox" value="1" <?php if(isset($return_features['add_user'])): ?> <?php if($return_features['add_user'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Delete User?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to delete user?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="delete_user" type="checkbox" value="1" <?php if(isset($return_features['delete_user'])): ?> <?php if($return_features['delete_user'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>



						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Verify User?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to verify user?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="verify_user" type="checkbox" value="1" <?php if(isset($return_features['verify_user'])): ?> <?php if($return_features['verify_user'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Edit User?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to Edit user?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="edit_user" type="checkbox" value="1" <?php if(isset($return_features['edit_user'])): ?> <?php if($return_features['edit_user'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>
						<hr>

						<h3><?php echo e(__('form.Admin')); ?></h3>
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Read Admin Log?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to view admin log?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="read_admin_log" type="checkbox" value="1" <?php if(isset($return_features['read_admin_log'])): ?> <?php if($return_features['read_admin_log'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>

						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Edit Admin Features?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to edit admin features?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="edit_admin_features" type="checkbox" value="1" <?php if(isset($return_features['edit_admin_features'])): ?> <?php if($return_features['edit_admin_features'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>

						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Read Admin?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to read admin?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="read_admin" type="checkbox" value="1" <?php if(isset($return_features['read_admin'])): ?> <?php if($return_features['read_admin'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Add new Admin?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to add new admin?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="add_admin" type="checkbox" value="1" <?php if(isset($return_features['add_admin'])): ?> <?php if($return_features['add_admin'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Delete Admin?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to delete admin?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="delete_admin" type="checkbox" value="1" <?php if(isset($return_features['delete_admin'])): ?> <?php if($return_features['delete_admin'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Edit Admin?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to Edit admin?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="edit_admin" type="checkbox" value="1" <?php if(isset($return_features['edit_admin'])): ?> <?php if($return_features['edit_admin'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>
						<hr>


						<h3><?php echo e(__('form.Ticket')); ?></h3>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Assign ticket to team?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to assign ticket to team?')); ?></div>
									<!--end::Input-->
								</div>
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="assign_user" type="checkbox" value="1" <?php if(isset($return_features['assign_user'])): ?> <?php if($return_features['assign_user'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<div class="d-flex flex-stack">
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Send Reply Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to send reply ticket?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="send_reply_features" type="checkbox" value="1" <?php if(isset($return_features['send_reply_features'])): ?> <?php if($return_features['send_reply_features'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>

						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Read Reply of Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to read reply?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="read_reply_ticket" type="checkbox" value="1" <?php if(isset($return_features['read_reply_ticket'])): ?> <?php if($return_features['read_reply_ticket'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Reply Edit Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to edit reply?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="reply_edit_ticket" type="checkbox" value="1" <?php if(isset($return_features['reply_edit_ticket'])): ?> <?php if($return_features['reply_edit_ticket'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Reply Delete Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to delete reply ticket?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="reply_delete_ticket" type="checkbox" value="1" <?php if(isset($return_features['reply_delete_ticket'])): ?> <?php if($return_features['reply_delete_ticket'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>

						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Update status of Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to update status of ticket?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="update_status_ticket" type="checkbox" value="1" <?php if(isset($return_features['update_status_ticket'])): ?> <?php if($return_features['update_status_ticket'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Read Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to read ticket?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="read_ticket" type="checkbox" value="1" <?php if(isset($return_features['read_ticket'])): ?> <?php if($return_features['read_ticket'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>


						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Delete Ticket?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to delete ticket?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="delete_ticket" type="checkbox" value="1" <?php if(isset($return_features['delete_ticket'])): ?> <?php if($return_features['delete_ticket'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>

						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Read Ticket Notes?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to read ticket notes?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="read_ticket_notes" type="checkbox" value="1" <?php if(isset($return_features['read_ticket_notes'])): ?> <?php if($return_features['read_ticket_notes'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Send Ticket Notes?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to send ticket notes?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="send_ticket_notes" type="checkbox" value="1" <?php if(isset($return_features['send_ticket_notes'])): ?> <?php if($return_features['send_ticket_notes'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Delete Ticket Notes?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to delete ticket notes?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="delete_ticket_notes" type="checkbox" value="1" <?php if(isset($return_features['delete_ticket_notes'])): ?> <?php if($return_features['delete_ticket_notes'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Edit Ticket Notes?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to edit ticket notes?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="edit_ticket_notes" type="checkbox" value="1" <?php if(isset($return_features['edit_ticket_notes'])): ?> <?php if($return_features['edit_ticket_notes'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>



						<hr>
						<h3><?php echo e(__('form.Customer Reply Mail')); ?></h3>
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold"><?php echo e(__('form.Receive Customer Reply Mail?')); ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-muted"><?php echo e(__('form.Do you want admin to receive Customer Reply Mail?')); ?></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input-->
									<input class="form-check-input" name="receive_customer_reply_mail" type="checkbox" value="1" <?php if(isset($return_features['receive_customer_reply_mail'])): ?> <?php if($return_features['receive_customer_reply_mail'] == 1): ?> checked="checked" <?php endif; ?> <?php endif; ?>>
									<!--end::Input-->
									<!--begin::Label-->
									<span class="form-check-label fw-bold text-muted"><?php echo e(__('form.Yes')); ?></span>
									<!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>

						<hr>

						<input type="submit" name="submit" value="submit" class="btn btn-primary">
					</div>
					<!--end: Card Body-->
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/896782.cloudwaysapps.com/epbvaezrzy/public_html/resources/views/admin/features.blade.php ENDPATH**/ ?>