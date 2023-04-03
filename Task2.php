<html>
	<h1>Task 2</h1>
	<h1>Application name : PHP class registration</h1>
	<?php
$students = [
    ['name' =>
	'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'], ['name' => 'Shamy',
	'email' => 'ali@test.com', 'status' => 'OS'], ['name' => 'Youssef', 'email' =>
	'basem@test.com', 'status' => 'OS'], ['name' => 'Waleid', 'email' =>
	'farouk@test.com', 'status' => 'CMS'], ['name' => 'Rahma', 'email' =>
	'hany@test.com', 'status' => 'OS'] ]; ?>
	<table>
		<tr>
			<th>Name</th>
            <th>Email</th>
            <th>Status</th>
		</tr>
        <?php
        for($x = 0; $x< count($students); $x++){
                if($students[$x]['status'] == 'CMS'){
                    echo "<tr style='color: red;'> <td>".$students[$x]['name']. "</td> <td>". $students[$x]['email']."</td> <td>". $students[$x]['status'] ."</td></tr>";
                }else{
                   echo "<tr'> <td>".$students[$x]['name']. "</td> <td>". $students[$x]['email']."</td> <td>". $students[$x]['status'] ."</td></tr>";

                }
            }
        
        
        ?>
	</table>
</html>
