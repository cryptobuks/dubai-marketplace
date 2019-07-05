@extends($layout)
 @section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-users"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </div>

    <div class="row row-cards">
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS.'owner'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-success text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-star fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::where('role_id','=',1)->get()->count();
                               
                               ?>
                               
                              <h1 class="mb-3">{{$adminObject}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('owners')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS.'admin'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-danger text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-settings-variant fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::where('role_id','=',2)->get()->count();
                               
                               ?>
                              
                                <h1 class="mb-3"> {{$adminObject}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('admins')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS.'executive'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-edit fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::where('role_id','=',3)->get()->count();
                               
                               ?>
                               
                              <h1 class="mb-3">{{$adminObject}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('executives')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS.'vendor'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-gray text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-multiple-outline fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::where('role_id','=',4)->get()->count();
                               
                               ?>
                              
                                <h1 class="mb-3"> {{$adminObject}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('vendors')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS.'user'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-pink text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-multiple fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::where('role_id','=',5)->get()->count();
                               
                               ?>
                               
                               <h1 class="mb-3">{{$adminObject}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('customers')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS.'all'}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-warning text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-switch fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::get()->count();
                               
                               ?>
                               
                               <h1 class="mb-3">{{$adminObject}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('all_users')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="{{URL_USERS_ADD}}">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-info text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="mdi mdi-account-multiple-plus fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                              <h2 class="mb-3">{{ getPhrase('create')}} </h2>
                            <h5 class="font-weight-normal mb-0">  {{ getPhrase('create_user')}} </h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
         
         


         
    </div>

   

     

     
</div>
@stop


 