<x-layout>
  <x-slot:titel>
    {{$titel}}    
  </x-slot:titel>
  <x-slot:arr>
    @foreach ($arr as $item)
        <h2>{{$item->title}}</h2>
    @endforeach
  </x-slot:arr>  
  {{$name}}  
	{{$content}}
</x-layout>