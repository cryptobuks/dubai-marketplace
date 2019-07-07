@extends($layout)
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
 <style>
    .tour li{
        padding:10px;
        font-size:15px;
        border-top:1px solid #a0a0a09c;
    }
</style>
@stop
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-file-text-o"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
            <li  class="breadcrumb-item"><a href="{{ URL_PAGES_DASHBOARD }}">{{ getPhrase('Pages Dashboard') }}</a></li>
            <li  class="breadcrumb-item"><a href="{{ URL_PAGES }}">{{ getPhrase('Pages') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4>{{$title}}</h4>
                </div>
                <div class="col-md-2">
                <a href="{{URL_PAGES}}" class="btn btn-primary pull-right">{{ getPhrase('List') }}</a>
                </div>
                 
            </div>
            <div class="mt-5">

            <ul class=" tour">
                  <li><a href="#"><strong>Title</strong> <span class="pull-right">{{$record->title}}</span></a></li>
              
                  <li><a href="#"><strong>Slug</strong> <span class="pull-right">{{$record->slug}}</span></a></li>			
                  
                  <li><a href="#"><strong>Content </strong><span class="pull-right">{{$record->description}}</span></a></li>
          
                  <li><a href="#"><strong>Meta Tag Title</strong><span class="pull-right">{{ $record->meta_tag_title }}</span></a></li>
          
                  <li><a href="#"><strong>Meta Tag Description</strong><span class="pull-right">{{ $record->meta_tag_description }}</span></a></li>
				
                  <li><a href="#"><strong>Meta Tag Keywords</strong><span class="pull-right">{{ $record->meta_tag_keywords }}</span></a></li>
                  
                  <li><a href="#"><strong>Status</strong><span class="pull-right">{{ $record->status }}</span></a></li>
                  
                  <li><a href="#"><strong>Show in menu?</strong><span class="pull-right">{{ ucfirst($record->show_in_menu) }}</span></a></li>
                        
                          <li><a href="#"><strong>Created At </strong><span class="pull-right">{{$record->created_at}}</span></a></li>
                  
                          <li><a href="#"><strong>Updated At</strong><span class="pull-right">{{$record->updated_at}}</span></a></li>
                  <?php $updater = getUserRecord($record->record_updated_by);
                  if ($updater != null) {
                  ?>
                          <li><a href="#"><strong>Last updated by</strong><span class="pull-right">{{ $updater->name }}</span></a></li>
                  <?php } ?>
              </ul>
            
              </div>
        </div>
     
    </div>
</div>

@endsection
 
 @section('footer_scripts')
  
 @stop
 