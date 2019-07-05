 <?php $__env->startSection('content'); ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-home"></i> <?php echo e(getPhrase('home')); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL_DASHBOARD); ?>"><i class="fa fa-home"></i> <?php echo e(getPhrase('home')); ?></a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Buybusiness.ae</li> -->
        </ol>
    </div>

    <div class="row row-cards">
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_CATEGORIES_DASHBOARD); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-success text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-random fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            
                        <?php $total_categories = App\Category::where('status','=','Active');?>
                             <h1 class="mb-3"><?php echo e($total_categories->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0">Categories</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_PRODUCTS_DASHBOARD); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-danger text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-shopping-bag fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $total_products = App\Product::where('status','=','Active');?>
                               <h1 class="mb-3"><?php echo e($total_products->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0">Products</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_COUPONS); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-hashtag fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $total_coupons = App\Coupon::where('status','=','1') ;?>
                             <h1 class="mb-3"><?php echo e($total_coupons->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('coupons')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_LICENCES); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-gray text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-key fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $total_licences = App\Licence::where('status','=','Active');?>
                               <h1 class="mb-3"><?php echo e($total_licences->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('licences')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_OFFERS); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-pink text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-tags fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $total_offers = App\Offers::where('status','=','Active');?>
                              <h1 class="mb-3"><?php echo e($total_offers->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('offers')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_ADMIN_USERS_DASHBOARD); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-warning text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-users fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $total_users = App\User::where('status','=','Active');?>
                              <h1 class="mb-3"><?php echo e($total_users->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('users')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_MASTERSETTINGS_SETTINGS); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-info text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-cog fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                              <h2 class="mb-3"><?php echo e(getPhrase('settings')); ?></h2>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('settings')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_PAYMENTS_DASHBOARD); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-cyan text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-cc fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                              <h2 class="mb-3"><?php echo e(getPhrase('payment')); ?></h2>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('payment_reports')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="<?php echo e(URL_TOTAL_SALES); ?>">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-indigo text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-shopping-cart fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $total_sales = App\Payment_Items::select('id');?>
                               <h1 class="mb-3"><?php echo e($total_sales->count()); ?></h1>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('total_sales')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a >
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-red text-center align-self-center shadow-primary"><img src="<?php echo e(ASSETS); ?>asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-money fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php  
                        $total_amount = App\Payment_Items::join('payments','payments.id','=','payments_items.payment_id')
                                          ->join('products','products.id','=','payments_items.item_id')
                                          ->where('payments.payment_status','=','success')
                                          ->select('payments.paid_amount')->get();

                                          $count = 0;

                                    foreach ($total_amount as $amount) {
                                        
                                        $count +=$amount->paid_amount; 
                                    }
                    ?>
                    
                              <h1 class="mb-3"><?php echo e(currency($count)); ?></h1>
                            <h5 class="font-weight-normal mb-0"><?php echo e(getPhrase('total_revenue')); ?></h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
         


         
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
 <?php echo $__env->make('common.chart', array($chart_data,'ids'=>$ids), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>