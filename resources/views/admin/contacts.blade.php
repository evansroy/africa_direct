
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
                <div class="row ">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Recieved Contacts</h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th> Message</th>
                                  <th> Name </th>
                                  <th> Email </th>
                                  <th> Subject </th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $contact)
                                    <tr>
                                        <td> {{$contact->message}}</td>
                                        <td> {{$contact->name}} </td>
                                        <td>{{$contact->email}} </td>
                                        <td> {{$contact->subject}} </td>
                                        <td>
                                        <a class="btn btn-primary" href="">View</a>
                                        <a class="btn btn-success" href="">Reply</a>
                                        <a class="btn btn-danger" href="{{url('delete_contact',$contact->id)}}" onclick="return confirm('Are you sure you want to Delete This Doctor ?')">Delete</a>
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
