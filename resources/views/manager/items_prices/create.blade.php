@extends('layouts.back.dashboard')
@section('content')

<h2 style="text-align:center">Create Item Price</h2>

<form action="/itemsprices" method="POST">
{{ csrf_field() }}
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
       
        <div>
        <label>Item Price</label>
            <input type="number" class="form-control" name="items_prices">
            @error('items_prices')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div class="form-group">
        <label for="item_id">Choose Item Name:</label><br>
         <select name="itemsname" class="form-control">
          <option>Choose Item Name</option>
         
           @foreach($items as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
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