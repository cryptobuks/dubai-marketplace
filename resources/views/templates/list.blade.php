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
             <li class="breadcrumb-item active" aria-current="page">{{ getPhrase('Templates') }}</li>
        </ol>
    </div>
 
<div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
 
                    <h4>{{ $title }}</h4>
                </div>
                <div class="col-md-2">
                <a href="{{URL_TEMPLATES_ADD}}" class="btn btn-primary pull-right">{{ getPhrase('Add') }}</a>

                </div>
               
                
            </div>
            <div class=" mt-5 table-responsive">

              <table id="example"  class="table p-5 card-table table-vcenter text-nowrap datatable">
                  <thead>
                      <tr>
                        <th>{{ getPhrase('Title') }}</th>
                        <th>{{ getPhrase('Type') }}</th>
                        @if(isset($parent) && $parent == '')
                        <th>{{ getPhrase('Template Type') }}</th>
                        @endif
                        <th>{{ getPhrase('Subject') }}</th>
                        <th>{{ getPhrase('From Email') }}</th>
                        <th>{{ getPhrase('From Name') }}</th>
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
  @if($parent == '')
   @include('common.datatables',array('route'=>URL_TEMPLATES_LIST,'route_as_url'=>TRUE, 'params' => array('parent' => $parent)))
  @else
    @include('common.datatables',array('route'=>URL_TEMPLATES_LIST . '/' . $parent,'route_as_url'=>TRUE, 'params' => array('parent' => $parent)))
  @endif
  
  @include('common.deletescript', array('route'=>URL_TEMPLATES_DELETE))
 @stop
 
 