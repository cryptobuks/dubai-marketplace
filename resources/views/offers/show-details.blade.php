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
        <h4 class="page-title"><i class="fa fa-tags"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
		        <li  class="breadcrumb-item"><a  href="{{URL_OFFERS}}">{{ getPhrase('offers')}}</a></li>  		  
            <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4>{{$title}}</h4>
                </div>
                <div class="col-md-2">
                <a href="{{URL_OFFERS}}" class="btn btn-primary pull-right">{{ getPhrase('List') }}</a>
                </div>
                 
            </div>
            <div class="mt-5">

            <ul class=" tour">
              <li><a href="#"><strong>{{ getPhrase('Title') }}</strong> <span class="pull-right">{{$record->title}}</span></a></li>
				
              <li><a href="#"><strong>{{ getPhrase('Slug') }}</strong> <span class="pull-right">{{$record->slug}}</span></a></li>			
                      
                      <li><a href="#"><strong>{!! getPhrase('Description') !!} </strong><span class="pull-right">{{$record->description}}</span></a></li>
              
              <li><a href="#"><strong>{{ getPhrase('Image') }}</strong><span class="pull-right">{{ $record->image }}</span></a></li>
              
              <?php
              $product = App\Product::where('id', '=',$record->product_id )->first();
              ?>
              <li><a href="#"><strong>{{ getPhrase('Product') }}</strong><span class="pull-right">{{ $product->name }}</span></a></li>

              <li><a href="#"><strong>{{ getPhrase('use_product_title') }}</strong><span class="pull-right">{{ ucfirst( $record->use_product_title ) }}</span></a></li>

              <li><a href="#"><strong>{{ getPhrase('use_product_description') }}</strong><span class="pull-right">{{ ucfirst( $record->use_product_description ) }}</span></a></li>
              
              <li><a href="#"><strong>{{ getPhrase('use_product_image') }}</strong><span class="pull-right">{{ ucfirst( $record->use_product_image ) }}</span></a></li>
              
              <li><a href="#"><strong>{{ getPhrase('start_date_time') }}</strong><span class="pull-right">{{ $record->start_date_time }}</span></a></li>
              <li><a href="#"><strong>{{ getPhrase('end_date_time') }}</strong><span class="pull-right">{{ $record->end_date_time }}</span></a></li>				
              <li><a href="#"><strong>Status</strong><span class="pull-right">{{ ucfirst( $record->status ) }}</span></a></li>              
              <li><a href="#"><strong>Created At </strong><span class="pull-right">{{$record->created_at}}</span></a></li>				
              <li><a href="#"><strong>Updated At</strong><span class="pull-right">{{$record->updated_at}}</span></a></li>				
            
              </ul>
            
              </div>
        </div>
     
    </div>
</div>

@endsection
 
 @section('footer_scripts')
  
 @stop