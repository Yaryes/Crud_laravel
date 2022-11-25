<x-layouts.app>
    <x-slot name="title">Equipos</x-slot> 
    <h1>Equipos</h1>
        @foreach($equipo as $equipos)
        <h5>{{ $equipos->title }}</h5>
        @endforeach
</x-layouts.app>
