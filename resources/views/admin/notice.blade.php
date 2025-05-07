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
                    <form action="{{url('add_notice')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" name="title" placeholder="Enter notice title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Text area</label>
                        <textarea name="massage" placeholder="Enter notice" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Notice Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-success">
                      </div>
                    </form>
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
