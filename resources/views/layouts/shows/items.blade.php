@extends('layouts.front.main')
@section('content')

  @foreach($items as $item)
   <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col-4">
                <img src="{{asset('/uploads/'.$item->photopath)}}"  alt="Colorlib Template" width="300" height="200">
      </div>        
          
       
        <div class="col-6 pl-5">
          <strong class="d-inline-block mb-2 text-success pl-4">Item</strong>
         <h3 class="mb-0">{{$item->name}}</h3>
          <div class="mb-1 text-muted"><span>Description:::</span>{{$item->description}}</span></div>
          <div class="mb-1 text-muted"><span>Commodity Exchange:::</span> <span class="badge badge-success">{{$item->commodityExchanges->name}}</span></div>
          <div class="mb-1 text-muted"><span>Category:::<span> {{$item->categories->category_name}}</div>
          @foreach( $itemPrice as $itemp)
							   @if($itemp->item_id==$item->id)
                 <div class="mb-1 text-muted"><span>Date:::</span><span class="badge badge-success">{{ $itemp->created_at }}</span></div>
                 <div class="mb-1 text-muted"><span>Price:::</span><span class="badge badge-success">{{ $itemp->price }}ks</span></div>
								
							@endif
					@endforeach
        
          
        </div>

        <div class="col-2 mt-5">
       <!-- <a href="" class="stretched-link"> <button type="button" class="btn btn-outline-success">SELL</button></a>-->
      
        </div>
       
      </div>
    </div>
    @endforeach
  
@endsection