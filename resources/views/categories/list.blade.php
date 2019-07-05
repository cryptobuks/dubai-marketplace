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
            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_ADMIN_USERS_DASHBOARD}}">{{ getPhrase('categories_dashboard')}}</a> </li>
            <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                    <h4>{{$title}}</h4>
                </div>
                <div class="col-md-2 col-sm-6">
                
                    <a href="{{URL_IMPORT . 'category'}}" class="btn btn-primary  ">{{ getPhrase('Import') }}</a> 
                    <a href="{{URL_CATEGORIES_ADD}}" class="btn btn-primary  ">{{ getPhrase('Add') }}</a>
                    
                </div>
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                        <th>{{ getPhrase('Title') }}</th>
                        
                        @if(isset($parent) && $parent == '')
                        <th>{{ getPhrase('Sub-Cats') }}</th>
                        @endif
                        
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
@endsection
 
 @section('footer_scripts')
  @if($parent == '')
     @include('common.datatables',array('route'=>URL_CATEGORIES_LIST,'route_as_url'=>TRUE, 'params' => array('parent' => $parent)))
  @else
      @include('common.datatables',array('route'=>URL_CATEGORIES_LIST . '/' . $parent,'route_as_url'=>TRUE, 'params' => array('parent' => $parent)))
  @endif
  
  @include('common.deletescript', array('route'=>URL_CATEGORIES_DELETE))
 @stop
 