<x-country.layout>
  <x-slot:papers>
    @foreach ($country as $item)
        <h1>{{$item}}</h1>
    @endforeach
  </x-slot:papers>
  <x-slot:titel>
    {{$title}}
  </x-slot:titel>  
</x-country.layout>
