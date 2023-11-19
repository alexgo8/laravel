<x-salary.layout>
  <x-slot:papers>
    @foreach ($papers as $item)
        <h1>{{$item->title}}</h1>
    @endforeach
  </x-slot:papers>
  <x-slot:titel>
    {{$name}}
  </x-slot:titel>
  <x-slot:myname>
    {{$name}}
  </x-slot:myname>
    {{ $age }}
    {{ $name }}
    {{ $salary }}
</x-salary.layout>
