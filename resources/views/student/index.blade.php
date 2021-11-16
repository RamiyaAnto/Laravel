<html>
    <body>
<h1>Student index</h1>
<a href ="{{route('students.create')}}">Create</a>

<br>
<br>
{{-- @foreach ($students as $student)
    {{$student->id}}
    {{$student->first_name}}
    {{$student->last_name}}
    {{$student->gender}}
    {{$student->grade}}
    {{$student->address}}
    {{$student->subject}}
    {{$student->dob}}
    {{$student->email}}
    {{$student->mobile}}
    {{$student->image}}
    <br>
@endforeach --}}
<table border="1">
    @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->grade}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->subject}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->image}}</td>
            <td><a href ="{{route('students.show',$student->id)}}">Show</a></td>
            <td><a href ="{{route('students.edit',$student->id)}}">Edit</a></td>
            <td>
                <form action="{{route('students.destroy',$student->id)}}" onclick="return confirm('Are you sure?')" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete"  >
                </form>
                </tr>
    @endforeach
</table>
</body>
</html>