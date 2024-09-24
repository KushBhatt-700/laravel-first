<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body>
        <div id="userFormAlert" class="alert alert-success alert-dismissible fade" role="alert" style="position: fixed; top: 0; right: 0; z-index: 10; width: 25%;">
            <strong>Success: </strong> <span id="userFormStatus">User deleted successfully.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @include('layouts.header_menu');
        <div class="container mb-5 mt-5">
            <div id="pageTitle">
                <h2 class="d-flex justify-content-center">Welcome To Ajax Form</h2>
            </div>
            <div class="mt-4 mb-4">
                <div class="d-flex align-items-center">
                    <form action="" id="formSubmit" class="d-flex col-md-4">
                        <input type="search" name="search" class="form-control me-2" id="searchInput" placeholder="Search" aria-label="Search" value="#">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <div class="mx-2">
                            <a href="#">
                                <button id="resetBtn" class="btn btn-outline-danger" type="button">Reset</button>
                            </a>
                        </div>
                    </form>
                    <div class="resultOfInput"></div>
                </div>
            </div>
            <table class="table table-striped" id="user-table">
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
            <!--blog start -->
            <section id="blog" class="blog"></section><!--/.blog-->
            <!--blog end -->
            <section id="service" class="service">
                @include('layouts.footer');
            </section>
            {{-- <div class="row mx-auto">
                {{ $user_data->links('layouts.pagination-links') }}
            </div> --}}
            <script src="/assets/js/ajax_jquery.js"></script>
        </div>
    </body>
</html>