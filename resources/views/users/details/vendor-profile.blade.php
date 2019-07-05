@extends($layout)
@section('header_scripts')
  
@stop
<style>
  .form-inline{
    display:block!important;
  }
  
</style>
 @section('content')
<div class=" content-area">
    @if(checkRole(getUserGrade(7)))
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-user"></i> {{ Auth::user()->name }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_VENDOR_DASHBOARD}}"><i class="fa fa-user"></i>  {{ getPhrase('dashboard') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{ getPhrase('profile') }}</li>
        </ol>
    </div>
    @endif
    @if(checkRole(getUserGrade(2)))
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-user"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_ADMIN_USERS_DASHBOARD}}"><i class="fa fa-user"></i>  {{getPhrase('users_dashboard')}}</a></li>
             <li class="breadcrumb-item  active" aria-current="page"><a href="{{URL_USERS.'vendor'}}">{{getPhrase('vendors')}}</a></li>
             <li  class="breadcrumb-item active" aria-current="page">{{ $title }} </li>
        </ol>
    </div>
    @endif
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    @if(checkRole(getUserGrade(7)))
                   <h2>{{ getPhrase('my_dashboard') }}</h2>
			        @include('productvendor.menu', array('sub_active' => $sub_active, 'tab' => 'dashboard'))

			       @endif
 				 	<h2>{{ getPhrase('details_of').' '.$record->name }}</h2>	
                </div>
                
            </div>
            <div class="mt-5">
                <div class="row ">
                    <div class="  col-12 text-center">
                        <div class="" ><img style="border-radius:50%" src="{{ getProfilePath($record->image,'profile')}}" alt="" width="100" height="100"></div>
                        <div class="aouther-school">
                            <h2 class="text-primary">{{ $record->name}}</h2>
                            <p class="text-red"><span>{{$record->email}}</span></p>
                            <h3 class="profile-details-title text-info">{{ getPhrase('details')}}</h3>
                        </div>

                    </div>
                    <hr>
                    
                </div>
                <div class="row">
					<?php $login_user = Auth::user();
					?>
					@if($login_user->role_id!=4)
					{{-- {{dd($vendor_uploads)}} --}}
					 

                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-6">
                        <a href="{{URL_VENDOR_UPLOAD_PRODUCTS.$record->slug}}">
                        <div class="card card-img-holder text-default bg-color">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-success text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-upload fs-30  text-white mt-4"></i></div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                        
                                        <h1 class="mb-3">{{$vendor_uploads}}</h1>
                                        <h5 class="font-weight-normal mb-0"> {{ getPhrase('uploads')}}</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
					@endif

                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-6">
                        <a href="{{URL_VENDOR_UPLOAD_PRODUCT_SALES.$record->slug}}">
                        <div class="card card-img-holder text-default bg-color">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-flag fs-30  text-white mt-4"></i></div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                    @if(count($total_uploads))
                                        <?php
                                        $count = 0; 
                                        
                                        foreach ($total_uploads as $items) {
                                        $total_available = [];  	
                                        $total_available = App\Payment_Items::where('item_id',$items->id)->get();
                                        $count += count($total_available);
                                        }
                                        

                                        ?>
                                        <h1 class="mb-3">{{$vendor_uploads}}</h1>
                                    @else
                                        <h1 class="mb-3">0</h1>
                                    @endif
                                        <h5 class="font-weight-normal mb-0"> {{ getPhrase('product_sales')}}</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                  @if($login_user->role_id!=4)
					
                    
                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-6">
                        <a href="{{URL_VENDOR_PRODUCTS_PURCHASES.$record->slug}}">
                        <div class="card card-img-holder text-default bg-color">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-red text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-shopping-cart fs-30  text-white mt-4"></i></div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                        
                                        <h1 class="mb-3">{{$purchase_items}}</h1>
                                        <h5 class="font-weight-normal mb-0"> {{ getPhrase('purchases')}}</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
					@endif

                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-6">
                        <a href="{{URL_VENDOR_UPLOAD_PRODUCT_SALES.$record->slug}}">
                        <div class="card card-img-holder text-default bg-color">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-info text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-credit-card fs-30  text-white mt-4"></i></div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                    <?php $count = 0;

                                    foreach ($vendor_got_amount as $amount) {
                                        
                                        $count +=$amount->final_amount; 
                                    }

                                    ?>
                                        <h1 class="mb-3">{{currency($count)}}</h1>
                                        <h5 class="font-weight-normal mb-0"> {{ getPhrase('amount')}}</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                </div>
            
            </div>
        </div>
     
    </div>
</div>
@endsection
 

@section('footer_scripts')
 

@stop