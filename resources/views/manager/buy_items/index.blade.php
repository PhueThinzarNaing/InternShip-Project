@extends('layouts.back.dashboard')
@section('content')

      <div class="row">
        <div class="col-md-12">
        <div class="card">
               <div class="card-header">{{ __('Buy Item Lists') }}</div>
          
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Name</th>
                  <th>Item</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Weight</th>
                  <th>Total Price</th>                
                  <th>CommodityExchange</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Action</th>
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
                 
                 <td>
                  <form action="" method="POST">
                
                  <a href=""><i class='fas fa-edit' style='font-size:24px'></i></a>
                
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button><i class='fas fa-trash-alt' style='font-size:20px'></i></button>
                  </form>
                  </td>
                             
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
           
          <!-- /.box -->
</div>
         @endsection


