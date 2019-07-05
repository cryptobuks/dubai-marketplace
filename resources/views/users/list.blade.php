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
        <h4 class="page-title"><i class="fa fa-users"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_ADMIN_USERS_DASHBOARD}}">{{ getPhrase('users_dashboard') }}</a> </li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                    <h4>{{$title}}</h4>
                </div>
                <div class="col-md-2 col-sm-6">
                
                    <a href="{{URL_IMPORT . 'user'}}" class="btn btn-primary  ">{{ getPhrase('Import') }}</a> 
                    <a href="{{URL_USERS_ADD}}" class="btn btn-primary  ">{{ getPhrase('Add') }}</a>
                    
                </div>
            </div>
            <div class=" table-responsive mt-5">

              <table id="example"  class="table   card-table table-vcenter text-nowrap   datatable">
                  <thead>
                      <tr>
                          <th>{{ getPhrase('Name') }}</th>
                          <th>{{ getPhrase('Email') }}</th>
                          <th>{{ getPhrase('Role') }}</th>
                          <th>{{ getPhrase('Image') }}</th>
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
@stop

@section('footer_scripts')
 @include('common.datatables', array('route' => URL_USERS_DATATABLE . $type, 'route_as_url' => TRUE))
 @include('common.deletescript', array('route'=>URL_USERS_DELETE))
@stop