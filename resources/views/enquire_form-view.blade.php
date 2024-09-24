<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
	<body>
			@include('layouts.header_menu')
            <div class="container mb-5 mt-5">
                @if(session()->get('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success: </strong>{{ session()->get('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="mt-4 mb-4">
                    <div class="d-flex align-items-center">
                        <form action="" class="d-flex col-md-4">
                            <input type="search" name="search" class="form-control me-2" placeholder="Search" aria-label="Search" value="{{ $search }}">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            <div class="mx-2">
                                <a href="{{ url('/enquire-form/view') }}">
                                    <button class="btn btn-outline-danger" type="button">Reset</button>
                                </a>
                            </div>
                        </form>
                        <div class="ms-auto">
                            <a href="{{ route('enquire.add') }}" class="btn btn-primary">Add Enquire</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <!-- <a href="{{route('enquire.add')}}"  style="margin: 0px 0px 0px 90%; padding: 1%;">
                        <button class="btn btn-primary"> Add Enquire </button>
                    </a> -->
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fetch_enquire_form_data as $key => $items)
                            <tr>
                                <td>{{ $items->form_id }}</td>
                                <td>{{ $items->name }}</td>
                                <td>{{ $items->email }}</td>
                                <td class="text-truncate" style="max-width: 100px;">{{ $items->address }}</td>
                                <td>{{ $items->city }}</td>
                                <td>{{ $items->state }}</td>
                                <td> 
                                    <a href="{{ route('enquireForm.delete', ['id' => $items->form_id]) }}"><button class="btn btn-danger">Delete</button></a>
                                    <a href="{{ route('enquireForm.edit', ['id' => $items->form_id]) }}"><button class="btn btn-primary">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row mx-auto">
                    {{ $fetch_enquire_form_data->links('layouts.pagination-links') }}
                    {{-- {{ $fetch_enquire_form_data->links('pagination::bootstrap-5') }} --}}
                    {{-- {{ $fetch_enquire_form_data->links('pagination::simple-tailwind') }} --}}
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