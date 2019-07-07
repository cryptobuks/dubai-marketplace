<?php $__env->startSection('header_scripts'); ?>
<link rel="stylesheet" href="<?php echo e(ASSETS); ?>plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo e(CSS); ?>select2.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-file-text-o"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(PREFIX); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
               <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(URL_PAGES_DASHBOARD); ?>"><?php echo e(getPhrase('Pages Dashboard')); ?></a></li>
          <li class="breadcrumb-item active" ><a href="<?php echo e(URL_PAGES); ?>"><?php echo e(getPhrase('Pages')); ?></a></li>
             <li class="breadcrumb-item active" aria-current="page"><?php echo e(isset($title) ? $title : ''); ?></li>
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
            array('url' => URL_PAGES_EDIT.$record->slug, 
            'method'=>'patch','name'=>'formUsers ', 'files'=>'true' ))); ?>

            <?php else: ?>
            <?php echo Form::open(array('url' => URL_PAGES_ADD, 'method' => 'POST', 'name'=>'formUsers ', 'files'=>'true')); ?>

            <?php endif; ?>

            <?php echo $__env->make('pages.form_elements', array('button_name'=> $button_name, 'record' => $record, ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
	<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.fontawesomeiconpicker', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>