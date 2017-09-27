<?php
class Employee_model extends CI_Model {

	function createEmployee($employeeID, $firstName, $middleName, $lastName, $userName, $email, $mobileNum, $cnicNumber, $dob, $address, $emergencyContactNumber, $emergencyContactName, $bloodGroup, $father_husbandName, $hireDate, $profilePic, $resume, $cnicScannedImage) {

		$dob = date("Y-m-d", strtotime($dob));
		$hireDate = date("Y-m-d", strtotime($hireDate));
		//echo $dob;

		$status = $this -> db -> insert('employee_basic_details', array('employeeID' => $employeeID, 'firstName' => $firstName, 'middleName' => $middleName, 'lastName' => $lastName, 'userName' => $userName, 'email' => $email, 'mobileNum' => $mobileNum, 'cnicNumber' => $cnicNumber, 'dob' => $dob, 'address' => $address, 'emergencyContactName' => $emergencyContactName, 'emergencyContactNumber' => $emergencyContactNumber, 'bloodGroup' => $bloodGroup, 'father_husbandName' => $father_husbandName, 'hireDate' => $hireDate, 'profilePic' => $profilePic, 'resume' => $resume, 'cnicScannedImage' => $cnicScannedImage));
		return $status;
	}

	function createDepartment($employeeID, $department, $designation, $employeeType, $supervisorID) {

		$status = $this -> db -> insert('employee_department_details', array('employeeID' => $employeeID, 'department' => $department, 'designation' => $designation, 'employeeType' => $employeeType, 'supervisorID' => $supervisorID));
		return $status;
	}

	function createSalary($employeeID, $salary, $employeeType) {

		$status = $this -> db -> insert('employee_salary_details', array('employeeID' => $employeeID, 'employeeType' => $employeeType, 'Salary' => $salary));
		return $status;

	}

	function createJobHistory($jobHistory) {

		foreach ($jobHistory as $a) {
			$data = array('employeeID' => $a['employeeID'], 'company' => $a['company'], 'designation' => $a['designation'], 'employmentStartDate' => $a['employmentStartDate'], 'employmentEndDate' => $a['employmentEndDate'], 'JobDescription' => $a['JobDescription'], 'experienceLetterScannedImage' => $a['experienceLetterScannedImage']);

			$save = $this -> db -> insert('employee_job_history', $data);
			/*echo "<pre>";
			 print_r($data);
			 echo "<pre>";
			 echo "ends here";*/
		}

		return $save;

	}

	function createEducation($education) {

		foreach ($education as $a) {
			$data = array('employeeID' => $a['employeeID'], 'instituteName' => $a['instituteName'], 'qualification' => $a['qualification'], 'admissionDate' => $a['admissionDate'], 'graduationDate' => $a['graduationDate'], 'degreeScannedImage' => $a['degreeScannedImage']);

			$save = $this -> db -> insert('employee_education_history', $data);
			/*echo "<pre>";
			 print_r($data);
			 echo "<pre>";
			 echo "ends here";*/
		}

		return $save;
	}

	function createTraining($training) {

		foreach ($training as $a) {
			$data = array('employeeID' => $a['employeeID'], 'trainingInstituteName' => $a['trainingInstituteName'], 'trainingStartDate' => $a['trainingStartDate'], 'trainingEndDate' => $a['trainingEndDate'], 'ExamDate' => $a['ExamDate'], 'certificateScannedImage' => $a['certificateScannedImage'], 'certificationName' => $a['certificationName']);

			$save = $this -> db -> insert('employee_trainings_history', $data);
			/*echo "<pre>";
			 print_r($data);
			 echo "<pre>";
			 echo "ends here";*/
		}

		return $save;
	}

	function updateIdOfLastEmployeeAddedAfterSucessfullEmployeeAddition($employeeID,$versionBit) {

		$update_data = array('employeeID' => $employeeID, 'versionBit' => $versionBit);
		$this -> db -> where('id', 1);
		$this -> db -> update('id_of_last_employee_added', $update_data);
	}

	function toGetLastEmployeeID() {
		$id = 1;
		$queryString = "SELECT employeeID,versionBit FROM id_of_last_employee_added WHERE id= ?";
		$result = $this -> db -> query($queryString, $id);
		if ($result -> num_rows() == 1) {

			$row = $result -> row();
			$data = array('employeeID' => $row -> employeeID,'versionBit'=>$row->versionBit);
			
			return $data;
			

		}
	}

}
