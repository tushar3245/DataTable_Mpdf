@extends('auth.app')
@section('content')
<div class="container-fluid">
       <!-- success-->
       @if (\Session::has('success_message'))
                              <div class="alert alert-success">
                               
                        {!! \Session::get('success_message') !!}
                                
                                  </div>
                                @endif














    <div class="row">
        <div class="col-md-12">
        <div class="card">
        <h5 class="card-header">User List</h5>
</div>
        <a href="{{url('add_new_details')}}" class="btn btn-primary mt-2">Add User Details</a>
          <div class="mt-5">
         
        <table id="myTable"  class="display">

        <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th> Details</th>
      
        <th>Status</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
    @foreach($task as $key=>$task)
      <tr>
       
        <td>{{$key+1}}</td>
        <td>{{$task->name}}</td>
       
        <td>{{$task->email}}</td>
        <td>{{$task->task_details}}</td>
        <td>
        @if($task->status == 1)
        <a href="{{url('change/status',$task->id)}}" class= "btn btn-success">Active</a>
                                                

 @else
 <a href="{{url('change/status',$task->id)}}" class= "btn btn-warning">Inactive</a>
                                         
 @endif
 


        </td>
        <td>

        <a href="{{ url('pdf.generate', ['id' => $task->user_id]) }}"class="btn btn-danger"> PDF</a>
        
       <!-- <a href="{{url('task/edit',$task->id)}}" class= "btn btn-info">Edit</a>
        <a onclick ="return confirm('Are you sure delete this item')"href="{{url('task/delete',$task->id)}}"  class="btn btn-danger">Delete</a>
-->
      </td>

        </td>

      </tr>
      @endforeach
</tbody>
</div>
        </div>
    </div>
</div>




@endsection