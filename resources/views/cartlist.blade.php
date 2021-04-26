@extends("master")
@section("content")
<div class="custom-product">
   <div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>Product in cart</h4><br>
        @foreach ($products as $item)
        <div class="row searched-item cart-list-divider">
        <div class="col-sm-3">
           
                <img class="trending-image" src="{{$item->gallery}}">

         
        </div>
        <div class="col-sm-4">
            
           <div class="item-desc">
                   <h2>{{$item->name}}</h2>
                   <h5>{{$item->description}}</h5>
                 
           </div>
        
        </div>
        <div class="col-sm-3">
            
           <div class="item-desc">
                   <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                 
           </div>
           
        </div>
  </div>
 @endforeach
</div>
   </div>
</div>
@endsection