<?php 

include('include/database.php');
if($_POST['Country_Id'])
{
	$id=$_POST['Country_Id'];
	$state_query=mysqli_query($conn,"select * from states where country_id='$id'");
	?>
    <option selected="selected">Select State :</option><?php
	while($row=mysqli_fetch_array($state_query))
	{
		?>
        	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php
	}
}
if($_POST['State_Id'])
{
	$id=$_POST['State_Id'];
	$state_query=mysqli_query($conn,"select * from cities where state_id='$id'");
	?>
    <option selected="selected">Select City :</option><?php
	while($row=mysqli_fetch_array($state_query))
	{
		?>
        	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php
	}
}
?>