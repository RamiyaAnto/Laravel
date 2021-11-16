<html>
    <body>
<h1>Employee index</h1>


<br>
{{-- {{$employees}} --}}
<br>
@foreach ($employees as $employee)
    {{$employee->id}}
    {{$employee->first_name}}
    {{$employee->last_name}}
    <br>
@endforeach
<table border="1">
    @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td><a href ="{{route('employees.show',$employee->id)}}">Show</a></td>
            <td><a href ="{{route('employees.edit',$employee->id)}}">Edit</a></td>
            <td>
                <form action="{{route('employees.destroy',$employee->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
                </form>
                </tr>
    @endforeach
</table>
</body>
</html>