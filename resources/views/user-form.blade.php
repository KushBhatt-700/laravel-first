<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body style="color: #ffffff; background-color: #000000">
        {{-- <div id="userFormAlert" class="alert alert-success alert-dismissible fade" role="alert" style="position: fixed; top: 0; right: 0; z-index: 10; width: 25%;">
            <strong>Holy guacamole!</strong> <span id="userFormStatus">You should check in on some of those fields below.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        @include('layouts.header_menu')
        <section id="service" class="service" style="padding: 0px 0 87px;">
            <div class="container" style="max-width: 900px;">
                <div class="service-content">
                    <div class="row">
                        <div class="col-md-12">
                                {!! Form::open([
                                    'id' => 'userForm',
                                    'class' => 'row g-3',
                                ]) !!}
                                    @csrf
                                    <div class="col-12">
                                        <p class="h1 text-lite text-center mt-4">User Detail Form</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputFirstName" class="form-label">First Name</label>
                                        {!! Form::text('first_name', null, ['class' => 'form-control p-2', 'id' => 'inputFirstName', 'placeholder' => 'First Name']) !!}
                                        {{-- <span class="text-danger">
                                            @error('first_name')
                                                {{$message}}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName" class="form-label">Last Name</label>
                                        {!! Form::text('last_name', null, ['class' => 'form-control p-2', 'id' => 'inputLastName', 'placeholder' => 'Last Name']) !!}
                                        {{-- <span class="text-danger">
                                            @error('last_name')
                                                {{$message}}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control p-2" id="inputEmail4" placeholder="Email" value="{{ old('email') }}">
                                        {{-- <span class="text-danger">
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputPassword4" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control p-2" id="inputPassword4" placeholder="Password">
                                        {{-- <span class="text-danger">
                                            @error('password')
                                                {{$message}}
                                            @enderror
                                        </span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputGender" class="form-label">Gender</label>
                                        {!! Form::select(
                                            'gender',
                                            [
                                                'M' => 'Male',
                                                'F' => 'Female',
                                                'O' => 'Other'
                                        ],
                                        null,
                                        [
                                            'class' => 'form-control p-2',
                                            'id' => 'inputGender'
                                        ]
                                        ) !!}
                                        {{-- <input type="text" name="gender" class="form-control p-2" id="inputGender"/> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAge" class="form-label">Age</label>
                                        <input type="text" name="age" class="form-control p-2" id="inputAge"/>
                                    </div>
                                    <div>
                                        <button id="formSubmitBtn" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                {{-- </form> --}}
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
        	@include('layouts.footer')
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
        <script src="/assets/js/ajax_jquery.js"></script>
    </body>
</html>