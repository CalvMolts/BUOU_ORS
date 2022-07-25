@extends('application.master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Application</div>
	<div class="card-body">
		<form method="post" action="{{ route('application.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
                <div class="col">
      
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="form-control" required="">
              </div>
      
            </div>
      
              <div class="col">
      
              <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" id="firstName" name="firstName" class="form-control" required="">
                </div>
      
              </div>
                
              </div>
      
              <div class="row">
                <div class="col">
      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input type="text" id="middleName" name="middleName" class="form-control" required="">
                  </div>
      
                </div>
      
                <div class="col">
      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Birth Date</label>
                    <input type="date" id="birthDate" name="birthDate" class="form-control" required="">
                    </div>
      
                </div>
              </div>
      
              <div class="row">
                <div class="col">
      
                  <label class="col-sm-2 col-label-form">Student Gender</label>
                  <div class="col-sm-10">
                    <select name="gender" class="form-control">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
            
                </div>
                <div class="col">
      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="text" id="email" name="email" class="form-control" required="">
                  </div>
                  
                </div>
              </div>
      
              <div class="row">
                <div class="col">
      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" required="">
                  </div>
      
                </div>
      
                <div class="col">
      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company</label>
                    <input type="text" id="company" name="company" class="form-control" required="">
                  </div>
      
                </div>
      
              </div>
      
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" id="address" name="address" class="form-control" required="">
                </div>
				<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Image</label>
				<div class="col-sm-10">
					<input type="file" name="applicantImage" />
				</div>
			</div>

			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')