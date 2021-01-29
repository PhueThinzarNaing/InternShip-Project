@extends('layouts.back.dashboard')
@section('content')

<h2 style="text-align:center">Update Item</h2>

<form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
        <div>
            <label>Item Name</label>
            <input type="text" class="form-control" name="item_name" value="{{$item->name}}">
            @error('item_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>     
         
        <div>
            <label>Description</label>
            <textarea class="form-control" name="description">{{$item->description}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <label>Photo</label>
            <input type="file" class="form-control" name="photo"  value="{{$item->photopath}}">
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <label>Status</label>
            <input type="number" class="form-control" name="status" value="{{$item->Status}}">
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div class="form-group">
      <label for="commodity_exchangesId">Choose Commodity_Exchanges:</label><br>
      <select name="commodity_exchanges" class="form-control">
      <option value="{{$item->commodityExchanges->id}}">{{$item->commodityExchanges->name}}</option>
      @foreach($commodity_exchanges as $commodities)
                   <option value="{{$commodities->id}}">{{$commodities->name}}</option>
                   @endforeach
      </select>            
    </div>

    <div class="form-group">
      <label for="commodity_exchangesId">Choose Category:</label><br>
      <select name="items" class="form-control">
      <option value="{{$item->categories->id}}">{{$item->categories->category_name}}</option>
      @foreach( $category as $categories)
                   <option value="{{$categories->id}}">{{$categories->category_name}}</option>
                   @endforeach
      </select>            
    </div>

        <div>
            <button class="btn btn-outline-secondary rounded-0 mt-4" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Update
            </button>
        </div>
        </div>
       <div class="col-md-3"></div>

    
            </div>
</form>
            
@endsection