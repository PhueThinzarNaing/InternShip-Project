@extends('layouts.back.dashboard')
@section('content')

      <div class="row">
        <div class="col-md-12">
        <div class="card">
               <div class="card-header">Items List</div>
     
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Photo</th>
                  <th>Status</th>
                  <th>CommodityExchanges</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
             
            
                @foreach($items as $item) 
                <tr>
                <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->description}}</td>
                  <td><img src="{{asset('/uploads/'.$item->photopath)}}" width="80" height="80" /></td>
                  <td>{{ $item->Status }}</td>
                  <td>{{ $item->commodityExchanges->name }}</td>
                  <td>{{ $item->categories->category_name }}</td>
                  <td>

                  @if(Auth::user()->role == 'manager')
                  <form action="/items/{{ $item->id }}" method="POST">
                
                  <a href="{{ route('items.edit',$item->id)}}"><i class='fas fa-edit' style='font-size:24px'></i></a>
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
         
       
         @endsection


