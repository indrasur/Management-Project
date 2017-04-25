@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Data</div>
         
         <form action="store" method="post">

  <div class="form-group row add">
    <div class="col-md-10 col-md-offset-1">
      <label>Project Name</label>
      <input type="text" class="form-control" id="" name="projectName"
      placeholder="Project Name" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>

    <div class="col-md-10 col-md-offset-1">
      <label>Signed Employee</label>
      <input type="text" class="form-control" id="" name="signedEmployee"
      placeholder="Signed Employee" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>


    <div class="col-md-10 col-md-offset-1">
      <label>Due Date</label>
      <input type="date" class="form-control" id="" name="dueDate"
      placeholder="Due Date" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>

    <div class="col-md-10 col-md-offset-1">
            <label>Progress</label>
            <select name="progress" class="form-control">
            <option value="0">0%</option> 
            </select>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}"></br>

    <div class="col-md-10 col-md-offset-1">
      <button class="btn btn-warning" name="submit" value="submit">
        <span class="glyphicon glyphicon-plus"></span> Submit
      </button>
    </div>
  </div>
  </form>



      </div>
    </div>
  </div>
</div>
@endsection
