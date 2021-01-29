@extends('layouts.back.dashboard')
@section('content')



<h2 style="text-align:center">Edit Company</h2>

<form action="{{ route('commodity_exchanges.update', $commodity_exchanges->id) }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
        <div>
            <label>Company Name</label>
            <input type="text" class="form-control" name="cname" value="{{ $commodity_exchanges->name }}">
            @error('ce_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $commodity_exchanges->email }}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

         
        <div>
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="{{ $commodity_exchanges->address }}">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone Number1</label>
            <input type="number" class="form-control" name="phno1" value="{{ $commodity_exchanges->phno1 }}">
            @error('phno1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone Number2</label>
            <input type="number" class="form-control" name="phno2" value="{{ $commodity_exchanges->phno2 }}">
            @error('phno2')
           
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Manager</label>
             <select name="user_id" class="form-control">
                 <option value="{{ $commodity_exchanges->user->id }}">{{ $commodity_exchanges->user->name }}</option>
                    @foreach($users as $user)
                     <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
             </select> 
              @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
                @enderror
             </div>
 
        <div>
    

        <div>
            <label>Photo</label>
            <input type="file" class="form-control" name="photo" value="{{ $commodity_exchanges->photopath }}">
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