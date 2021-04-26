
@extends("master")
@section("content")
<div class="custom-product">
   <div class="col-sm-4">
       <a href="#">Filter Search(Comming soon)</a>
   </div>
   <div class="col-sm-4">
    <div class="trending-wrapper">
        <h4>Search Results</h4><br>
        
        @foreach ($products as $item)
        @if($item == [] || $item == "")
           <p>Hello</p>
          
         
          @else
        <div class="searched-item">
          <a href="detail/{{$item["id"]}}">
          <img class="trending-image" src="{{$item['gallery']}}">
     <div class="item-desc">
             <h2>{{$item["name"]}}</h2>
             <h5>{{$item["description"]}}</h5>
           
     </div>
      </a>
  </div>
@endif
 @endforeach

</div>
   </div>
</div>
@endsection