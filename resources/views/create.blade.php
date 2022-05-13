
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
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Contact</h3>
            <form id="teste" action="{{ route('register_contact') }}" method="POST">
              @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg @error('firstname') is-invalid @enderror" name="firstname"/>
                    @if ($errors->has('firstname'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                    @endif
                    <label class="form-label" for="firstName">First Name</label>
                </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg @error('lastname') is-invalid @enderror" name="lastname"/>
                    @if ($errors->has('lastname'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                    @endif
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="row">
                    <div class="col-md-12 mb-4 pb-2">
                        <div class="form-outline">
                            <input id="cpf" class="form-control form-control-lg @error('cpf') is-invalid @enderror" name="cpf">
                            @if ($errors->has('cpf'))
                            <span class="invalid-feedback">
                              <strong>{{ $errors->first('cpf') }}</strong>
                            </span>
                            @endif
                            <label class="form-label" for="cpf">CPF</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4 pb-2">
                  <div class="form-outline div-email">
                    <input type="email" id="emailAddress" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email[]"/>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                    	<strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>
                  <button class="btn btn-primary add-email" type="submit" value="Submit">Add Email</button> 
                </div>
                <div class="col-md-6 mb-4 pb-2 div-phone-mask">
                  <div class="form-outline div-phone">
                    <input type="text" id="phoneNumber" class="form-control mask-phone form-control-lg @error('phone') is-invalid @enderror" name="phone[]"/>
                    @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>
                  <button class="btn btn-primary add-phone" type="submit" value="Submit">Add Phone</button> 
                </div>
              <div class="mt-4 pt-2">
                <button class="btn btn-primary btn-lg" type="submit" value="Submit">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>  
    <script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="{{url('assets/jquery.js')}}"></script>
</html>


