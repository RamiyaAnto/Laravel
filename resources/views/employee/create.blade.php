<h1>Employee create</h1>

<form action ="{{route('employees.store')}}" method="POST">

    @csrf
    <label for="fname">First Name</label>
    <input type ="text" name="fname" id="fname">
    <br>  <br>
    <label for="lname">Last Name</label>
    <input type ="text" name="lname" id="lname">
    <br>  <br>
    <label for="dob">Date of Birth</label>
    <input type ="date" name="dob" id="dob">  
    <br>  <br>
    <label for="basic_salary">Basic Salary</label>
    <input type ="number" name="basic_salary" id="basic_salary">

<br>  <br>
    <input type="submit" value ="save">
</form>