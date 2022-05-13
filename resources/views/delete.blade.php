<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>Create Contacts</title>
</head>
<body>
<div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5 d-flex flex-column align-items-center">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Delete Contact</h3>
            <form action="{{ route('destroy_contact', ['id' => $contact['id']]) }}" method="POST">
              @csrf
            <div class="row">
                <div class="col-md-12 mb-4">

                  <div class="form-outline">
                  <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$contact['id']}}</th>
                                <td>{{$contact['firstname']}}</td>
                                <td>{{$contact['lastname']}}</td>
                                <td>{{$contact['cpf']}}</td>
                                <td>{{implode(',',$contact['email'])}}</td>
                                <td>{{implode(',',$contact['phone'])}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <label class="form-label" for="firstName">Are you sure you want to delete this contact?</label>
                  </div>
              <div class="mt-4 pt-2">
                <button class="btn btn-primary btn-lg" type="submit" value="Submit">Yes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>