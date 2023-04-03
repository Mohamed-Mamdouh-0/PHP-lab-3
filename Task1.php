<html>
    <h1>Task 1</h1>
	<h1>Application name :AAST_BIS class registration</h1>
	<p style="color: red">* Required field</p>
<?php
$nameErr = $emailErr = $termsErr = $genderErr = "";
$name = $email = $gender = $terms = $groupNumb = $formTextArea = "";
$courses = [];

    if (empty($_GET["form-name"])) {
      $nameErr = "Name is required";
    } else {
        $nameErr = "";
    }
    
    if (empty($_GET["form-email"])) {
      $emailErr = "Email is required";
    } else {
        $emailErr = "";
    }
      
    if (empty($_GET["form-gender"])) {
      $genderErr = "Gender is required";
    } else {
        $genderErr = "";
    }
  
    if (empty($_GET["form-terms"])) {
      $termsErr = "You must agree to terms";
    } else {
        $termsErr = "";
    }
  
//     $groupNumb = $_GET["form-group"];
//    $formTextArea = $_GET["form-textArea"];
//     $courses = $_GET["form-courses[]"];
    
if(!empty($_GET["form-name"]) && !empty($_GET["form-email"])  && !empty($_GET["form-gender"]) && !empty($_GET["form-terms"])) {
    $name = $_GET["form-name"];
    $email= $_GET["form-email"];
    $gender = $_GET["form-gender"];
    $terms = $_GET["form-terms"];
    $groupNumb = $_GET["form-group"];
    $formTextArea = $_GET["form-textArea"];
    $courses = $_GET["form-courses"];

 }

?>
	<form
		style="display: flex; gap: 5px; flex-direction: column"
		action="<?php $_PHP_SELF ?>"
		method="GET">
		<div>
			<span style="min-width: 150px; display: inline-flex">Name</span>
			<input type="text" name="form-name" style="min-width: 200px" />
        <span style='color:red;'><?php echo $nameErr; ?></span>
		</div>

		<div>
			<span style="min-width: 150px; display: inline-flex">E-mail</span>
			<input type="email" name="form-email" style="min-width: 200px" />
            <span style='color:red;'><?php echo $emailErr; ?></span>
		</div>

		<div>
			<span style="min-width: 150px; display: inline-flex">Group #</span>
			<input type="number" name="form-group" style="min-width: 200px" />
		</div>
		<div style="display: flex; align-items: center">
			<span style="min-width: 150px; display: inline-flex; align-items: center"
				>Class Details:</span
			><textarea name="form-textArea" cols="30" rows="10"></textarea>
		</div>
		<div>
			<span style="min-width: 150px; display: inline-flex">Gender</span>
			<input type="radio" name="form-gender" id="gender-female" value="female"/><label
				for="gender-female"
				>Female</label
			>
			<input type="radio" id="gender-male" name="form-gender" value="male"/><label
				for="gender-male"
				>Male</label
			>
            <span style='color:red;'><?php echo $genderErr; ?></span>
		</div>
		<div style="display: flex; align-items: center">
			<span style="min-width: 150px; display: inline-flex">Select Courses:</span>

			<select name="form-courses[]" multiple>
				<option value="PHP">PHP</option>
				<option value="JavaScript">Java Script</option>
				<option value="MySQL">MySQL</option>
				<option value="HTML">HTML</option>
			</select>
		</div>
		<div>
            <span style="min-width: 150px; display: inline-flex">Agree :</span>
			<input type="checkbox" name="form-terms"/>
            <span style='color:red;'><?php echo $termsErr; ?></span>
		</div>
		<button type="submit" style="width:100px;">Submit</button>
	</form>
	<h1>Your given values are :</h1>
	<br />
    <p> Name : <?php echo $name; ?><p>
    <p> E-mail : <?php echo $email; ?><p>
    <p> Group # : <?php echo $groupNumb; ?><p>
    <p> Class details : <?php echo $formTextArea; ?><p>
    <p> Gender : <?php echo $gender; ?><p>
    <p> your courses are : <?php foreach($courses as $key=>$value){
        echo $value ." ,";
    } ?><p>
</html>
