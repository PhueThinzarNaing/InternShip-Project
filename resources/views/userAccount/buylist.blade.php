@extends('layouts.front.userview')
@section('content')

      <div class="row">
        <div class="col-md-14">
        <div class="card">
               <div class="card-header">{{ __('Buy Item Lists') }}</div>
          
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 8px">No</th>
                  <th>Name</th>
                  <th>Item</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Weight</th>
                  <th>Total Price</th>                
                  <th>CommodityExchange</th>
                  <th>Category</th>
                  <th>Date</th>
                 
                </tr>
                @foreach($buyitem_lists as $buyitem_list) 
                <tr>
                <td>{{$loop->iteration}}</td>
                  <td>{{$buyitem_list->users->name }}</td>
                  <td>{{$buyitem_list->items->name}}</td>
                  <td>{{$buyitem_list->description}}</td>
                  <td>{{$buyitem_list->price}}</td>
                  <td>{{$buyitem_list->weight}}</td>   
                  <td>{{$buyitem_list->total_price }}</td>
                  <td>{{$buyitem_list->commodityExchanges->name}}</td>   
                  <td>{{$buyitem_list->categories->category_name}}</td>
                  <td>{{$buyitem_list->created_at }}</td>
            
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
           
          <!-- /.box -->
</div>
         @endsection


