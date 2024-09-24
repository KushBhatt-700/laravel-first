<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body>
		@include('layouts.header_menu');
		<!--welcome-hero end -->
		<section id="service" class="service" style="padding: 0px 0 87px;">
            <div class="container">
                <div class="service-content">
                    <div class="row">
                        <div class="col-md-12">
								{!! Form::open([
									'url' => $url,
									'method' => 'post',
									'class' => 'row g-3',
								]) !!}
									@csrf
									<div class="col-12">
										<p class="h1 text-primary text-center">{{ $title }}</p>
									</div>
									<div class="col-12">
										<label for="inputName" class="form-label">Name</label>
										{!! Form::text
											(
												'name',
												isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->name : old('name'),
												[
													'class' => 'form-control',
													'id' => 'inputName',
													'placeholder' => 'Name',
												]
											)
										!!}
										<span class="text-danger">
											@error('name')
												{{$message}}
											@enderror
										</span>
									</div>
									<div class="form-group">
										<label for="inputEmail4" class="form-label">Email</label>
										<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->email : old('email') }}">
										<span class="text-danger">
											@error('email')
												{{$message}}
											@enderror
										</span>
									</div>
									<!-- <div class="form-group">
										<label for="formFile" class="form-label">Default file input example</label>
										{!! Form::file('file',[
											'id' => 'formFile',
											'class' => 'form-control',	
										]) !!}
									</div> -->
									@if(!isset($fetch_enquire_form_data))
										<div class="col-md-6">
											<label for="inputPassword4" class="form-label">Password</label>
											<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
										</div>
										<div class="col-md-6">
											<label for="inputPassword4" class="form-label">Confirm Password</label>
											<input type="password" name="confirmation_pass" class="form-control" id="inputPassword4" placeholder="Confirm Password">
											<span class="text-danger">
												@error('confirmation_pass')
													{{$message}}
												@enderror
											</span>
										</div>
									@else
										<div class="col-md-12">
											<label for="inputPassword4" class="form-label">Password</label>
											<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
											<span class="text-danger">
												@error('password')
													{{$message}}
												@enderror
											</span>
										</div>
									@endif
									<div class="form-group">
										<label for="inputAddress" class="form-label">Address</label>
										<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->address : old('address') }}"/>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="form-label">Address 2</label>
										<input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->address2 : old('address2') }}"/>
									</div>
									<div class="col-md-6">
										<label for="inputCity" class="form-label">City</label>
										<input type="text" name="city" class="form-control" id="inputCity" value="{{isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->city : old('city') }}"/>
									</div>
									<div class="col-md-4">
										<label for="inputState" class="form-label">State</label>
										{!! Form::select(
											'state',
											[
												'Gujarat' => 'Gujarat',
												'Mumbai' => 'Mumbai',
												'Pune' => 'Pune',
												'Kerala' => 'Kerala',
												'Panjab' => 'Panjab',
											],
											isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->state : old('state'),
											[
												'id' => 'inputState',
												'class' => 'form-control',
											]
										) !!}
									</div>
									<div class="col-md-2">
										<label for="inputZip" class="form-label">Zip</label>
										<input type="text" name="zip" class="form-control" id="inputZip" value="{{ isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->zip : old('zip') }}"/>
									</div>
									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" name="privacy" type="checkbox" id="gridCheck" {{ isset($fetch_enquire_form_data) ? $fetch_enquire_form_data->privacy : old('privacy') }}/>
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
											<div class='text-danger'>
												@error('privacy')
													{{$message}}
												@enderror
											</div>
										</div>
									</div>
									<div>
										<button id="formSubmitBtn" type="submit" class="btn btn-primary">Sign in</button>
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section><!--/.welcome-hero-->


		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->
		<section id="service" class="service">
        	@include('layouts.footer');
		</section>
		<script>
			$('#formSubmitBtn').mouseenter(function(){
				var $nameInput = $('#inputName').val();
				var $inputEmail4 = $('#inputEmail4').val();
				var $inputPassword4 = $('#inputPassword4').val();
				if($nameInput == '' || $inputEmail4 == '' || $inputPassword4 == ''){
					var $classCheck = $('#btnWrapId').hasClass('btnWrapClass');
					if($classCheck == true){
						$('#formSubmitBtn').unwrap();
					}else{
						$('#formSubmitBtn').wrap("<div class='btnWrapClass' id='btnWrapId' style='text-align: right'></div>");
					}
				}
			});
		</script>
    </body>
</html>