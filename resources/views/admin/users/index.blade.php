@extends('layouts.back.dashboard')
@section('content')

<div class="container">
<div class="row justify-content-center">
   
   <div class="card">
   <div class="card-header">{{ __('User Lists') }}</div>
   
   <div class="col-md-12">
   <div class="card-body">
      <table class="table table-bordered table-hover">
           <thead>
               <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Gender</th>
                 <th>Phone</th>
                 <th>Address</th>
                 <th>Roles</th>
                 <th>Action</th>
               </tr>
           </thead>
           <tbody>
            @foreach($users as $user)
             <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->gender}}</td>
             <td>{{$user->phone}}</td>
             <td>{{$user->address}}</td>
             <td>
            
            <span class="badge badge-primary"> {{ $user->role }}</span>
           
             </td>
            
             <td> 
             @if(Auth::user()->role == 'admin')
             <a href="{{ route('users.edit',$user->id ) }}" class="btn btn-sm btn-info">Manage Role</a>
             @endif
             </td>
             
             </tr>
            @endforeach
           </tbody>
      </table>
      </div>
     
      </div>
      </div>
   </div>
   </div>
   
   
</div>

@endsection
