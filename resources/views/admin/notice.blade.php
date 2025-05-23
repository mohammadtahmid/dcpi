<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong class="d-block">Notice Form</strong></div>
                            <div class="block-body">
                                <form action="{{url('update_notice',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" value="{{ old('title') }}" name="title" placeholder="Enter notice title" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Text area</label>
                                        <textarea name="massage" value="" placeholder="Enter notice" class="form-control">{{ old('massage') }}</textarea>
                                        @error('massage')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Notice Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <input type="submit" value="Submit" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>







                    <div class="col-lg-6">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Notice List</strong></div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Notice Title</th>
                                            <th>Message</th>
                                            <th>Image</th>
                                            <th class="d-flex justify-content-center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $data)
                                        <tr>
                                            <th scope="row">{{ $data->id}}</th>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->massage}}</td>
                                            <td><img src="{{ asset('storage/'.$data->image) }}" class="w-50" alt=""></td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{url('view_notice',$data->id)}}" class="btn btn-success">View</a>
                                                <a href="{{url('edit_notice',$data->id)}}" class="btn btn-info mx-2">Edit</a>
                                                <a href="{{url('delete_notice',$data->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                                </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div>
                    </div>
                </div>
                <!-- JavaScript files-->
                <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
                <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
                <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
                <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
                <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
                <script src="{{asset('admincss/js/charts-home.js')}}"></script>
                <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>
