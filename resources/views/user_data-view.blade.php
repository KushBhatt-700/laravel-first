<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body style="color: #ffffff; background-color: #000000">
        <div id="successMsg"></div>
        {{-- <div id="userFormAlert" class="alert alert-success alert-dismissible fade" role="alert" style="position: fixed; top: 0; right: 0; z-index: 10; width: 25%;">
            <strong>Success: </strong> <span id="userFormStatus">User deleted successfully.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        @include('layouts.header_menu')
        <div style="height: 200px; background-size: 100% 210px; background-repeat: no-repeat; background-image: url(/assets/images/welcome-hero/Web_Background_licensing-1.jpg);" class="block">
            <div class="d-flex justify-content-center pt-5 w-100">
                <form action="" id="formSubmit" class="col-md-4" style="width: 1000px">
                    <input type="search" name="search" style="height: 60px; border-radius: 15px;" class="form-control" id="searchInput" placeholder="Search here" aria-label="Search">
                </form>
            </div>
            {{-- <img src="/assets/images/welcome-hero/Web_Background_licensing.jpg" alt="..." style="position: static; width: 100%; height: 337px; object-fit: cover; object-position: 0% 0;"> --}}
        </div>
        {{-- <div> --}}
            <div class="container-xxl mb-5 overflow-visible">
                <div id="pageTitle" class="mb-5" style="border-bottom: 1px solid #c40b12;">
                    <h2 class="d-flex justify-content-center mb-4">Welcome To User Ajax Form</h2>
                </div>
                <table class="table font-monospace text-light" id="user-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>  
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Age</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        {{-- @foreach($user_data as $key => $items)
                            <tr>
                                <td>{{ $items->user_id }}</td>
                                <td>{{ $items->first_name }}</td>
                                <td>{{ $items->last_name }}</td>
                                <td>{{ $items->email }}</td>
                                <td>{{ $items->gender }}</td>
                                <td>{{ $items->age }}</td>
                                <td> 
                                    <a href="#"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        {{-- </div> --}}
        <!--blog start -->
        <section id="blog" class="blog"></section><!--/.blog-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    {!! Form::open([
                        'url' => '/user-mail',
                        'method' => 'post',
                    ]) !!}
                        @csrf
                        <!-- Hidden Input for User ID -->
                        <input type="hidden" name="user_id" id="user-id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="subject-name" class="col-form-label text-dark">Subject:</label>
                                <input name="modelMailSubject" type="text" class="form-control" id="subject-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label text-dark">Message:</label>
                                <textarea name="modelMailMessage" class="form-control" id="message-text"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--blog end -->
        {{-- <div class="row mx-auto">
            {{ $user_data->links('layouts.pagination-links') }}
        </div> --}}
        <script src="/assets/js/ajax_jquery.js"></script>
        <section id="service">
            @include('layouts.footer')
        </section>
    </body>
</html>