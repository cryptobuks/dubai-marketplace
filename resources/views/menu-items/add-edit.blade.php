@extends($layout)
@section('header_scripts')
<link rel="stylesheet" href="{{ASSETS}}plugins/datepicker/datepicker3.css">
@stop
@section('content')
@if ($record)
<?php 
$menu_id = $record->menu_id;
$menu_slug = $record->menu_slug;
$menu_item_slug = $menu_item_slug;
 ?>
@endif
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-bar"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{PREFIX}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
               <li class="breadcrumb-item active" aria-current="page"><a  href="{{URL_MENU_ITEMS.$menu_slug}}">{{ getPhrase('menu_list')}}</a></li>          
              <li class="breadcrumb-item active" aria-current="page">{{isset($title) ? $title : ''}}</li>
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
      
              <?php $button_name = 'Create'; ?>
            @if ($record)
            <?php $button_name = 'Update'; ?>
            {{ Form::model($record, 
            array('url' => URL_MENU_ITEMS_EDIT.$record->slug, 
            'method'=>'patch','name'=>'formName ', 'files'=>'true' )) }}
            @else
            {!! Form::open(array('url' => URL_MENU_ITEMS_ADD . '/' . $menu_slug, 'method' => 'POST', 'name'=>'formName ', 'files'=>'true')) !!}
            @endif

            @include('menu-items.form_elements', array('button_name'=> $button_name, 'record' => $record, 'menu_id' => $menu_id, 'menu_slug' => $menu_slug))

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_scripts')	
	@include('common.validations')
	@include('common.editor')
@endsection