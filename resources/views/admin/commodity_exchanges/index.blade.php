@extends('layouts.back.dashboard')
@section('content')

      <div class="row">
        <div class="col-md-12">
        <div class="card">
               <div class="card-header">{{ __('CommodityExchange Lists') }}</div>
   
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone Number1</th>
                  <th>Phone Number2</th>
                  <th>Manager</th>
                 
                  <th>Photo</th>

                  <th>Action</th>
                </tr>
                @foreach($commodity_exchanges as $commodity) 
                <tr>
                <td>{{$loop->iteration}}</td>
                  <td>{{$commodity->name}}</td>
                  <td>{{$commodity->email}}</td>
                  <td>{{$commodity->address}}</td>
                  <td>{{$commodity->phno1}}</td>
                  <td>{{$commodity->phno2}}</td>   
                  <td>{{$commodity->user->name }}</td>
                  <td><img src="{{asset('/uploads/'.$commodity->photopath)}}" width="80" height="80"/></td>
                  <td> 

                  <form action="/commodity_exchanges/{{ $commodity->id }}" method="POST">
                
                  <a href="{{ route('commodity_exchanges.edit',$commodity->id)}}"><i class='fas fa-edit' style='font-size:24px'></i></a>
                
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


