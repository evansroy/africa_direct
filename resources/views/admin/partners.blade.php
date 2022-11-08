
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">


      @include('admin.sidebar')

        @include('admin.navbar')

        {{-- @include('admin.body') --}}

        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button class="close" type="button" data-dismiss="alert">
                            X
                        </button>
                        {{session()->get('message')}}
                    </div>
                 @endif

                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Add Partner</h4>
                            {{-- <p class="card-description"> Basic form layout </p> --}}
                            <form class="forms-sample" action="{{route('addPartner')}}" method="post" enctype="multipart/form-data">
                                @csrf
                              <div class="form-group">
                                <label for="exampleInputUsername1">Partner Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Full Name" name="name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact Number" name="contacts">
                              </div>
                              <div class="form-group">
                                <label for="description">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                              </div>
                              <div class="form-group">
                                <label for="file">Logo Image</label>
                                <input type="file" class="form-control" placeholder="Profile Image" name="file">
                              </div>
                              <button type="submit" class="btn btn-primary me-2">Submit</button>

                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.script')
  </body>
</html>
