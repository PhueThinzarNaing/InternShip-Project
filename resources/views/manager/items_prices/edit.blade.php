@extends('layouts.back.dashboard')
@section('content')

<h2 style="text-align:center">Update Item Price</h2>

<form action="{{ route('itemsprices.update', $itemprices->id) }}" method="POST">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
       
         
        <div>
        <label>Item Price</label>
            <input type="number" class="form-control" name="items_prices"  value="{{ $itemprices->price }}">
            @error('items_prices')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div class="form-group">
        <label for="item_id">Choose Item Name:</label><br>
         <select name="itemsname" class="form-control" >
         <option value="{{ $itemprices->items->id }}">{{ $itemprices->items->name }}</option>
         @foreach($items  as  $item)
                   <option value="{{ $item->id }}">{{ $item->name }}</option>
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