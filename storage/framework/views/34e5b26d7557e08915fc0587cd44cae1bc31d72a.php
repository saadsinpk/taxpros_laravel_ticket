<?php $__env->startSection("content"); ?>
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?php echo e(asset('public/assets/media/illustrations/sketchy-1/backgroun-login.jpg')); ?>)">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                    <!--begin::Logo-->
                    <a href="<?php echo e(url('/')); ?>" class="mb-12">
                        <img alt="Logo" src="<?php echo e(asset('public/assets/media/logos/logowebsite.jpg')); ?>" class="h-40px" style="max-width: 480px;    height: auto !important;    width: 100%;"/>
                    </a>
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form action="<?php echo e(route('login')); ?>" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3"><?php echo e(__('auth.Sign In to Site')); ?></h1>
                                <?php if(isset($message_to_display)): ?>
                                    <?php if($message_to_display == 'pass'): ?>
                                        <p style="    font-size: 20px;    font-weight: bold;"><?php echo e(__('auth.You are verified! you can login now')); ?></p>
                                    <?php else: ?>
                                        <p style="    font-size: 20px;    font-weight: bold;"><?php echo e(__('auth.Your link is wrong or expired')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark"><?php echo e(__('form.Email')); ?></label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" value="<?php echo e(old('email')); ?>" type="text" name="email" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0"><?php echo e(__('form.Password')); ?></label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" value="<?php echo e(old('password')); ?>" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <a href="<?php echo e(url('verification')); ?>"><?php echo e(__('auth.Resend Verification Mail')); ?></a><br>
                                <a href="<?php echo e(url('reset')); ?>"><?php echo e(__('auth.Reset your password')); ?></a>

                                <button type="button" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label"><?php echo e(__('form.Continue')); ?></span>
                                    <span class="indicator-progress"><?php echo e(__('form.Please wait...')); ?>

                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>

        <?php $__env->startSection("after_script"); ?>
            <!--begin::Page Custom Javascript(used by this page)-->
            <script src="<?php echo e(asset('public/assets/js/custom/authentication/sign-in/general.js')); ?>"></script>
            <!--end::Page Custom Javascript-->
        <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.guest", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/f1vyvfuadfip/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>