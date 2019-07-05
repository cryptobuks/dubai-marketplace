@extends($layout)

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-users"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_ADMIN_USERS_DASHBOARD}}">{{ getPhrase('users')}}</a> </li>
            @if($record)        
            <li class="breadcrumb-item"><a  href="{{URL_USERS.$role_name}}">{{ucfirst($role_name)}} {{ getPhrase('dashboard')}}</a></li> 
            @endif        
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

                <?php $button_name = 'Create'; ?>
                @if ($record)
                <?php $button_name = 'Update'; ?>
                {{ Form::model($record, 
                array('url' => URL_USERS_EDIT.$record->slug, 
                'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' )) }}
                @else
                {!! Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
                @endif

                @include('users.form_elements', array('button_name'=> $button_name, 'record' => $record, 'roles'=>$roles))

                {!! Form::close() !!}
                
            </div>
        </div>
     
    </div>
</div>
@stop
@section('footer_scripts')
@include('common.validations')
@stop   