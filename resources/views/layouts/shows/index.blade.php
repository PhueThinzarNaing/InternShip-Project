@extends('layouts.front.main')
@section('content')

  @foreach($commodityExchange as $commodity_exchanges)
   <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col-4">
                <img src="{{asset('/uploads/'.$commodity_exchanges->photopath)}}"  alt="Colorlib Template" width="300px" height="250px">
      </div>        
          
       
        <div class="col-6 pl-5">
          <strong class="d-inline-block mb-2 text-success pt-1">CommodityExchange</strong>
         <h3 class="mb-0">{{$commodity_exchanges->name}}</h3>
          <div class="mb-1 text-muted"><span class="oi oi-envelope-closed"></span> {{$commodity_exchanges->email}}</div>
          <div class="mb-1 text-muted"><span class="oi oi-map-marker"></span> {{$commodity_exchanges->address}}</div>
          <div class="mb-1 text-muted"><i class="fa fa-phone"></i></i>{{$commodity_exchanges->phno1}}</div>
                 
          <div class="mb-1 text-muted"><i class="fa fa-phone"></i>{{$commodity_exchanges->phno2}}</div>   
     
        </div>

        <div class="col-2 mt-5">
        <a href="{{route('shows.show',$commodity_exchanges->id)}}" class="stretched-link"> <button type="button" class="btn btn-outline-success">VIEW DETAIL</button></a>
      
        </div>
       
      </div>
    </div>
    @endforeach
  
@endsection