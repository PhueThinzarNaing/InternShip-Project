@extends('layouts.back.dashboard')
@section('content')


<h2 style="text-align:center">Buy Form</h2>

<form action="/buyitems" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">

        <div>
        <label for="user_id">Choose User Name:</label><br>
         <select name="username" class="form-control">
          <option>Choose User Name</option>
         
           @foreach($users as $user)
             <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
           </select> 
        </div>

        <div>
        <label for="item_id">Choose Item Name:</label><br>
         <select name="itemsname" class="form-control">
          <option>Choose Item Name</option>
         
           @foreach($items as $item)
             <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
           </select>  
        </div>     
         
        <div>
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div>
        <label>Price</label>
            <input type="number" class="form-control" name="price" id="price">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <label>Weight</label>
            <input type="number" class="form-control" name="weight" id="weight">
            @error('weight')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <label>Total Price</label>
            <input type="number" class="form-control" name="total_price" id="total">
            @error('total_price')
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



<script>
$(document).ready(function(){
    var price=$("#price");
    var weight=$('#weight');
    weight.keyup(function(){
        //var total=isNaN(parseInt(price.val()* weight.val())) ? 0 :(price.val()* weight.val())
        var total=price.val()*weight.val()
        $("#total").val(total);
    });
});
</script>

@endsection