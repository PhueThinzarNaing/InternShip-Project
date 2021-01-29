@extends('layouts.back.dashboard')
@section('content')

      <div class="row">
        <div class="col-md-12">
        <div class="card">
               <div class="card-header">Item Prices Lists</div>
         
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Item</th>
                  <th>Commodity Exchanges</th>
                  <th>Action</th>
                </tr>
                @foreach($itemprices as $itemps) 
                <tr>
                <td>{{$loop->iteration}}</td>
                  <td>{{$itemps->created_at}}</td>
                  <td>{{$itemps->price}}</td>
                  <td>{{ $itemps->items->name }}</td>
                  <td>{{ $itemps->commodityExchanges->name}}</td>
                 <td>

                 @if(Auth::user()->role == 'manager')
                 <form action="/itemsprices/{{ $itemps->id }}"  method="POST">
                
                  <a href="{{ route('itemsprices.edit',$itemps->id)}}"><i class='fas fa-edit' style='font-size:24px'></i></a>
                  
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button><i class='fas fa-trash-alt' style='font-size:20px'></i></button>
                </form>
                @endif
                  

                  </td>

                              
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
           
          <!-- /.box -->
</div>
         @endsection


