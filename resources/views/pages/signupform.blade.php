<link href="/css/bootstrap.min.css" rel="stylesheet"></head>
<center><form action="{{route('ektanam')}}" method="POST">
  @csrf
  <div class="pt-5">
    <div class="mt-5">
    <div class="col-3 mt-5 pt-5 ">
      <label for="exampleInputName" class="form-label"><h5>Name</h5></label>
      <input name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
    </div>
    <div class="col-3">
      <label for="exampleInputEmail1" class="form-label"><h5>Email Address</h5></label>
      <input name="email" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="col-3">
      <label for="exampleInputPassword1" class="form-label"><h5>Password</h5></label>
      <input name="password" class="form-control" id="exampleInputPassword1">
    </div>
    
  </div>
  </div>
  <div class="pt-2">
    <button type="submit" class="btn btn-light">Submit</button>
    <a href="{{url('/loginpage')}}"><button type="button" class="btn btn-light">Already Have An Account</button></a>
  </div>
  </form></center>