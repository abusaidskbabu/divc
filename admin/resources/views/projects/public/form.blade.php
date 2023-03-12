

		 {!! Form::open(array('url'=>'projects', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Projects</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Founder" class=" control-label col-md-4 text-left"> Founder </label>
										<div class="col-md-6">
										  <input  type='text' name='founder' id='founder' value='{{ $row['founder'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Logo" class=" control-label col-md-4 text-left"> Logo </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="logo" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="logo-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["logo"],"/uploads/images") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Short Description" class=" control-label col-md-4 text-left"> Short Description </label>
										<div class="col-md-6">
										  <textarea name='short_description' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['short_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
										<div class="col-md-6">
										  <textarea name='description' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Thumbnail" class=" control-label col-md-4 text-left"> Thumbnail </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="thumbnail" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="thumbnail-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["thumbnail"],"/uploads/images") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Image Gallery" class=" control-label col-md-4 text-left"> Image Gallery </label>
										<div class="col-md-6">
										  
					<a href="javascript:void(0)" class="btn btn-xs btn-primary pull-right" onclick="addMoreFiles('image_gallery')"><i class="fa fa-plus"></i></a>
					<div class="image_galleryUpl multipleUpl">	
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="image_gallery[]" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>		
					</div>
					<ul class="uploadedLists " >
					<?php $cr= 0; 
					$row['image_gallery'] = explode(",",$row['image_gallery']);
					?>
					@foreach($row['image_gallery'] as $files)
						@if(file_exists('./uploads/images'.$files) && $files !='')
						<li id="cr-<?php echo $cr;?>" class="">							
							<a href="{{ url('/uploads/images/'.$files) }}" target="_blank" >
							{!! SiteHelpers::showUploadedFile( $files ,"/uploads/images/",100) !!}
							</a> 
							<span class="pull-right removeMultiFiles" rel="cr-<?php echo $cr;?>" url="/uploads/images{{$files}}">
							<i class="fa fa-trash-o  btn btn-xs btn-danger"></i></span>
							<input type="hidden" name="currimage_gallery[]" value="{{ $files }}"/>
							<?php ++$cr;?>
						</li>
						@endif
					
					@endforeach
					</ul>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video Link" class=" control-label col-md-4 text-left"> Video Link </label>
										<div class="col-md-6">
										  <input  type='text' name='video_link' id='video_link' value='{{ $row['video_link'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('aditional_information', $row['aditional_information']) !!}					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#status").jCombo("{!! url('projects/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
