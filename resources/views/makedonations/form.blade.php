
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'makedonations/save/'.SiteHelpers::encryptID($row['id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'makedonationsFormAjax')) !!}
			<ul class="nav nav-tabs"><li class="active"><a href="#DonationDetails" data-toggle="tab">Donation Details</a></li>
				<li class=""><a href="#Settings" data-toggle="tab">Settings</a></li>
				</ul><div class="tab-content"><div class="tab-pane m-t active" id="DonationDetails"> 
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Username" class=" control-label col-md-4 text-left"> Username </label>
										<div class="col-md-6">
										  <select name='username' rows='5' id='username' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Bank" class=" control-label col-md-4 text-left"> Bank </label>
										<div class="col-md-6">
										  <select name='bank' rows='5' id='bank' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Holder" class=" control-label col-md-4 text-left"> Account Holder </label>
										<div class="col-md-6">
										  <select name='account_holder' rows='5' id='account_holder' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account No" class=" control-label col-md-4 text-left"> Account No </label>
										<div class="col-md-6">
										  <select name='account_no' rows='5' id='account_no' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Amount" class=" control-label col-md-4 text-left"> Amount <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('amount', $row['amount'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Reserve" class=" control-label col-md-4 text-left"> Reserve </label>
										<div class="col-md-6">
										  {!! Form::text('reserve', $row['reserve'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
			</div>
			
			<div class="tab-pane m-t " id="Settings"> 
									
									  <div class="form-group  " >
										<label for="Scheduled" class=" control-label col-md-4 text-left"> Scheduled </label>
										<div class="col-md-6">
										  
					<?php $scheduled = explode(',',$row['scheduled']);
					$scheduled_opt = array( '0' => 'No' ,  '1' => 'Yes' , ); ?>
					<select name='scheduled' rows='5'   class='select2 '  > 
						<?php 
						foreach($scheduled_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['scheduled'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Rescheduled" class=" control-label col-md-4 text-left"> Rescheduled </label>
										<div class="col-md-6">
										  
					<?php $rescheduled = explode(',',$row['rescheduled']);
					$rescheduled_opt = array( '0' => 'No' ,  '1' => 'Yes' , ); ?>
					<select name='rescheduled' rows='5'   class='select2 '  > 
						<?php 
						foreach($rescheduled_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['rescheduled'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Commission" class=" control-label col-md-4 text-left"> Commission </label>
										<div class="col-md-6">
										  
					<?php $commission = explode(',',$row['commission']);
					$commission_opt = array( '0' => 'No' ,  '1' => 'Yes' , ); ?>
					<select name='commission' rows='5'   class='select2 '  > 
						<?php 
						foreach($commission_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['commission'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Reserved" class=" control-label col-md-4 text-left"> Reserved </label>
										<div class="col-md-6">
										  
					<?php $reserved = explode(',',$row['reserved']);
					$reserved_opt = array( '0' => 'No' ,  '1' => 'Yes' , ); ?>
					<select name='reserved' rows='5'   class='select2 '  > 
						<?php 
						foreach($reserved_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['reserved'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
			</div>
			
												
								
						
			<div style="clear:both"></div>	
							
			<div class="form-group">
				<label class="col-sm-4 text-right">&nbsp;</label>
				<div class="col-sm-8">	
					<button type="submit" class="btn btn-primary btn-sm "><i class="icon-checkmark-circle2"></i>  {{ Lang::get('core.sb_save') }} </button>
					<button type="button" onclick="ajaxViewClose('#{{ $pageModule }}')" class="btn btn-success btn-sm"><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
				</div>			
			</div> 		 
			{!! Form::close() !!}


@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

	
</div>	
			 
<script type="text/javascript">
$(document).ready(function() { 
	
		$("#username").jCombo("{!! url('makedonations/comboselect?filter=tb_users:username:username') !!}",
		{  selected_value : '{{ $row["username"] }}' });
		
		$("#bank").jCombo("{!! url('makedonations/comboselect?filter=me_mybanks:bank_name:bank_name') !!}",
		{  selected_value : '{{ $row["bank"] }}' });
		
		$("#account_holder").jCombo("{!! url('makedonations/comboselect?filter=me_mybanks:account_holder:account_holder') !!}",
		{  selected_value : '{{ $row["account_holder"] }}' });
		
		$("#account_no").jCombo("{!! url('makedonations/comboselect?filter=me_mybanks:account_no:account_no') !!}",
		{  selected_value : '{{ $row["account_no"] }}' });
		 
	
	$('.editor').summernote();
	$('.previewImage').fancybox();	
	$('.tips').tooltip();	
	$(".select2").select2({ width:"98%"});	
	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
	$('.datetime').datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'}); 
	$('input[type="checkbox"],input[type="radio"]').iCheck({
		checkboxClass: 'icheckbox_square-red',
		radioClass: 'iradio_square-red',
	});			
		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("makedonations/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});
				
	var form = $('#makedonationsFormAjax'); 
	form.parsley();
	form.submit(function(){
		
		if(form.parsley('isValid') == true){			
			var options = { 
				dataType:      'json', 
				beforeSubmit :  showRequest,
				success:       showResponse  
			}  
			$(this).ajaxSubmit(options); 
			return false;
						
		} else {
			return false;
		}		
	
	});

});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		ajaxViewClose('#{{ $pageModule }}');
		ajaxFilter('#{{ $pageModule }}','{{ $pageUrl }}/data');
		notyMessage(data.message);	
		$('#sximo-modal').modal('hide');	
	} else {
		notyMessageError(data.message);	
		$('.ajaxLoading').hide();
		return false;
	}	
}			 

</script>		 