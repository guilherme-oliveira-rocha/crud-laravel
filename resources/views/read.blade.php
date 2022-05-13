<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title> View Contacts</title>
</head>
<div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-12 col-xl-12">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">List of Contact</h3>
                    <form action="" class="col-md-6 mb-3">
                        <div class="form-group d-flex">
                            <input type="search" name="search" id="" class="form-control" placeholder="Search by name or cpf" value="{{$search}}">
                            <button class="btn btn-primary ms-3">Search</button>
                        </div>
                    </form>
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
                            
                            @foreach($contacts as $contact)
                            
                            <tr>
                                <th scope="row">{{$contact['id']}}</th>
                                <td>{{$contact['firstname']}}</td>
                                <td>{{$contact['lastname']}}</td>
                                <td>{{$contact['cpf']}}</td>
                                <td>{{implode(',', $contact['email'])}}</td>
                                <td>{{implode(',', $contact['phone'])}}</td>
                                <td>
                                    <!-- Call to action buttons -->
                                    <a href="/edit/{{$contact['id']}}"><button type="button" class="btn btn-info">Edit</button></a>
                                    <a href="/delete/{{$contact['id']}}"><button type="button" class="btn btn-danger">Delete</button></a>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4 pt-2">
                        <a href="/create"><button class="btn btn-primary btn-lg" type="submit" value="Submit">Create Contact</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</html>