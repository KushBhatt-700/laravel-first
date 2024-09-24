<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body>
			@include('layouts.header_menu')
            <div class="container mb-5 mt-5">
                {{-- @if(session()->get('status')) --}}
                    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success: </strong>{{ session()->get('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                <a href="#" class="btn btn-primary add-enquire">Add Enquire</a></br></br>
                <div class="d-flex" id="boxGride">
                    <div class="justify-item-center mx-4 mb-4 mt-2 p-2 rounded shadow-lg" id="box-1">
                        <p class="firstClass" id="firstId">First. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="secondClass" id="secondId">Second. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="thirdClass" id="thirdId">Third. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="forthClass" id="forthId">Forth. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="box-2 mx-1 mb-4 mt-2 p-2 rounded shadow-lg" id="box-2">
                        <h2 id="title">Hello, welcome to this site</h2>
                        <p id="para1">First, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p id="para2">Second, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="appendId" class="btn btn-primary">Append</a>
                        <a href="#" id="prependId" class="btn btn-primary">prepend</a>
                    </div><br/>
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="afterId" class="btn btn-primary">After</a>
                        <a href="#" id="beforeId" class="btn btn-primary">Before</a>
                    </div><br/>
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="removeId" class="btn btn-primary">Remove</a>
                        <a href="#" id="emptyId" class="btn btn-primary">Empty</a>
                    </div><br/>
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="clone" class="btn btn-primary">Clone</a>
                    </div><br/>
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="replace" class="btn btn-primary">Replace</a>
                    </div><br/>
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="wrap" class="btn btn-primary">Wrap</a>
                        <a href="#" id="unWrap" class="btn btn-primary">UnWrap</a>
                    </div>
                    <div class="mx-1 rounded shadow-lg p-2">
                        <a href="#" id="hasClass" class="btn btn-primary">HasClass</a>
                    </div>
                </div>
                {{-- <div id="animateWrap"> --}}
                    {{-- <div class="leftAnimation" id="btnWraper"> --}}
                        <a href="#" id="animate" class="btn btn-primary">Animate</a>
                    {{-- </div> --}}
                {{-- </div> --}}
                <div class="mt-4 mb-4">
                    <div class="d-flex align-items-center">
                        <form action="" id="formSubmit" class="d-flex col-md-4">
                            <input type="search" name="search" class="form-control me-2" id="searchInput" placeholder="Search" aria-label="Search" value="#">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            <div class="mx-2">
                                <a href="{{ url('/user-data/view') }}">
                                    <button class="btn btn-outline-danger" type="button">Reset</button>
                                </a>
                            </div>
                        </form>
                        <div class="resultOfInput"></div>
                        {{-- <div class="ms-auto">
                            <a href="{{ route('enquire.add') }}" class="btn btn-primary">Add Enquire</a>
                        </div> --}}
                    </div>
                </div>
            </div>
		<!--blog start -->
		<section id="blog" class="blog"></section><!--/.blog-->
		<!--blog end -->
		<section id="service" class="service">
        	@include('layouts.footer')
		</section>
        <script src="/assets/js/myJQuery.js"></script>
    </body>
</html>