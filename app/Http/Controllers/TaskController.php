<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;
use App\Models\User;
use DB;

class TaskController extends Controller
{
    public function AddNew(){
$user=user::all();
return view('add_new_task',compact('user'));
    }

    public function AddTaskStore(Request $request){
      
     $request->validate([
            'task_name' => 'required',
            'task_details' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);

       $task = new TaskModel;

       $task->task_name = $request->task_name;
       $task->task_details = $request->task_details;
       $task->user_id     =$request->user_id;
       $task->status     = $request->status;
       $result=$task->save();

       if ($result){
        return back()->with('success_message','Inserted successfully');
    }else{
        return back()->with('error_message','inserted unsuccessfull');
    }     
          }

public function TaskList(){
  
      $task = DB::table('task_models')
     ->rightjoin('users', 'users.id', '=', 'task_models.user_id')->select('task_models.*', 'users.id as uid','users.name','users.email')
    ->get();
   return view('task_list',compact('task'));


}
                     









public function Delete($id)
{
   
        $result=TaskModel::destroy($id);
    
        
        if ($result){
            return back()->with('success_message','Task Deleted successfully');
}else{
    return back()->with('error_message','Task deleted unsuccessfully');
}

}
public function Edit($id){
   $task= TaskModel::findorfail($id);
   $user=user::all();
   return view('edit',compact('task','user'));
}
public function EditTaskStore(Request $request,$id){
    $request->validate([
        'task_name' => 'required',
        'task_details' => 'required',
        'user_id' => 'required',
        'status' => 'required',
    ]);

$task=TaskModel::findorfail($id);
$task->task_name = $request->task_name;
$task->task_details = $request->task_details;
$task->user_id     =$request->user_id;
$task->status     = $request->status;
$result=$task->save();

if ($result){
 return back()->with('success_message','Update successfully');
}else{
 return back()->with('error_message','update unsuccessfull');
} 


}


public function ChangeStatus($id){
   
$getstatus = TaskModel::select('status')->where('id', $id)->first();



if($getstatus->status==1){
    $status=0;
}else{
        $status=1;
    }

   

   $result=TaskModel::where('id',$id)->update(['status'=>$status]);

if ($result){
 return back()->with('success_message','Change status successfully');
}else{
 return back()->with('error_message','Change status unsuccessfull');
} 


}


public function lefJoin()

{

    $users = User::select(

                        "users.id", 

                        "users.name",

                        "users.email", 
    )
                    
                        ->leftJoin('task_models', 'user_id', '=', 'users.id')
                        ->get();
    

                   



return($users);

}

}




