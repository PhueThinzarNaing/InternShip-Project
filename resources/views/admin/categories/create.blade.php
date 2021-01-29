@extends('layouts.back.dashboard')
@section('content')

<div class="card">
<h3 style="text-align:center;margin-top:25px">Create Category</h3>

<form action="/categories" method="POST">
{{ csrf_field() }}
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
        <div>
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name">
            @error('category_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>     
         
        <div>
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        
        <div>
            <button class="btn btn-outline-primary rounded-1 mt-4 mb-4" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Create
            </button>
        </div>
        </div>
       <div class="col-md-3"></div>

    
            </div>
</form>
</div>
            
@endsection