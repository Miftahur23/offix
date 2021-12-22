@extends('master')  
@section('content')
    
<div class="app-main">
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="container fiori-container">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                             <h1>Employee Register</h1> 
                            </div>
                        </div>
                    </div>
                </div>               
                <div class="app-inner-layout app-inner-layout-page">

@if ($errors->any())
<div class="alert alert-warning" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul> 
</div>
@endif


<form action="{{route('Empregdone')}}" method="POST" class="row  m-auto" enctype="multipart/form-data">
  @csrf
  
  <div class="col-6 mt-1">
      
    <label for="inputFirstname" class="form-label"><h6>First Name</h6></label>
    <input name="fname" type="name" class="form-control" id="inputFirstname">
  </div>
  <div class="col-6 mt-1">
    <label for="inputLastname" class="form-label"><h6>Last Name</h6></label>
    <input name="lname" type="lastname" class="form-control" id="inputLastname">
  </div>
<div class="col-12 mt-3">
  <label for="inputEmail" class="form-label"><h6>Email</h6></label>
  <input name="email" type="email" class="form-control" id="inputEmail">
</div>
<div class="col-6 mt-3">
  <label for="inputPassword" class="form-label"><h6>Password</h6></label>
  <input name="password" type="password" class="form-control" id="inputPassword">
</div>
<div class="col-6 mt-3">
    <label for="inputPassword1" class="form-label"><h6>Confirm Password</h6></label>
    <input name="password1" type="password" class="form-control" id="inputPassword1">
  </div>
  <div class="col-6 mt-5">
    <select name="departments_id" class="form-control form-control">
      <option>Select Department</option>

      @foreach ($departments as $item)

      <option  value="{{$item->id}}">{{$item->dname}}</option>

      @endforeach

    </select>
  </div>
  
<div class="col-6 mt-5">
  <select name="branches_id" class="form-control form-control">
    <option>Select Branch</option>

    @foreach ($branches as $item)

    <option  value="{{$item->id}}">{{$item->name}}</option>

    @endforeach

  </select>
</div>
<div class="col-12 mt-3">
  <label for="inputAddress" class="form-label"><h6>Address</h6></label>
  <input name="address" type="text" class="form-control" id="inputAddress">
</div>
<div class="col-12 mt-3">
  <label for="inputMobilenNo" class="form-label"><h6>Mobile No</h6></label>
  <input name="pnumber" type="number" class="form-control" id="inputMobileNo">
</div>
    

    <div class="col-12 mt-4 mb-2">
      <label for="inputImage"><h6>Select Employee Image</h6></label>
      <input type="file" name='employee_image' class="form-control-file" id="inputImage">
    </div>


    
    <div class="mr-5 mt-3 ">
      <button type="submit" class="btn btn-success">Register</button>
    
    
    <a href="{{route('Emplogin')}}"><button type="button" class="btn btn-success">Already Have An Account</button></a>
  </div> 
  
</div> 
</form>
</div>
</div>
</div>
</div>
@endsection