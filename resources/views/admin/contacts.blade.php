
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller" align="center">


      @include('admin.sidebar')

        @include('admin.navbar')

        {{-- @include('admin.body') --}}
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Message</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->massage}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                </tr>
              @endforeach --}}

            </tbody>
          </table>
    </div>
    @include('admin.script')
  </body>
</html>
