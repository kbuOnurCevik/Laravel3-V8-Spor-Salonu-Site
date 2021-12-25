@foreach($children as $subcategory)

    <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a></li>

@endforeach
