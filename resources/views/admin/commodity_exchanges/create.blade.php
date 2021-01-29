@extends('layouts.back.dashboard')
@section('content')



<h2 style="text-align:center">Create CommodityExchange</h2>

<form action="/commodity_exchanges" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-4">
        <div>
            <label>CommodityExchange Name</label>
            <input type="text" class="form-control" name="cname">
            @error('ce_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Email</label>
            <input type="email" class="form-control" name="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

         
        <div>
            <label>Address</label>
            <input type="text" class="form-control" name="address">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone Number1</label>
            <input type="number" class="form-control" name="phno1">
            @error('phno1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone Number2</label>
            <input type="number" class="form-control" name="phno2">
            @error('phno2')
           
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Manager</label>
             <select name="user_id" class="form-control">
                 <option selected>Choose User Name</option>
                    @foreach($users as $user)
                    @if($user->role == 'manager')
                    {
                     <option value="{{$user->id}}">{{$user->name}}</option>
                    }
                    @endif
                    @endforeach
             </select> 
              @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
                @enderror
             </div>
    

        <div>
            <label>Photo</label>
            <input type="file" class="form-control" name="photo">
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-outline-secondary rounded-0 mt-4" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Create
            </button>
        </div>
        </div>
       <div class="col-md-3"></div>

    
            </div>
</form>
            
@endsection