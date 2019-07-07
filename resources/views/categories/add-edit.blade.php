@extends($layout)
@section('header_scripts')
<link rel="stylesheet" href="{{ASSETS}}plugins/datepicker/datepicker3.css">
@stop
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-random"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_CATEGORIES_DASHBOARD}}">{{ getPhrase('categories_dashboard')}}</a> </li>
            <li class="breadcrumb-item"><a  href="{{URL_CATEGORIES}}">{{ getPhrase('categories_list')}}</a></li>    
            <li class="active breadcrumb-item" aria-current="page">{{isset($title) ? $title : ''}}</li>
         </ol>
    </div>
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                    <h4>{{$title}}</h4>
                </div>
                
            </div>
            <div class="mt-5">
                @include('errors.errors') 
                <!-- /.box-header -->
        
                <?php $button_name = getPhrase('create'); ?>
                @if ($record)
                <?php $button_name = getPhrase('update'); ?>
                {{ Form::model($record, 
                array('url' => URL_CATEGORIES_EDIT.$record->slug, 
                'method'=>'patch','name'=>'formUsers ', 'files'=>'true' )) }}
                @else
                {!! Form::open(array('url' => URL_CATEGORIES_ADD, 'method' => 'POST', 'name'=>'formUsers ', 'files'=>'true')) !!}
                @endif

                @include('categories.form_elements', array('button_name'=> $button_name, 'record' => $record, 'parent_categories'=>$parent_categories ))

                {!! Form::close() !!}
                
            </div>
        </div>
     
    </div>
</div>
@stop

@section('footer_scripts')
	@include('common.fontawesomeiconpicker')
@stop