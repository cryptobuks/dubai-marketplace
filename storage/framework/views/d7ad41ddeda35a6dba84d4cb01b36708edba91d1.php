<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
 <style>
    .tour li{
        padding:10px;
        font-size:15px;
        border-top:1px solid #a0a0a09c;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-tags"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
		        <li  class="breadcrumb-item"><a  href="<?php echo e(URL_OFFERS); ?>"><?php echo e(getPhrase('offers')); ?></a></li>  		  
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
                <a href="<?php echo e(URL_OFFERS); ?>" class="btn btn-primary pull-right"><?php echo e(getPhrase('List')); ?></a>
                </div>
                 
            </div>
            <div class="mt-5">

            <ul class=" tour">
              <li><a href="#"><strong><?php echo e(getPhrase('Title')); ?></strong> <span class="pull-right"><?php echo e($record->title); ?></span></a></li>
				
              <li><a href="#"><strong><?php echo e(getPhrase('Slug')); ?></strong> <span class="pull-right"><?php echo e($record->slug); ?></span></a></li>			
                      
                      <li><a href="#"><strong><?php echo getPhrase('Description'); ?> </strong><span class="pull-right"><?php echo e($record->description); ?></span></a></li>
              
              <li><a href="#"><strong><?php echo e(getPhrase('Image')); ?></strong><span class="pull-right"><?php echo e($record->image); ?></span></a></li>
              
              <?php
              $product = App\Product::where('id', '=',$record->product_id )->first();
              ?>
              <li><a href="#"><strong><?php echo e(getPhrase('Product')); ?></strong><span class="pull-right"><?php echo e($product->name); ?></span></a></li>

              <li><a href="#"><strong><?php echo e(getPhrase('use_product_title')); ?></strong><span class="pull-right"><?php echo e(ucfirst( $record->use_product_title )); ?></span></a></li>

              <li><a href="#"><strong><?php echo e(getPhrase('use_product_description')); ?></strong><span class="pull-right"><?php echo e(ucfirst( $record->use_product_description )); ?></span></a></li>
              
              <li><a href="#"><strong><?php echo e(getPhrase('use_product_image')); ?></strong><span class="pull-right"><?php echo e(ucfirst( $record->use_product_image )); ?></span></a></li>
              
              <li><a href="#"><strong><?php echo e(getPhrase('start_date_time')); ?></strong><span class="pull-right"><?php echo e($record->start_date_time); ?></span></a></li>
              <li><a href="#"><strong><?php echo e(getPhrase('end_date_time')); ?></strong><span class="pull-right"><?php echo e($record->end_date_time); ?></span></a></li>				
              <li><a href="#"><strong>Status</strong><span class="pull-right"><?php echo e(ucfirst( $record->status )); ?></span></a></li>              
              <li><a href="#"><strong>Created At </strong><span class="pull-right"><?php echo e($record->created_at); ?></span></a></li>				
              <li><a href="#"><strong>Updated At</strong><span class="pull-right"><?php echo e($record->updated_at); ?></span></a></li>				
            
              </ul>
            
              </div>
        </div>
     
    </div>
</div>

<?php $__env->stopSection(); ?>
 
 <?php $__env->startSection('footer_scripts'); ?>
  
 <?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>