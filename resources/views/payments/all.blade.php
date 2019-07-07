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
        <h4 class="page-title"><i class="fa fa-cc"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
        </ol>
    </div>
 
<div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
 
                    <h4>{{ $title }}</h4>
                </div>
                 
               
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                        <th>{{ getPhrase('product') }}</th>         
                        <th>{{ getPhrase('price') }}</th>         
                        <th>{{ getPhrase('owner_name') }}</th>         
                        <th>{{ getPhrase('coupon_code') }}</th>
                        <th>{{ getPhrase('discount') }}</th>
                        <th>{{ getPhrase('licence_name') }}</th>
                        <th>{{ getPhrase('licence_amount') }}</th>         
                        <th>{{ getPhrase('paid_amount') }}</th>
                        <th>{{ getPhrase('payment_gateway') }}</th>
                        <th>{{ getPhrase('date') }}</th>
                        <th>{{ getPhrase('customer_email') }}</th>
                      </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
              </table>
            
              </div>
        </div>
     
    </div>
</div>
 
<!-- /.content -->
@endsection
 
 @section('footer_scripts')
 @include('common.datatables',array('route'=>URL_TOTAL_SALES_GETLIST,'route_as_url'=>TRUE)) 
 @stop
 