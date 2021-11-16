<h1>Student edit</h1>

<form action ="{{route('students.update',$student->id)}}" method="POST">

   
    @csrf
    @method('PUT')
    <label for="first_name">First Name</label>
    <input type ="text" name="first_name" id="first_name" value="{{$student->first_name}}">
    <br><br>
    <label for="last_name">Last Name</label>
    <input type ="text" name="last_name" id="last_name" value="{{$student->last_name}}">
    <br><br>
    <label for="gender">Gender</label>
    <input type ="radio" name="gender" id="female" value="female"<?php if($student-> gender=="female"){ 
      echo "checked";
     } ?>>
    <label for="female">Female</label>
    <input type ="radio" name="gender" id="male" value="male"<?php if($student-> gender=="male"){ 
      echo "checked";
     } ?>>    <label for="male">Male</label>
    <br><br>
    <label for="grade">Grade</label>
<select name="grade" id="grade">
<option value="Grade1"<?php if($student-> grade=="Grade1"){ 
        echo "selected";
       } ?>>Grade1</option>
<option value="Grade2"<?php if($student-> grade=="Grade2"){ 
  echo "selected";
 } ?>>Grade2</option>
 <option value="Grade3"<?php if($student-> grade=="Grade3"){ 
  echo "selected";
 } ?>>Grade3</option>
 <option value="Grade4"<?php if($student-> grade=="Grade4"){ 
  echo "selected";
 } ?>>Grade4</option>
 <option value="Grade5"<?php if($student-> grade=="Grade5"){ 
  echo "selected";
 } ?>>Grade5</option>
</select>
    <br><br>
    <label for="address">Address</label>
    <textarea name="address" id="address">{{{$student->address}}} </textarea>
    <br><br>

    {{ $student->subject}}
    <?php $subject=explode(',',$student->subject)?>
    {{-- <?php print_r($subject) ?> --}}
    <label for="subject">Subjects</label><br>
    <input type="checkbox" id="Maths" name="subject[]" value="Maths"<?php
        if(in_Array('Maths',$subject)){
          echo'checked';
        }
        ?> >
        <label for="Maths"> Maths</label>

    <input type="checkbox" id="English" name="subject[]" value="English"<?php
        if(in_Array('English',$subject)){
          echo'checked';
    }
    ?> >
    <label for="English"> English</label>
    <input type="checkbox" id="Tamil" name="subject[]" value="Tamil"<?php
        if(in_Array('Tamil',$subject)){
       echo'checked';
    }
    ?> >
<label for="Tamil"> Tamil</label>

<br>  <br>
    <label for="dob">Date of Birth</label>
    <input type ="date" name="dob" id="dob" value="{{$student->dob}}">  
    <br><br>
    <label for="email">Email</label>
    <input type ="email" name="email" id="email" value="{{$student->email}}">
    <br><br>
    <label for="mobile">Mobile Number</label>
    <input type ="tel" name="mobile" id="mobile" value="{{$student->mobile}}">
    <br><br>
    <label for="image">Select image</label>
    <input type="file" id="image" name="image" accept="image/*">

    <br><br>
    <input type="submit" value ="save">
</form>