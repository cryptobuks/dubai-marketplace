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
    @if(checkRole(getUserGrade(2)))
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-shopping-bag"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_PRODUCTS_DASHBOARD}}">{{ getPhrase('products_dashboard')}}</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
        </ol>
    </div>
    @endif
@if(Auth::user()->role_id == VENDOR_ROLE_ID)
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
 
                    <h4>{{ Auth::user()->name }}</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{URL_PRODUCTS_ADD}}" class="btn btn-primary ">{{ getPhrase('Add') }}</a>
                    <a href="{{URL_IMPORT.'product'}}" class="btn btn-primary">{{ getPhrase('import') }}</a>
                </div>
                <h2>{{ getPhrase('my_dashboard') }}</h2>
                @include('productvendor.menu', array('sub_active' => '$sub_active', 'tab' => 'products'))
    
                <div class="alert alert-success">{{ getPhrase('admin_commission : ') }} {{ getSetting('admin_commission_for_a_vendor_product', 'site_settings')}} %</div>
    
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                        <th>{{ getPhrase('Title') }}</th>
                        <th>{{ getPhrase('product_owner') }}</th>
                        <th>{{ getPhrase('Price') }}</th>
                        <th>{{ getPhrase('Image') }}</th>
                        <th>{{ getPhrase('Status') }}</th>
                        <th>{{ getPhrase('approve_status') }}</th>
                        <th>{{ getPhrase('Action') }}</th>
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
                <a href="{{URL_PRODUCTS_ADD}}" class="btn btn-primary pull-right">{{ getPhrase('Add') }}</a>

                </div>
               
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                        <th>{{ getPhrase('Title') }}</th>
                        <th>{{ getPhrase('product_owner') }}</th>
                        <th>{{ getPhrase('Price') }}</th>
                        <th>{{ getPhrase('Image') }}</th>
                        <th>{{ getPhrase('Status') }}</th>
                        <th>{{ getPhrase('approve_status') }}</th>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center;">{{getPhrase('product_approve_status')}}</h4>
      </div>
      <div class="modal-body">
      {!!Form::open(array('url'=> URL_PRODUCT_ADMIN_APPROVE,'method'=>'POST','name'=>'userstatus'))!!} 

      <span><h4 id="message" style="text-align: center; color: #3c8dbc;"></h4></span>

        <input type="hidden" name="product_id" id="product_id" >
      
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary" >Yes</button>
      </div>
      {!!Form::close()!!}
    </div>

  </div>
</div>
@endif
<!-- /.content -->


@endsection
 
 @section('footer_scripts')
 @include('common.datatables',array('route'=>URL_PRODUCTS_LIST,'route_as_url'=>TRUE)) 
 <script >
    
     function approveProduct(productid)
     {
       $('#product_id').val(productid);
       
       message = '{{ getPhrase('are_you_sure_to_make_approve_this_product')}}?'; 
       
       $('#message').html(message);
 
       $('#myModal').modal('show');
     }
 
    
   
  </script>
 @include('common.deletescript', array('route' => URL_PRODUCTS_DELETE))
 @stop
 