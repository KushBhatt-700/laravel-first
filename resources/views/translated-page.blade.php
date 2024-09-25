<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body style="color: #ffffff; background-color: #000000">
        @include('layouts.header_menu')
		<div class="container mb-5 mt-5 border-primary">
			<div class="card border-primary mb-3 mx-auto" style="max-width: 40%;">
				<div class="card-header">Header</div>
				<div class="card-body text-primary">
				  <h4 class="card-title">@lang('lang.welcome')</h4>
				  <p class="card-text">@lang('lang.subject')</p>
				</div>
			</div>
		</div>
		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->
		<section id="service" class="service">
        	@include('layouts.footer')
		</section>
    </body>
</html>