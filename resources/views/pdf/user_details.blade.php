<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>

 

    @if($user)
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Details: {{ $user->task_details }}</p>



@else
    <p>User not found</p>
@endif
</body>
</html>
