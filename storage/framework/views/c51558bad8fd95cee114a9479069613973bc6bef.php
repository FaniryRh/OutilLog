<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-4" style="margin: 0 auto; float: none; text-align: center;">
        <img src="/images/logo.png" style="margin: 0 auto; float: none;"></img>
    </div>
    <div class="col-md-6 col-md-offset-2"  style="margin: 0 auto; float: none;">
        <div class="panel panel-warning">
            <div class="panel-heading bg-orange">Authentification</div>
            <div class="panel-body">
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> <?php echo app('translator')->getFromJson('quickadmin.qa_there_were_problems_with_input'); ?>:
                    <br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>

                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="<?php echo e(url('login')); ?>">
                    <input type="hidden"
                           name="_token"
                           value="<?php echo e(csrf_token()); ?>">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>

                        <div class="col-md-6">
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   value="<?php echo e(old('email')); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"><?php echo app('translator')->getFromJson('quickadmin.qa_password'); ?></label>

                        <div class="col-md-6">
                            <input type="password"
                                   class="form-control"
                                   name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="<?php echo e(route('auth.password.reset')); ?>"><?php echo app('translator')->getFromJson('quickadmin.qa_forgot_password'); ?></a>
                            <br>
                            
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <label>
                                <input type="checkbox"
                                       name="remember"> <?php echo app('translator')->getFromJson('quickadmin.qa_remember_me'); ?>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit"
                                    class="btn btn-primary"
                                    style="margin-right: 15px;">
                                <?php echo app('translator')->getFromJson('quickadmin.qa_login'); ?>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="<?php echo e(route('auth.login.social', 'google')); ?>" class="btn btn-default">
                                <i class="fa fa-google"></i> Login with Google
                            </a>
                            <a href="<?php echo e(route('auth.login.social', 'facebook')); ?>" class="btn btn-default">
                                <i class="fa fa-facebook"></i> Login with Facebook
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>