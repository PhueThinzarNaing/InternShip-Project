@extends('layouts.back.dashboard')
@section('content')

<h2 style="text-align:center">Update Category</h2>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
        <div>
            <label>Category Name</label>
            <input type="text" class="form-control" name="name" value="{{$category->category_name}}">
            @error('category_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>     
         
        <div>
            <label>Description</label>
            <textarea class="form-control" name="description" value="{{$category->description}}">{{$category->description}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        
        <div>
            <button class="btn btn-outline-primary rounded-1 mt-4 mb-3" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
               Update
            </button>
        </div>
        </div>
       <div class="col-md-3"></div>

    
            </div>
</form>
            
@endsection