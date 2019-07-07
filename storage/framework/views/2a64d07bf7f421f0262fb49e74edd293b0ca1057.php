<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role_id == VENDOR_ROLE_ID): ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?></h4>
         
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4><?php echo e(getPhrase('my_dashboard')); ?></h4>
                </div>

                <?php echo $__env->make('productvendor.menu', array('sub_active' => $sub_active, 'tab' => 'products'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  
              
            </div>

                
            <div class="mt-5">
            <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

          <?php $button_name = 'create'; ?>
          <?php if($record): ?>
          <?php $button_name = 'update'; ?>
          <?php echo e(Form::model($record, 
          array('url' => URL_PRODUCTS_EDIT.$record->slug, 
          'method'=>'patch','name'=>'formName', 'files'=>'true', 'novalidate' => '' ))); ?>

          <?php else: ?>
          <?php echo Form::open(array('url' => URL_PRODUCTS_ADD, 'method' => 'POST', 'name'=>'formName', 'files'=>'true', 'novalidate' => '','class' =>'clearfix dash-bg')); ?>

          <?php endif; ?>

          <?php echo $__env->make('products.form_elements', array('button_name'=> $button_name, 'record' => $record, 'categories' => $categories ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
  
    <div id="myModalFile" class="modal fade" role="dialog">
              <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;"><?php echo e(getPhrase('edit_product')); ?></h4>
                  </div>
                
                <?php echo Form::open(array('url'=> URL_DELETE_PRODUCT_FILE,'method'=>'POST','name'=>'productfile')); ?> 
                
                  <div class="modal-body">
                  <span id="message"></span>
                    
                      <h4 style="color:#44a1ef;text-align: center;"><?php echo e(getPhrase('are_you_sure_to_make_clear_file')); ?></h4 >

                    <input type="hidden" name="product_file" id="qfile" >
                    <input type="hidden" name="product_id" id="qid" >

                  </div>
                
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary" >Yes</button>
                  </div>
                
                  <?php echo Form::close(); ?>

                </div>

              </div>
                 
            </div>

</div>
<?php else: ?>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title"><i class="fa fa-shopping-bag"></i> <?php echo e($title); ?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(PREFIX); ?>"><i class="fa fa-home"></i>  <?php echo e(getPhrase('home')); ?></a></li>
             <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(URL_PRODUCTS_DASHBOARD); ?>"><?php echo e(getPhrase('products_dashboard')); ?></a></li>
             <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(URL_PRODUCTS); ?>"> <?php echo e(getPhrase('products_list')); ?></a></li>
             <li class="breadcrumb-item active" aria-current="page"><?php echo e(isset($title) ? $title : ''); ?></li>
        </ol>
    </div>
 
    <div class="card p-5">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10">
                     <h4><?php echo e($title); ?></h4>
                </div>
              
                 
            </div>
            <div class="mt-5">
                
            <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
            <!-- /.box-header -->
      
            <?php $button_name = 'Create'; ?>
            <?php if($record): ?>
            <?php $button_name = 'Update'; ?>
            <?php echo e(Form::model($record, 
            array('url' => URL_PRODUCTS_EDIT.$record->slug, 
            'method'=>'patch','name'=>'formName', 'files'=>'true', 'novalidate' => '' ))); ?>

            <?php else: ?>
            <?php echo Form::open(array('url' => URL_PRODUCTS_ADD, 'method' => 'POST', 'name'=>'formName', 'files'=>'true', 'novalidate' => '')); ?>

            <?php endif; ?>

            <?php echo $__env->make('products.form_elements', array('button_name'=> $button_name, 'record' => $record, 'categories' => $categories ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    <div id="myModalFile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center;"><?php echo e(getPhrase('edit_product')); ?></h4>
            </div>
          
          <?php echo Form::open(array('url'=> URL_DELETE_PRODUCT_FILE,'method'=>'POST','name'=>'productfile')); ?> 
          
            <div class="modal-body">
            <span id="message"></span>
              
                <h4 style="color:#44a1ef;text-align: center;"><?php echo e(getPhrase('are_you_sure_to_make_clear_file')); ?></h4 >

              <input type="hidden" name="product_file" id="qfile" >
              <input type="hidden" name="product_id" id="qid" >

            </div>
          
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-primary" >Yes</button>
            </div>
          
            <?php echo Form::close(); ?>

          </div>

        </div>
    </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>	
	<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<script src="<?php echo e(JS); ?>bootstrap-toggle.min.js"></script>
	<script src="<?php echo e(JS); ?>jquery-ui.js"></script>
	<script type="text/javascript">
		var edd_vars;
	</script>
	<script src="<?php echo e(JS); ?>custom.js"></script>
	<?php echo $__env->make('common.select2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
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
	
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>