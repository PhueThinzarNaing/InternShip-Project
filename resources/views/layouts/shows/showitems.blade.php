@extends('layouts.front.main')
@section('content')
<section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
			
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			<select class="browser-default custom-select">
                   <option selected>Open this select menu</option>
				   @foreach($categories as $category)
                   <option>{{$category->category_name}}</option>
                   @endforeach
            </select>
          </div>
        </div>   		
    	</div>
   
    	<div class="container">
    		<div class="row">
        @foreach($items as $item)
    			<div class="col-md-12 col-lg-3 ftco-animate">
    				<div class="product">
    					<img  src="{{asset('/uploads/'.$item->photopath)}}" width="300px" height="250px" alt="Colorlib Template">
    				
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>{{$item->name}}</h3>
							@foreach( $itemPrice as $itemp)
							   @if($itemp->item_id==$item->id)
    						<div>
    							<div>
							
							        <p>Date:<span class="text-success">{{$itemp->created_at}}<span class="badge badge-success"></p>
									
								    <p >Price:<span class="text-danger">{{ $itemp->price}}ks</span></p>
								
		    					</div>
	    					</div>
							@endif
							@endforeach
	    					
    					</div>
              </div>
              </div>
              @endforeach
    				</div>
    			</div>
          
    </section>
           
         @endsection  
       