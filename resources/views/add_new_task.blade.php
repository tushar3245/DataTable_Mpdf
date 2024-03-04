
@extends('auth.app')
@section('content')

<div class="col-12">
                            <div class="card">
                                <h5 class="card-header">Add User Details</h5>
                                <div class="card-body">
                          <!-- success-->
                                @if (\Session::has('success_message'))
                              <div class="alert alert-success">
                               
                        {!! \Session::get('success_message') !!}
                                
                                  </div>
                                @endif
                <!--  =================================--> 
                            


                              @if (\Session::has('error_message'))
                              <div class="alert alert-success">
                               
                               {!! \Session::get('error_message') !!}
                                
                                  </div>
                                @endif
















       <!--  =================Form Error message================--> 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





<div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Add User Details</h1>
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form" method ="post" action ="{{url('add_details_store')}}" class="multiForms">
                             {{csrf_field()}}
                             <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">User Name *</label>
                            <input id="form_name" type="text" name="task_name" class="form-control" placeholder="User Name *"  data-error="Firstname is required."> 
                        </div>
                    </div>              
</div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">User Details *</label>
                            <textarea id="form_message" name="task_details" class="form-control" placeholder="Write your User Details." rows="4"  data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>



                        <div class="col-md-6 mt-1">
                        <div class="form-group">
                            <label for="form_need">User-Id</label>
                            <select id="form_need" name="user_id" class="form-control"  data-error="Please specify your need.">
                            <option label="Choose id..."></option>
                                @foreach($user as $user)
                               <option value="{{ $user->id }}">{{ $user->id }}</option>
                               @endforeach
                            </select>
                            
                        </div>
                    </div>



                    <div class="form-group row">
                    <label for="form_need">Status</label>
                                                <div class="col-9 col-lg-10">
                                                <select class="form-control" id="input-select" name="status">
                                                <option value="">Select Status</option> 
                                                <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                    </select>
                                               
                                                
                                            </div>
                                            </div>






                </div>



                    <div class="col-md-12"> 
                        <input type="submit" class="btn btn-success btn-send mt-2 pt-2 btn-block" value="Submit" >    
                </div>
                </div>


        </div>














         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>


@endsection