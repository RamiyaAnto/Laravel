<h1>Student create</h1>

<form action ="{{route('students.store')}}" method="POST">

    @csrf
    <label for="fname">First Name</label>
    <input type ="text" name="fname" id="fname">
    <br>
    <label for="lname">Last Name</label>
    <input type ="text" name="lname" id="lname">

    <input type="submit" value ="save">
</form>