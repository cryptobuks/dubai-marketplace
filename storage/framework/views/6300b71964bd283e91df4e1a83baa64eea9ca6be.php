<?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-users"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(URL_ADMIN_USERS_DASHBOARD); ?>"><?php echo e(getPhrase('users')); ?></a> </li>
            <?php if($record): ?>        
            <li class="breadcrumb-item"><a  href="<?php echo e(URL_USERS.$role_name); ?>"><?php echo e(ucfirst($role_name)); ?> <?php echo e(getPhrase('dashboard')); ?></a></li> 
            <?php endif; ?>        
            <li class="active breadcrumb-item" aria-current="page"><?php echo e(isset($title) ? $title : ''); ?></li>
         </ol>
    </div>
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                    <h4><?php echo e($title); ?></h4>
                </div>
                
            </div>
            <div class="mt-5">
                <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /.box-header -->

                <?php $button_name = 'Create'; ?>
                <?php if($record): ?>
                <?php $button_name = 'Update'; ?>
                <?php echo e(Form::model($record, 
                array('url' => URL_USERS_EDIT.$record->slug, 
                'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' ))); ?>

                <?php else: ?>
                <?php echo Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')); ?>

                <?php endif; ?>

                <?php echo $__env->make('users.form_elements', array('button_name'=> $button_name, 'record' => $record, 'roles'=>$roles), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>

                
            </div>
        </div>
     
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>