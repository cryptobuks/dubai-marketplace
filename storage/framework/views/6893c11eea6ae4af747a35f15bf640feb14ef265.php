<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<style>
  .form-inline{
    display:block!important;
  }
  
</style>
 <?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-cog"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
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
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
					  	<th><?php echo e(getPhrase('module')); ?></th>
						<th><?php echo e(getPhrase('key')); ?></th>
						<th><?php echo e(getPhrase('description')); ?></th>
						<th><?php echo e(getPhrase('action')); ?></th>
                      </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
              </table>
            
              </div>
        </div>
     
    </div>
 
<!-- /.content -->
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('footer_scripts'); ?>

 <?php echo $__env->make('common.datatables', array('route'=>'mastersettings.dataTable'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('common.deletescript', array('route'=>'/mastersettings/topics/delete/'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.layout-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>