<?php $__env->startSection('header_scripts'); ?>
<link rel="stylesheet" href="<?php echo e(ASSETS); ?>plugins/datepicker/datepicker3.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if($record): ?>
<?php 
$menu_id = $record->menu_id;
$menu_slug = $record->menu_slug;
$menu_item_slug = $menu_item_slug;
 ?>
<?php endif; ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-bar"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(PREFIX); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
               <li class="breadcrumb-item active" aria-current="page"><a  href="<?php echo e(URL_MENU_ITEMS.$menu_slug); ?>"><?php echo e(getPhrase('menu_list')); ?></a></li>          
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
            array('url' => URL_MENU_ITEMS_EDIT.$record->slug, 
            'method'=>'patch','name'=>'formName ', 'files'=>'true' ))); ?>

            <?php else: ?>
            <?php echo Form::open(array('url' => URL_MENU_ITEMS_ADD . '/' . $menu_slug, 'method' => 'POST', 'name'=>'formName ', 'files'=>'true')); ?>

            <?php endif; ?>

            <?php echo $__env->make('menu-items.form_elements', array('button_name'=> $button_name, 'record' => $record, 'menu_id' => $menu_id, 'menu_slug' => $menu_slug), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>	
	<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>