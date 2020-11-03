@extends('blogs.layout')
 
@section('content')
    <div class="row">
        
   
    
    <table class="table table-bordered">
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>NIC</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->nic }}</td>

            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
  
    {!! $data->appends(Request::all())->links() !!}
    </div>

@endsection