@extends($layout)
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
 
@stop
<style>
  .form-inline{
    display:block!important;
  }
  
</style>
 @section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-random"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
        </ol>
    </div>
@if(Auth::user()->role_id == USER_ROLE_ID || Auth::user()->role_id == VENDOR_ROLE_ID)

    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
 
                    <h4>{{ Auth::user()->name }}</h4>
                </div>

                <h2>{{ getPhrase('my_dashboard') }}</h2>
                @if(Auth::user()->role_id == USER_ROLE_ID)
                @include('customer.menu', array('sub_active' => $sub_active, 'tab' => 'dashboard'))
                @elseif(Auth::user()->role_id == VENDOR_ROLE_ID)
                @include('productvendor.menu', array('sub_active' => $sub_active, 'tab' => 'dashboard'))
                @endif
                <div class="alert alert-success">{{ getPhrase('admin_commission : ') }} {{ getSetting('admin_commission_for_a_vendor_product', 'site_settings')}} %</div>
                
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                         <th>{{ getPhrase('Title') }}</th>
                        <th>{{ getPhrase('code') }}</th>
                        <th>{{ getPhrase('discount_type') }}</th>
                        <th>{{ getPhrase('value') }}</th>
                        <th>{{ getPhrase('start_date') }}</th>
                        <th>{{ getPhrase('end_date') }}</th>
                        <th>{{ getPhrase('Status') }}</th>
                      </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
              </table>
            
              </div>
        </div>
     
    </div>
@else
<div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
 
                    <h4>{{ $title }}</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{URL_COUPONS_ADD}}" class="btn btn-primary pull-right">{{ getPhrase('Add') }}</a>

                </div>
               
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                         <th>{{ getPhrase('Title') }}</th>
                        <th>{{ getPhrase('code') }}</th>
                        <th>{{ getPhrase('discount_type') }}</th>
                        <th>{{ getPhrase('value') }}</th>
                        <th>{{ getPhrase('start_date') }}</th>
                        <th>{{ getPhrase('end_date') }}</th>
                        <th>{{ getPhrase('Status') }}</th>
                        <th>{{ getPhrase('Action') }}</th>
                      </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
              </table>
            
              </div>
        </div>
     
    </div>
</div>
@endif
<!-- /.content -->

@endsection

@section('footer_scripts')
@include('common.datatables',array('route' => URL_COUPONS_LIST,'route_as_url'=>TRUE)) 
@include('common.deletescript', array('route'=>URL_COUPONS_DELETE))
@stop

 