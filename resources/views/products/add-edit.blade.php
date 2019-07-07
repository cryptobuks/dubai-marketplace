@extends($layout)


@section('content')
@if(Auth::user()->role_id == VENDOR_ROLE_ID)
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-user"></i> {{ Auth::user()->name }}</h4>
         
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4>{{ getPhrase('my_dashboard') }}</h4>
                </div>

                @include('productvendor.menu', array('sub_active' => $sub_active, 'tab' => 'products'))
                  
              
            </div>

                
            <div class="mt-5">
            @include('errors.errors') 

          <?php $button_name = 'create'; ?>
          @if ($record)
          <?php $button_name = 'update'; ?>
          {{ Form::model($record, 
          array('url' => URL_PRODUCTS_EDIT.$record->slug, 
          'method'=>'patch','name'=>'formName', 'files'=>'true', 'novalidate' => '' )) }}
          @else
          {!! Form::open(array('url' => URL_PRODUCTS_ADD, 'method' => 'POST', 'name'=>'formName', 'files'=>'true', 'novalidate' => '','class' =>'clearfix dash-bg')) !!}
          @endif

          @include('products.form_elements', array('button_name'=> $button_name, 'record' => $record, 'categories' => $categories ))

          {!! Form::close() !!}
            </div>
        </div>
    </div>
  
    <div id="myModalFile" class="modal fade" role="dialog">
              <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">{{getPhrase('edit_product')}}</h4>
                  </div>
                
                {!!Form::open(array('url'=> URL_DELETE_PRODUCT_FILE,'method'=>'POST','name'=>'productfile'))!!} 
                
                  <div class="modal-body">
                  <span id="message"></span>
                    
                      <h4 style="color:#44a1ef;text-align: center;">{{getPhrase('are_you_sure_to_make_clear_file')}}</h4 >

                    <input type="hidden" name="product_file" id="qfile" >
                    <input type="hidden" name="product_id" id="qid" >

                  </div>
                
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary" >Yes</button>
                  </div>
                
                  {!!Form::close()!!}
                </div>

              </div>
                 
            </div>

</div>
@else
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-shopping-bag"></i> {{$title}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{PREFIX}}"><i class="fa fa-home"></i>  {{ getPhrase('home') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_PRODUCTS_DASHBOARD}}">{{ getPhrase('products_dashboard')}}</a></li>
             <li class="breadcrumb-item active" aria-current="page"><a href="{{URL_PRODUCTS}}"> {{ getPhrase('products_list')}}</a></li>
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
            array('url' => URL_PRODUCTS_EDIT.$record->slug, 
            'method'=>'patch','name'=>'formName', 'files'=>'true', 'novalidate' => '' )) }}
            @else
            {!! Form::open(array('url' => URL_PRODUCTS_ADD, 'method' => 'POST', 'name'=>'formName', 'files'=>'true', 'novalidate' => '')) !!}
            @endif

            @include('products.form_elements', array('button_name'=> $button_name, 'record' => $record, 'categories' => $categories ))

            {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div id="myModalFile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center;">{{getPhrase('edit_product')}}</h4>
            </div>
          
          {!!Form::open(array('url'=> URL_DELETE_PRODUCT_FILE,'method'=>'POST','name'=>'productfile'))!!} 
          
            <div class="modal-body">
            <span id="message"></span>
              
                <h4 style="color:#44a1ef;text-align: center;">{{getPhrase('are_you_sure_to_make_clear_file')}}</h4 >

              <input type="hidden" name="product_file" id="qfile" >
              <input type="hidden" name="product_id" id="qid" >

            </div>
          
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-primary" >Yes</button>
            </div>
          
            {!!Form::close()!!}
          </div>

        </div>
    </div>
</div>
@endif

@stop
@section('footer_scripts')	
	@include('common.validations')
	@include('common.editor')
	<script src="{{JS}}bootstrap-toggle.min.js"></script>
	<script src="{{JS}}jquery-ui.js"></script>
	<script type="text/javascript">
		var edd_vars;
	</script>
	<script src="{{JS}}custom.js"></script>
	@include('common.select2')
	
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			function toggle_price() {
				if( $('#price_type').val() == 'variable' ) {
					$('#variableprice_options_div').show();
					$('#price_display_type_div').show();
					$('#fixedprice_options_div').hide();
					$('.pricing').show();
				} else {
					$('#variableprice_options_div').hide();
					$('#price_display_type_div').hide();
					$('#fixedprice_options_div').show();
					$('.pricing').hide();
				}
			}
			$('#price_type').change(function(){
				toggle_price();
			});
			toggle_price();
			$('.upload_type').change(function(){
				var index = $(this).data('index');
				
				if( $(this).val() == 'file' ) {
					$('.digi_upload_file_button_index_'+index).attr('type', 'file');
				} else {
					$('.digi_upload_file_button_index_'+index).attr('type', 'text');
				}
			});
		});
	</script>
	<script>
		
          function deleteProductFile(file, product_id)
 		{    
 			
			var qf = file;
			var qi = product_id;
			
 			$('#qfile').val(qf);
 			$('#qid').val(qi);
 			$('#myModalFile').modal('show');
 		}
			
	</script>
	
@stop
 