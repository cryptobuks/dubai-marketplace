@extends($layout)
@section('header_scripts')
<link rel="stylesheet" href="{{ASSETS}}plugins/datepicker/datepicker3.css">
@stop
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-bar"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{PREFIX}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
               <li class="breadcrumb-item active" aria-current="page"><a  href="{{URL_MENU}}">{{ getPhrase('menu_list')}}</a></li>          
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
            array('url' => URL_MENU_EDIT.$record->slug, 
            'method'=>'patch','name'=>'formName ', 'files'=>'true' )) }}
            @else
            {!! Form::open(array('url' => URL_MENU_ADD, 'method' => 'POST', 'name'=>'formName ', 'files'=>'true')) !!}
            @endif

            @include('menu.form_elements', array('button_name'=> $button_name, 'record' => $record ))

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_scripts')	
	@include('common.validations')
@endsection
 