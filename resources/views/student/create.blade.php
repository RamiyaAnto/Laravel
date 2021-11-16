<h1>Student create</h1>

<form action ="{{route('students.store')}}" method="POST">

    @csrf
    <label for="first_name">First Name</label>
    <input type ="text" name="first_name" id="first_name">
    <br><br>
    <label for="last_name">Last Name</label>
    <input type ="text" name="last_name" id="last_name">
    <br><br>
    <label for="gender">Gender</label>
    <input type ="radio" name="gender" id="female" value="female">    <label for="female">Female</label>
    <input type ="radio" name="gender" id="male" value="male" >    <label for="male">Male</label>
    <br><br>
    <label for="grade">Grade</label>
<select name="grade" id="grade">
  <option value="Grade1">Grade1</option>
  <option value="Grade2">Grade2</option>
  <option value="Grade3">Grade3</option>
  <option value="Grade4">Grade4</option>
  <option value="Grade5">Grade5</option>
</select>
    <br><br>
    <label for="address">Address</label>
    <textarea name="address" id="address"> </textarea>
    <br><br>
    <label for="subject">Subject</label><br>
    <input type="checkbox" id="subject1" name="subject[]" value="Maths">
    <label for="subject1"> Maths</label><br>    
    <input type="checkbox" id="subject2" name="subject[]" value="English">
    <label for="subject2"> English</label><br>
    <input type="checkbox" id="subject3" name="subject[]" value="Tamil">
    <label for="subject3"> Tamil</label>
    <br>  <br>
    <label for="dob">Date of Birth</label>
    <input type ="date" name="dob" id="dob">  
    <br><br>
    <label for="email">Email</label>
    <input type ="email" name="email" id="email">
    <br><br>
    <label for="mobile">Mobile Number</label>
    <input type ="tel" name="mobile" id="mobile">
    <br><br>
    <label for="image">Select image</label>
    <input type="file" id="image" name="image" accept="image/*">

    <br><br>
    <input type="submit" value ="save">
</form>