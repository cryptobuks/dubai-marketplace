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
        <h4 class="page-title"><i class="fa fa-file-text-o"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
            <li  class="breadcrumb-item"><a href="<?php echo e(URL_PAGES_DASHBOARD); ?>"><?php echo e(getPhrase('Pages Dashboard')); ?></a></li>
            <li  class="breadcrumb-item"><a href="<?php echo e(URL_PAGES); ?>"><?php echo e(getPhrase('Pages')); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4><?php echo e($title); ?></h4>
                </div>
                <div class="col-md-2">
                <a href="<?php echo e(URL_PAGES); ?>" class="btn btn-primary pull-right"><?php echo e(getPhrase('List')); ?></a>
                </div>
                 
            </div>
            <div class="mt-5">

            <ul class=" tour">
                  <li><a href="#"><strong>Title</strong> <span class="pull-right"><?php echo e($record->title); ?></span></a></li>
              
                  <li><a href="#"><strong>Slug</strong> <span class="pull-right"><?php echo e($record->slug); ?></span></a></li>			
                  
                  <li><a href="#"><strong>Content </strong><span class="pull-right"><?php echo e($record->description); ?></span></a></li>
          
                  <li><a href="#"><strong>Meta Tag Title</strong><span class="pull-right"><?php echo e($record->meta_tag_title); ?></span></a></li>
          
                  <li><a href="#"><strong>Meta Tag Description</strong><span class="pull-right"><?php echo e($record->meta_tag_description); ?></span></a></li>
				
                  <li><a href="#"><strong>Meta Tag Keywords</strong><span class="pull-right"><?php echo e($record->meta_tag_keywords); ?></span></a></li>
                  
                  <li><a href="#"><strong>Status</strong><span class="pull-right"><?php echo e($record->status); ?></span></a></li>
                  
                  <li><a href="#"><strong>Show in menu?</strong><span class="pull-right"><?php echo e(ucfirst($record->show_in_menu)); ?></span></a></li>
                        
                          <li><a href="#"><strong>Created At </strong><span class="pull-right"><?php echo e($record->created_at); ?></span></a></li>
                  
                          <li><a href="#"><strong>Updated At</strong><span class="pull-right"><?php echo e($record->updated_at); ?></span></a></li>
                  <?php $updater = getUserRecord($record->record_updated_by);
                  if ($updater != null) {
                  ?>
                          <li><a href="#"><strong>Last updated by</strong><span class="pull-right"><?php echo e($updater->name); ?></span></a></li>
                  <?php } ?>
              </ul>
            
              </div>
        </div>
     
    </div>
</div>

<?php $__env->stopSection(); ?>
 
 <?php $__env->startSection('footer_scripts'); ?>
  
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>