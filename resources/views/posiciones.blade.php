<x-layouts.app>
    <x-slot name="title">Posiciones</x-slot> 
    <h1>Posiciones</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Equipos</th>
      <th scope="col">Ranking</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">
          @foreach($equipo as $equipos)
          <h5>{{ $equipos->title }}</h5>
          @endforeach
        </th>
        <td>
          @foreach($posicion as $posiciones)
          <h5>{{ $posiciones->ranking }}</h5>
          @endforeach
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>@twitter</td>
    </tr>
  </tbody>
</table>

</x-layouts.app>