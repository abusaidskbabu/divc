@extends('layouts.login')
<style>
    .login-box {background: #fff;border-radius: 8px;}
    body {background: #0000009e !important;}
</style>
@section('content')
	
		<div class="ajaxLoading"></div>
	    
		<div class="form-signin">
			
			<p class="message alert alert-danger " style="display:none;"></p>	
	 
		    	@if(Session::has('status'))
		    		@if(session('status') =='success')
		    			<p class="alert alert-success">
							{!! Session::get('message') !!}
						</p>
					@else
						<p class="alert alert-danger">
							{!! Session::get('message') !!}
						</p>
					@endif		
				@endif

			<ul class="parsley-error-list">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>		
	

		
		<div   id="tab-sign-in">




	 		{!! Form::open(array('url'=>'user/signin', 'class'=>'','id'=>'LoginAjax' , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	 		<label for="inputEmail" class="sr-only">Email address</label>
	      	<input type="email" id="inputEmail" class="form-control"  name="email"  placeholder="{{ __('core.email') }}" required autofocus>
	      	<label for="inputPassword" class="sr-only">Password</label>
	      	<input type="password" id="inputPassword"  name="password" class="form-control" placeholder="{{ __('core.password') }}" required>
	      	<div class="checkbox pt-3 mb-3">
		        <label>
		          <input type="checkbox" name="remember" value="1"  style="display: inline-block;" /> Remember me
		        </label>
		      </div>


			@if(config('sximo.cnf_recaptcha') =='true') 
			<div class="form-group has-feedback  animated fadeInLeft delayp1">
				<label class="text-left"> Are u human ? </label>	
				<div class="g-recaptcha" data-sitekey="6Le2bjQUAAAAABascn2t0WsRjZbmL6EnxFJUU1H_"></div>
				
				<div class="clr"></div>
			</div>	
		 	@endif	

		 	<button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button> 	





			<div class=" pt-2 pb-2 " >					       
					<p class="text-center ">						
						<a href="javascript:void(0)" class="forgot"> @lang('core.forgotpassword') ? </a>
					</p>					
			</div>	
			
		   </form>			
		</div>
		
		

		<div class=" m-t" id="tab-forgot" style="display: none">	

			
			{!! Form::open(array('url'=>'user/request', 'class'=>'form-vertical', 'parsley-validate'=>'','novalidate'=>' ')) !!}
			   <div class="form-group has-feedback">
			   <div class="">
					<label>{{ Lang::get('core.enteremailforgot') }}</label>
					<input type="text" name="credit_email" placeholder="{{ Lang::get('core.email') }}" class="form-control" required/>
				</div> 	
				</div>
				<div class="form-group has-feedback">    
					<a href="javascript:;" class="forgot btn btn-warning"> Cancel </a>     
			      <button type="submit" class="btn btn-dark "> {{ Lang::get('core.sb_submit') }} </button>        
			  </div>
			  
			  <div class="clr"></div>

			  
			</form>		
		</div>
		
	</div>
	
 



<script type="text/javascript">
	$(document).ready(function(){

		$('.forgot').on('click',function(){
			$('#tab-forgot').toggle();
			$('#tab-sign-in').toggle();
		})
		var form = $('#LoginAjax'); 
		form.parsley();
		form.submit(function(){
			
			if(form.parsley().isValid()){			
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

		toggleFullscreen();

	});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		window.location.href = data.url;	
		$('.ajaxLoading').hide();
	} else {
		$('.message').html(data.message)	
		$('.ajaxLoading').hide();
		$('.message').show(data.message)	
		return false;
	}	
}	

function toggleFullscreen(elem) {
  elem = elem || document.documentElement;
  if (!document.fullscreenElement && !document.mozFullScreenElement &&
    !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}
</script>

@stop