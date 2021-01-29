@extends('layouts.back.dashboard')
@section('content')

<div class="container mt-3">
<div class="card">
    <div class="card-header">{{ __('User Lists') }}</div>
   
      <div class="card-body">
         
      
           <label>User Name</label>
              <form action="{{ route('users.update',$users->id) }}" method="POST">
               {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">  
                 <div class="form-group">
                   <input type="text" class="form-control" value="{{$users->name}}" name="name">
                 </div>
                 <label>User Role</label>
                   <select class="form-control" name="role">
                     <option  selected="selected">{{$users->role}}</option>
                     <option>admin</option>
                     <option>manager</option>
                     <option>user</option>   
                   </select>      
                   <br>
                  <button class="btn btn-primary">Update Role</button>
                </form>

              </div>
             
       </div>
   </div>
  </div>

@endsection