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
            <li class="breadcrumb-item"><a href="{{URL_MENU}}">{{ getPhrase('Menus') }}</a> </li>
            <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
 
        </ol>
    </div>
 
<div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
 
                    <h4>{{ $title }}</h4>
                </div>
                <div class="col-md-2">
                <a href="{{URL_MENU_ITEMS_ADD . '/' . $menu_slug}}" class="btn btn-primary pull-right">{{ getPhrase('Add') }}</a>

                </div>
               
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                        <th>{{ getPhrase('Title') }}</th>
                        <th>{{ getPhrase('URL', 'upper') }}</th>
                        <th>{{ getPhrase('order') }}</th>
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
 
<!-- /.content -->
@endsection
 
 @section('footer_scripts')
 @include('common.datatables',array('route'=>URL_MENU_ITEMS_LIST . '/' . $menu_slug,'route_as_url'=>TRUE))
  
  @include('common.deletescript', array('route'=>URL_MENU_ITEMS_DELETE))
 @stop
 
 