<?php
function getEmployeeDetails() {

		$employeeID='1004';
		$firstName='Sufian';
		$middleName='';
		$lastName='Qayyum';
		$userName='qs02';
		$email='qsufian@gmail.com';
		$mobileNum='03455895007';
		$cnicNumber='33105-1244965-7';
		$dob='28-02-1992';
		$address='6/3-d cat # IV, Sector I-8/1, Islamabad';
		$emergencyContactName='Sheraz Hashmi';
		$emergencyContactNumber='03135446302';
		$bloodGroup='B-';
		$father_husbandName='Abdul Qayyum';
		$hireDate='02-09-2017';
		$profilePic='1004_profile_pic.jpeg';
		$resume='1004_resume.pdf';
		$cnicScannedImage='1004_cnic.jpeg';
		$education = array(0 => array('employeeID'=>'1004','instituteName' => 'FGCC Lahore', 'qualification'=>'SSC',
		'admissionDate' => '01-03-2007','graduationDate'=>'01-06-2009','degreeScannedImage'=>'1004_SSC_Degree.pdf'), 
		1 => array('employeeID'=>'1004','instituteName' => 'FGCC Lahore', 'qualification'=>'HSSC','admissionDate' => '01-07-2009',
		'graduationDate'=>'01-06-2011','degreeScannedImage'=>'1004_HSSC_Degree.pdf') 
		);
		$jobHistory = array(0 => array('employeeID' => '1004', 'company' => 'Techaccess','designation'=>'SupportEngineer',
		'employmentStartDate'=>'01-02-2015','employmentEndDate'=>'01-03-2016','JobDescription'=>'xyz',
		'experienceLetterScannedImage'=>'1004_ExperiencedLetter_techacces.pdf'), 
		1 => array('employeeID' => '1004', 'company' => 'GlobizServ','designation'=>'SoftwareEngineer',
		'employmentStartDate'=>'01-02-2014','employmentEndDate'=>'01-03-2015','JobDescription'=>'xyz',
		'experienceLetterScannedImage'=>'1004_ExperiencedLetter_GlobizServe.pdf') 
		);
		$employeeType='Permanent';
		$department='Technical';
		$designation='Engineer';
		$supervisor='109';  //admin will select name from a drop down list and on backend we will store id.
        $salary='30000';
		$training = array(0 => array('employeeID'=>'1004','instituteName' => 'Technoed', 'trainingStartDate'=>'10-03-2016',
		'trainingEndDate' => '10-06-2016','ExamDate'=>'11-11-2016','certificateScannedImage'=>'1004_database_certificate.pdf','certificationName'=>'OCP'), 
		1 => array('employeeID'=>'1004','instituteName' => 'Technoed', 'trainingStartDate'=>'11-04-2016',
		'trainingEndDate' => '01-01-2017','ExamDate'=>'11-02-2017','certificateScannedImage'=>'1004_linux_certificate.pdf','certificationName'=>'RHCE'), 
		);
		
		
	}
?>