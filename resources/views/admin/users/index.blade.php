@extends('layouts.admin')





@section('content')


    <h1>Users</h1>

     <table class="table">
         <thead>
           <tr>
               <th>Id</th>
               <th>Photo</th>
               <th>Name</th>
               <th>Email</th>
               <th>Role</th>
               <th>Status</th>
               <th>Created</th>
               <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($users)

             @foreach($users as $user)

               <tr>
                   <td>{{$user->id}}</td>
                   {{--DISPLAYING THE USER PHOTOS IN THE TABLE--}}
                   <td><img height="50" width="70" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive img-rounded" alt=""></td>
                   {{--LINK TO THE EDIT USER WITH ITS $ID--}}
                   <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                   <td>{{$user->email}}</td>

           {{-- Using an array $user->role['name'] to get the property because -> is for objects --}}

                   <td>{{$user->role['name']}}</td>

                   {{-- USING IF ELSE TO CHECK IF USER IS ACTIVE OR NOT --}}
                   <td>{{$user->is_active == 1 ? "Active" : "Not Active" }}</td>




                   <td>{{$user->created_at->diffForHumans()}}</td>
                   <td>{{$user->updated_at->diffForHumans()}}</td>
               </tr>

               @endforeach

         @endif
         </tbody>
     </table>


@endsection