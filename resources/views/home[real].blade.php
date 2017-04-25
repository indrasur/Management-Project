@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Show Data</div>
            
                  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Project Management</h1>
    </div>
  </div>

  <div class="row">
    <div class="table-responsive">
        <div class="col-md-10 col-md-offset-1">
      <table class="table table-borderless" id="table">
        <tr>
          <th>No.</th>
          <th>Project Name</th>
          <th>Signed Employee</th>
          <th>Due Date</th>
          <th>Progress</th>
          <th>Actions</th>
        </tr>
        {{ csrf_field() }}

        <?php $no=1; ?>
        @foreach($blogs as $blog)
          <tr class="item{{$blog->id}}">
            <td>{{$no++}}</td>
            <td>{{$blog->projectName}}</td>
            <td>{{$blog->signedEmployee}}</td>
            <td>{{$blog->dueDate}}</td>
            <td>{{$blog->progress}}</td>
            <td>
            <a href="{{ url('/edit') }}">Edit</a>
            
          </td>
          </tr>
        @endforeach
      </table>
        </div>
    </div>
  </div>

                

            </div>
        </div>
    </div>
</div>
@endsection
