<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Edit Contacts</title>
</head>
<body>
	<div class="container py-5 h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-12 col-lg-9 col-xl-7">
				<div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
					<div class="card-body p-4 p-md-5">
						<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Contact</h3>
						<form action="{{ route('update_contact', ['id' => $contact['id']]) }}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<input id="firstName" class="form-control form-control-lg @error('firstname') is-invalid @enderror" value="{{ $contact['firstname'] }}" name="firstname"/>
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
										<input type="text" id="lastName" class="form-control form-control-lg @error('lastname') is-invalid @enderror" value="{{ $contact['lastname'] }}" name="lastname"/>
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
											<input type="text" id="cpf" class="form-control form-control-lg @error('cpf') is-invalid @enderror" name="cpf" value="{{ $contact['cpf'] }}"/>
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
									<div class="form-outline">
										@foreach ($contact['email'] as $email)
											<input type="email" id="emailAddress" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email[]" value="{{ $email }}"/>          
										@endforeach
									<label class="form-label" for="emailAddress">Email</label>
								</div>
								</div>
								<div class="col-md-6 mb-4 pb-2">
									<div class="form-outline">
										@foreach ($contact['phone'] as $phone)
										<input id="phone" type="text" id="phoneNumber" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone[]" value="{{ $phone }}"/>           
										@endforeach    
										<label class="form-label" for="phoneNumber">Phone Number</label>
									</div>
								</div>
								<div class="mt-4 pt-2">
									<a href="/read/"><button class="btn btn-primary btn-lg" type="submit" value="Submit">Edit</button></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="{{url('assets/jquery.js')}}"></script>
</html>