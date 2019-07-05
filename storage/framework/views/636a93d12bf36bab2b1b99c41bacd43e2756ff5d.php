<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<style>
    .tour li{
        padding:10px;
        font-size:16px;
        border-top:1px solid #a0a0a09c;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-random"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(PREFIX); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
             <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(URL_COUPONS); ?>"><?php echo e(getPhrase('Coupons')); ?></a></li>
             <li class="breadcrumb-item active" aria-current="page"><?php echo e(isset($title) ? $title : ''); ?></li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4><?php echo e($title); ?></h4>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo e(URL_COUPONS); ?>" class="btn btn-primary  pull-right">List</a>
                </div>
                 
            </div>
            <div class="mt-5">

            <ul class=" tour">
            <li><a href="#"><strong><?php echo e(getPhrase('Title')); ?></strong> <span class="pull-right"><?php echo e($record->title); ?></span></a></li>
                <li><a href="#"><strong><?php echo e(getPhrase('Slug')); ?></strong> <span class="pull-right"><?php echo e($record->slug); ?></span></a></li>
                <li><a href="#"><strong><?php echo e(getPhrase('code')); ?></strong> <span class="pull-right"><?php echo e($record->code); ?></span></a></li>   
                <li><a href="#"><strong><?php echo e(getPhrase('value')); ?></strong> <span class="pull-right"><?php echo e($record->value); ?>

                <?php if( $record->type == 'percent'): ?>
                  %
                <?php endif; ?>
                </span></a></li>				
							
                <li><a href="#"><strong><?php echo e(getPhrase('start_date')); ?> </strong><span class="pull-right"><?php echo e($record->start_date); ?></span></a></li>
                <li><a href="#"><strong><?php echo e(getPhrase('end_date')); ?></strong><span class="pull-right"><?php echo e($record->end_date); ?></span></a></li>
                <li><a href="#"><strong><?php echo e(getPhrase('minimum_amount')); ?></strong><span class="pull-right"><?php echo e($record->minimum_amount); ?></span></a></li>
                <li><a href="#"><strong><?php echo e(getPhrase('max_users')); ?> </strong><span class="pull-right"><?php echo e($record->max_users); ?></span></a></li>
				        <li><a href="#"><strong>Status </strong><span class="pull-right"><?php echo e($record->status); ?></span></a></li>				
                
                <li><a href="#"><strong><?php echo e(getPhrase('Created At')); ?> </strong><span class="pull-right"><?php echo e($record->created_at); ?></span></a></li>
                <li><a href="#"><strong><?php echo e(getPhrase('Updated At')); ?></strong><span class="pull-right"><?php echo e($record->updated_at); ?></span></a></li>
				 <li><a href="#"><strong><?php echo e(getPhrase('Description')); ?> </strong><span class="pull-right"><?php echo $record->description; ?><p>&nbsp;&nbsp;</p></span></a></li>
               
              </ul>
            
              </div>
        </div>
     
    </div>
</div>

<?php $__env->stopSection(); ?>
 
 <?php $__env->startSection('footer_scripts'); ?>
  
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>