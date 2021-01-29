@extends('layouts.back.dashboard')
@section('content')

      <div class="row">
        <div class="col-md-12">
        <div class="card">
               <div class="card-header">{{ __('List of Categories') }}</div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Name</th>
                  <th>Description</th>
                
                  <th>Action</th>
                </tr>
                @foreach($categories as $category) 
                <tr>
                <td>{{$loop->iteration}}</td>
                  <td>{{$category->category_name}}</td>
                  <td>{{$category->description}}</td>
             
                   
                  <td>
                  @if(Auth::user()->role == 'admin')
                  <form action="/categories/{{ $category->id }}" method="POST">
                
                  <a href="{{ route('categories.edit',$category->id)}}"><i class='fas fa-edit' style='font-size:24px'></i></a>
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
            
          </div>
          <!-- /.box -->
</div>
         @endsection


