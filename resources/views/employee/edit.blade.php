<h1>Employee edit</h1>

<form action ="{{route('employees.update',$employee->id)}}" method="POST">

    @csrf
    @method('put')
    <label for="fname">First Name</label>
    <input type ="text" name="first_name" id="first_name" value="{{$employee->first_name}}">
    <br>  <br>
    <label for="lname">Last Name</label>
    <input type ="text" name="last_name" id="last_name" value="{{$employee->last_name}}">
    <br>  <br>
    <label for="dob">Date of Birth</label>
    <input type ="date" name="dob" id="dob">  
    <br>  <br>
    <label for="basic_salary">Basic Salary</label>
    <input type ="number" name="basic_salary" id="basic_salary">

<br>  <br>
    <input type="submit" value ="save">
</form>