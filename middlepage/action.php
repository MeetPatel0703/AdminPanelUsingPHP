<?php
include 'config.php'; ?>

<?php
if ($_REQUEST['action']) {

	$action = $_REQUEST['action'];
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['pwd'];


	switch ($action) {
		case 'insert':
			$insert = "insert into `register`(`name`,`email`,`password`)values('" . $name . "','" . $email . "','" . $password . "')";
			$qry = mysqli_query($conn, $insert);
			if ($qry) {
				echo "Record Inserted Successfull";
				header("Location:index.php?page=tables");
			} else {
				echo "Record not insreted...";
			}
			break;

		case 'delete':
			$delete = "delete from `register` where `id`='" . $id . "'";
			$qry = mysqli_query($conn, $delete);
			if ($qry) {
				echo "Record deleteed Successfull";
				header("Location:index.php?page=tables");
			} else {
				echo "Record Not Deleted...";
			}
			break;

		case 'update':
			$update = "UPDATE `register` SET `name`='" . $name . "',`email`='" . $email . "',`password`='" . $password . "' WHERE `id`='" . $id . "'";
			$qry = mysqli_query($conn, $update);
			if ($qry) {
				echo "Record Updated Successfull";
				header("Location:index.php?page=tables");
			} else {
				echo "Record Not Updated...";
			}
			break;

		default:
			echo "Enter Valid Choice...";
			break;
	}
} ?>
<?php
include 'tables.php'; ?>