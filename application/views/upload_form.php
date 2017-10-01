<html>
	<head>
		<title>Upload Form</title>
	</head>
	<body>

	

		<?php echo form_open_multipart('employee/getAndSaveEmployeeDetails'); ?>

		profilePIC:
		<input type="file" name="profilePic" />

		<br />
		<br />
		<?php echo form_hidden('_hidden_field', 'profilePic'); ?>
		First Name:
		<input type="text" name="firstName">
		<br>
		<br>
		Middle Name:
		<input type="text" name="middleName">
		<br>
		<br>
		Last Name:
		<input type="text" name="lastName">
		<br>
		<br>
		userName:
		<input type="text" name="userName">
		<br>
		<br>
		email
		<input type="text" name="email">
		<br>
		<br>
		mobileNum
		<input type="text" name="mobileNum">
		<br>
		<br>
		cnicNumber
		<input type="text" name="cnicNumber">
		<br>
		<br>
		dob
		<input type="text" name="dob">
		<br>
		<br>
		address
		<input type="text" name="address">
		<br>
		<br>
		emergencyContactName
		<input type="text" name="emergencyContactName">
		<br>
		<br>
		emergencyContactNumber
		<input type="text" name="emergencyContactNumber">
		<br>
		<br>
		bloodGroup
		<input type="text" name="bloodGroup">
		<br>
		<br>
		father_husbandName
		<input type="text" name="father_husbandName">
		<br>
		<br>
		resume:
		<input type="file" name="resume" />
		<br>
		<br>
		cnicScannedImage
		<input type="file" name="cnicScannedImage">
		<br>
		<br>
		employeeType
		<input type="text" name="employeeType">
		<br>
		<br>
		department
		<input type="text" name="department">
		<br>
		<br>
		designation
		<input type="text" name="designation">
		<br>
		<br>
		supervisorID
		<input type="text" name="supervisorID">
		<br>
		<br>
		salary
		<input type="text" name="salary">
		<br>
		<br>
			Hiredate:
		<input type="text" name="hireDate">
		<br>
		<br>
		<input type="submit" value="upload" />
		<!--
		</form>
		<?php echo form_open_multipart('employee/do_upload');?>

		<input type="file" name="cnicScannedImage" size="20" />

		<br /><br />
		<?php echo form_hidden('_hidden_field','cnicScannedImage');?>
		<input type="submit" value="upload" />

		</form>
		<?php echo form_open_multipart('employee/do_upload');?>

		<input type="file" name="resume" size="20" />

		<br /><br />
		<?php echo form_hidden('_hidden_field','resume');?>
		<input type="submit" value="upload" />
		-->
		</form>

	</body>
</html>