
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">


      @include('admin.sidebar')

        @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recieved Quote</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>Contact</th>
                                                <th>Freight Type</th>
                                                <th>City of Departure</th>
                                                <th>Incoterm</th>
                                                <th>Weight</th>
                                                <th>Height</th>
                                                <th>Width</th>
                                                <th>Length</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $quotes)
                                                <tr>
                                                    <td>{{$quotes->name}}</td>
                                                    <td>{{$quotes->email}}</td>
                                                    <td>{{$quotes->contact}}</td>
                                                    <td>{{$quotes->freightype}}</td>
                                                    <td>{{$quotes->cityofdeparture}}</td>
                                                    <td>{{$quotes->incoterm}}</td>
                                                    <td>{{$quotes->weight}}</td>
                                                    <td>{{$quotes->height}}</td>
                                                    <td>{{$quotes->width}}</td>
                                                    <td>{{$quotes->length}}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="">View</a>
                                                        <a class="btn btn-success" href="">Reply</a>
                                                        <a class="btn btn-danger" href="{{}}" onclick="return confirm('Are you sure you want to Delete This Record?')">Delete</a>

                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
