@extends('parent')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
 <th width="5%">ID</th>
  <th width="20%">Image</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
 </tr>
 <a href="{{ route('home') }}" class="btn btn-default">Back</a>
 @foreach($data as $row)
  <tr>
  <td>{{ $row->id }}</td>
   <td><img src="{{ URL::to('/create') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection