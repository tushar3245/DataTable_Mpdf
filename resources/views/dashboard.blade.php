@extends('auth.app')
@section('content')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

<a href="{{url('add_user_details')}}" class="btn btn-primary">Add User </a>
<a href="{{url('task_list')}}" class="btn btn-secondary">User list</a>
<a href="{{url('ajax_work')}}" class="btn btn-success">Ajax</a>




            </div>
            
        </div>
   
    </div>
  
</x-app-layout>

@endsection