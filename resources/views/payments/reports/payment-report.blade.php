@extends($layout)
 @section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-cc-paypal"></i> {{isset($title) ? $title : ''}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
 			<li class="breadcrumb-item active" aria-current="page"><a href="{{URL_PAYMENTS_DASHBOARD}}"> {{getPhrase('payments_dashboard')}}</a> </li>
        </ol>
    </div>

    <div class="row row-cards">
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
			<a href="@if($payment_mode=='online')
			{{URL_ONLINE_PAYMENT_REPORT_DETAILS}}
			@else {{URL_OFFLINE_PAYMENT_REPORT_DETAILS}}
			@endif
			all">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-3">
                        <div class="circle-icon bg-success text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-cc  fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-9">
                        <div class="card-body p-4">
                         
                               
                              <h2 class="mb-3">{{ $payments->all}}</h2>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('Payments')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="@if($payment_mode=='online')
							{{URL_ONLINE_PAYMENT_REPORT_DETAILS}}
							@else {{URL_OFFLINE_PAYMENT_REPORT_DETAILS}}
							@endif
							success">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-danger text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-angellist fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                       
                              
                                <h2 class="mb-3"> {{ $payments->success}}</h2>
                            <h5 class="font-weight-normal mb-0"> {{ getPhrase('success')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="@if($payment_mode=='online')
							{{URL_ONLINE_PAYMENT_REPORT_DETAILS}}
							@else {{URL_OFFLINE_PAYMENT_REPORT_DETAILS}}
							@endif
							pending">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-paper-plane fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                     
                               
                              <h2 class="mb-3">{{ $payments->pending}}</h2>
                            <h4 class="font-weight-normal mb-0"> {{ getPhrase('pending')}}</h4> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
            <a href="@if($payment_mode=='online')
							{{URL_ONLINE_PAYMENT_REPORT_DETAILS}}
							@else {{URL_OFFLINE_PAYMENT_REPORT_DETAILS}}
							@endif
							cancelled">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-gray text-center align-self-center shadow-primary"><img src="{{ASSETS}}asset\images\circle.svg" class="card-img-absolute"><i class="fa fa-window-close-o fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                        <?php $adminObject =  App\User::where('role_id','=',4)->get()->count();
                               
                               ?>
                              
                                <h2 class="mb-3">{{ $payments->cancelled}}</h2>
                            <h5 class="font-weight-normal mb-0">{{ getPhrase('cancelled')}}</h5> 
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
            
	</div>  
	<!-- <div class="row row-card">
		 
		<div class="col-sm-12 col-lg-6 col-xl-6 col-md-6">
			<div class="panel panel-primary dsPanel">
			<div class="panel-heading">{{getPhrase('payment_statistics')}}</div>
			<div class="panel-body" >
				<canvas id="payments_chart" width="100" height="60"></canvas>
			</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-6 col-xl-6 col-md-6">
			<div class="panel panel-primary dsPanel">
				<div class="panel-heading">{{getPhrase('payment_monthly_statistics')}}</div>
				<div class="panel-body" >
					<canvas id="payments_monthly_chart" width="100" height="60"></canvas>
				</div>
			</div>
        </div>
	</div>  -->
</div>
@stop

@section('footer_scripts')


{{-- @include('common.chart', array('chart_data'=>$payments_chart_data,'ids' =>array('payments_chart'), 'scale'=>TRUE))
 @include('common.chart', array('chart_data'=>$payments_monthly_data,'ids' =>array('payments_monthly_chart'), 'scale'=>true)) --}}
 

@stop


 