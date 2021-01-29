@extends('layouts.back.dashboard')
@section('content')

<h2 style="text-align:center">Create Item</h2>

<form action="/items" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
        <div>
            <label>Item Name</label>
            <input type="text" class="form-control" name="item_name">
            @error('item_name')
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
            <label>Photo</label>
            <input type="file" class="form-control" name="photo">
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <label>Status</label>
            <input type="number" class="form-control" name="status">
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div class="form-group">
      <label for="commodity_exchangesId">Choose Commodity_Exchanges:</label><br>
      <select name="commodity_exchanges" class="form-control">
      
           @foreach($commodity_exchanges as $commodities)
                   <option value="{{$commodities->id}}">{{$commodities->name}}</option>
           @endforeach
      </select>            
    </div>

    <div class="form-group">
      <label for="category_Id">Choose Category:</label><br>
      <select name="categories" class="form-control">
      <option selected>Choose Category</option>
      @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->category_name}}</option>
                   @endforeach
      </select>            
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