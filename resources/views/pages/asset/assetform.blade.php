
@extends('master')  
@section('dashboard')
    

       
    <div class="app-main">
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="container fiori-container">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                             <h2>Add Assets</h2> 
                            </div>
                        </div>
                    </div>
                </div>               
                <div class="app-inner-layout app-inner-layout-page">

  @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p>
  @endif

  @if ($errors->any())
              <div class="alert alert-warning" role="alert">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>   
                  @endforeach
                </ul>
              </div>
  @endif

                  <form action="{{route('Create.asset')}}" method="POST" class="row col-5 m-auto">
                    @csrf
                      <div class="col-6 mt-3">
                          <label for="inputAssetname" class="form-label"><h6>Asset Name</h6></label>
                          <input name="asset_name" type="name" class="form-control" id="inputAssetname" >
                        </div>
                        <div class="col-6 mt-3">
                          <label for="inputAssetid" class="form-label"><h6>Asset ID</h6></label>
                          <input name="asset_id" type="number" class="form-control" id="inputAssetid" >
                        </div>
                      <div class="col-12 mt-3">
                        <label for="inputCategory" class="form-label"><h6>Category</h6></label>
                        <input name="category" type="text" class="form-control" id="inputCategory" >
                      </div>
                  

                      {{-- relation --}}
                      
                    <div class="col-12 mt-3">
                      <select name="empid" class="form-control form-control-lg">
                        <option> </option>
                  
                        @foreach ($emp as $item)
                  
                        <option  value="{{$item->id}}">{{$item->fname}}</option>
                  
                        @endforeach
                  
                      </select>
                    </div>
                  
                      <div class="col-6 mt-3">
                        <label for="inputQuantity" class="form-label"><h6>Quantity</h6></label>
                        <input name="quantity" type="number" class="form-control" id="inputQuantity" >
                      </div>
                      <div class="col-6 mt-3">
                          <label for="inputCost" class="form-label"><h6>Cost</h6></label>
                          <input name="cost" type="number" class="form-control" id="inputCost" >
                        </div>
                        <div class="col-6 mt-3">
                          <label for="inputDatepurchased" class="form-label"><h6>Purchased_Date</h6></label>
                          <input name="purchased_date" type="Date" class="form-control" id="inputDatepurchased" >
                        </div>
                      
                      <div class="col-6 mt-3">
                        <label for="inputSerialno" class="form-label"><h6>Serial No</h6></label>
                        <input name="serial_no" type="number" class="form-control" id="inputSerialno" >
                      </div>

                      <div class="form-group m-3">
                        <label for="exampleFormControlFile1"><h6>Select Asset Image</h6></label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>

                      <div class="col-12 mt-1">
                        <label for="inputDescription" class="form-label" ><h6>Description</h6></label>
                        <input name="description" type="text" class="form-control" style="height:100px" id="inputDescription" >
                      </div>

                      <div class="d-flex justify-content-center align-items-center ml-4 pl-5">
                        <div class="col-12  ml-1 pl-5 ">
                      <div class="col-12 mt-3  ml-5 pl-5 ">
                      <button type="submit" class="btn btn-success btn-lg">Create</button>
                    </div> </div> </div>
                    
                  </div> 
                  </form>
                    {{-- table  --}}
                    {{-- @include('table.table') --}}

                    {{-- <table class="table table-dark ">
                        <thead>
                          <tr>
                            
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                    
                          @foreach ($data as $item)
                          <tr>
                            
                            <td>{{$item->email}}</td>
                            <td>{{$item->password}}</td>
                            
                          </tr>
                          @endforeach 
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

