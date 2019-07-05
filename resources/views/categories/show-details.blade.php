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
        <h4 class="page-title"><i class="fa fa-random"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page">Applications</li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4>{{$title}}</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{URL_CATEGORIES}}" class="btn btn-primary  pull-right">List</a>
                </div>
                 
            </div>
            <div class="mt-5">

            <ul class=" tour">
                <li><a href="#"><strong>Title</strong> <span class="pull-right">{{$record->title}}</span></a></li>
				<li><a href="#"><strong>Slug</strong> <span class="pull-right">{{$record->slug}}</span></a></li>
                <li><a href="#"><strong>Description </strong><span class="pull-right">{{$record->description}}<p>&nbsp;&nbsp;</p></span></a></li>
                <li><a href="#"><strong>Meta Tag Title</strong> <span class="pull-right">{{$record->meta_tag_title}}</span></a></li>
                <li><a href="#"><strong>Meta Tag Description </strong><span class="pull-right">{{$record->meta_tag_description}}</span></a></li>
                <li><a href="#"><strong>Meta Tag Keywords </strong><span class="pull-right">{{$record->meta_tag_keywords}}</span></a></li>
                <li><a href="#"><strong>Show in Menu?</strong><span class="pull-right">{{ ucfirst($record->show_in_menu) }}</span></a></li>
                <li><a href="#"><strong>Parent Menu </strong><span class="pull-right">{{$record->parent_id}}</span></a></li>
                <li><a href="#"><strong>Status </strong><span class="pull-right">{{$record->status}}</span></a></li>
                <li><a href="#"><strong>Image </strong><span class="pull-right">{{$record->image}}</span></a></li>
                <li><a href="#"><strong>Sort Order </strong><span class="pull-right">{{$record->sort_order}}</span></a></li>
                <li><a href="#"><strong>Created At </strong><span class="pull-right">{{$record->created_at}}</span></a></li>
                <li><a href="#"><strong>Updated At</strong><span class="pull-right">{{$record->updated_at}}</span></a></li>
                <li><a href="#"><strong>Last updated by</strong><span class="pull-right">{{$record->record_updated_by}}</span></a></li>
                <li><a href="#"><strong>Updated at </strong><span class="pull-right">{{$record->updated_at}}</span></a></li>  
              </ul>
            
              </div>
        </div>
     
    </div>
</div>

@endsection
 
 @section('footer_scripts')
  
 @stop
 