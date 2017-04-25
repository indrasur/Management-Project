@extends('layouts.appEmp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Show Data</div>
            
                  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>User</h1>
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
            <button class="edit-modal btn btn-primary" data-id="{{$blog->id}}" data-title="{{$blog->title}}" data-description="{{$blog->description}}">
              <span class="glyphicon glyphicon-edit"></span> Edit
            </button>
            <button class="delete-modal btn btn-danger" data-id="{{$blog->id}}" data-title="{{$blog->title}}" data-description="{{$blog->description}}">
              <span class="glyphicon glyphicon-trash"></span> Delete
            </button>
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
