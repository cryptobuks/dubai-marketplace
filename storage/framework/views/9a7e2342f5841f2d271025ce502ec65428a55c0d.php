 <?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-random"></i> <?php echo e(isset($title) ? $title : ''); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e(isset($title) ? $title : ''); ?></li>
        </ol>
    </div>

    <div class="row row-cards">
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_CATEGORIES); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-success text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-list fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                          
                              <h2 class="mb-3"><?php echo e(getPhrase('list')); ?></h2>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('view_all')); ?></h5> 

                         </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_CATEGORIES_ADD); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-danger text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-plus-circle fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                    
                              
                                <h2 class="mb-3"><?php echo e(getPhrase('add')); ?></h2>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('create')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_IMPORT.'category'); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-download fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                     
                               
                              <h2 class="mb-3"><?php echo e(getPhrase('import')); ?></h2>
                            <h5 class="font-weight-normal mb-0"> <?php echo e(getPhrase('view_all')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
            
    </div>   
</div>
<?php $__env->stopSection(); ?>


 
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>