@extends('parent')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
 <th width="5%">ID</th>
  <th width="20%">profielfoto</th>
  <th width="35%">Voornaam</th>
  <th width="35%">Achternaam</th>
  <th width="35%">Functie</th>
  <th width="35%">Contract</th>
  <th width="35%">Laten zien</th>
  <th width="35%">Updaten</th>
  <th width="35%">Verwijderen</th>
 </tr>
 <a href="{{ route('home') }}" class="btn btn-default">terug naar home</a>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->id }}</td>
   <td><img src="{{ URL::to('/create') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>{{ $row->function }}</td>
   <td>{{ $row->contract }}</td>
   <td> <a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Laten zien</a></td>
   <td> <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Updaten</a></td>  
   <td> <form action="{{ route('crud.destroy', $row->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Verwijderen</button></td> 
    </form> 
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection