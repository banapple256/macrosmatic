<?php
class Employee_model extends CI_Model {

	function createEmployee($employeeID, $firstName, $middleName, $lastName, $userName, $email, $mobileNum, $homePhone, $cnicNumber, $dob, $address, $emergencyContactNumber, $emergencyContactName, $bloodGroup, $father_husbandName, $hireDate, $profilePic, $resume, $cnicScannedImage) {

		$status = $this -> db -> insert('employee_basic_details', array('employeeID' => $employeeID, 'firstName' => $firstName, 'middleName' => $middleName, 'lastName' => $lastName, 'userName' => $userName, 'email' => $email, 'mobileNum' => $mobileNum, 'cnicNumber' => $cnicNumber, 'homePhone' => $homePhone, 'dob' => $dob, 'address' => $address, 'emergencyContactName' => $emergencyContactName, 'emergencyContactNumber' => $emergencyContactNumber, 'bloodGroup' => $bloodGroup, 'father_husbandName' => $father_husbandName, 'hireDate' => $hireDate, 'profilePic' => $profilePic, 'resume' => $resume, 'cnicScannedImage' => $cnicScannedImage));
		if ($status) {
			return $status;
		} else {
			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;
		}
	}

	function createDepartment($employeeID, $department, $designation, $employeeType, $supervisorID) {

		$status = $this -> db -> insert('employee_department_details', array('employeeID' => $employeeID, 'department' => $department, 'designation' => $designation, 'employeeType' => $employeeType, 'supervisorID' => $supervisorID));
		if ($status) {

			return $status;
		} else {

			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;
		}
	}

	function createSalary($employeeID, $salary, $employeeType) {

		$status = $this -> db -> insert('employee_salary_details', array('employeeID' => $employeeID, 'employeeType' => $employeeType, 'Salary' => $salary));
		if ($status) {
			return $status;
		} else {
			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;
		}

	}

	function createJobHistory($jobHistory) {

		foreach ($jobHistory as $a) {
			$data = array('employeeID' => $a['employeeID'], 'company' => $a['company'], 'designation' => $a['designation'], 'employmentStartDate' => $a['employmentStartDate'], 'employmentEndDate' => $a['employmentEndDate'], 'JobDescription' => $a['JobDescription'], 'experienceLetterScannedImage' => $a['experienceLetterScannedImage']);

			$save = $this -> db -> insert('employee_job_history', $data);
			/*echo "<pre>";
			 print_r($data);
			 echo "<pre>";
			 echo "ends here";*/

			if ($save) {
				return $save;
			} else {
				$error = $this -> db -> error();

				// If an error occurred, $error will now have 'code' and 'message' keys...
				if (isset($error['message'])) {
					return $error['message'];
				}

				// No error returned by the DB driver...
				return null;
			}
		}
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

		if ($save) {
			return $save;
		} else {
			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;
		}
	}

	function createTraining($training) {

		foreach ($training as $a) {
			$data = array('employeeID' => $a['employeeID'], 'trainingInstituteName' => $a['trainingInstituteName'], 'trainingStartDate' => $a['trainingStartDate'], 'trainingEndDate' => $a['trainingEndDate'], 'ExamDate' => $a['ExamDate'], 'certificateScannedImage' => $a['certificateScannedImage'], 'certificationName' => $a['certificationName']);

			$save = $this -> db -> insert('employee_trainings_history', $data);
			/*echo "<pre>";
			 print_r($data);
			 echo "<pre>";
			 echo "ends here";*/

			if ($save) {
				return $save;
			} else {
				$error = $this -> db -> error();

				// If an error occurred, $error will now have 'code' and 'message' keys...
				if (isset($error['message'])) {
					return $error['message'];
				}

				// No error returned by the DB driver...
				return null;
			}
		}
	}

	function updateIdOfLastEmployeeAddedAfterSucessfullEmployeeAddition($employeeID, $versionBit) {

		$update_data = array('employeeID' => $employeeID, 'versionBit' => $versionBit);
		$this -> db -> where('id', 1);
		$query = $this -> db -> update('id_of_last_employee_added', $update_data);
		if ($query) {
			return $query;
		}

		// It may be that $deal_id wasn't found,
		// but we can check for an error, anyway.
		$error = $this -> db -> error();

		// If an error occurred, $error will now have 'code' and 'message' keys...
		if (isset($error['message'])) {
			return $error['message'];
		}

		// No error returned by the DB driver...
		return null;
	}

	function toGetLastEmployeeID() {
		$id = 1;
		$queryString = "SELECT employeeID,versionBit FROM id_of_last_employee_added WHERE id= ?";
		$result = $this -> db -> query($queryString, $id);
		if ($result -> num_rows() == 1) {

			$row = $result -> row();
			$data = array('employeeID' => $row -> employeeID, 'versionBit' => $row -> versionBit);

			return $data;

		} else {

			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;
		}
	}

	function deleteUnsuccessfullData($employeeID, $tableName) {
		$this -> db -> where('employeeID', $employeeID);
		$result = $this -> db -> delete('users');
		if ($result) {
			return $result;
		}
		$error = $this -> db -> error();

		// If an error occurred, $error will now have 'code' and 'message' keys...
		if (isset($error['message'])) {
			return $error['message'];
		}

		// No error returned by the DB driver...
		return null;

	}

	function toGetMaximumIDFromEmployeeDetails() {

		$maxid = 0;
		$lastEmployeeBasicDetailsID;
		$lastSalaryID;
		$lastDepartmentID;
		$queryString = "SELECT MAX(employeeID) AS `maxid` FROM employee_basic_details";
		$result = $this -> db -> query($queryString);
		if ($result -> num_rows() == 1) {

			$row = $result -> row();
			$lastEmployeeBasicDetailsID = $row -> maxid;

		} else {

			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;

		}
		$queryString = "SELECT MAX(employeeID) AS `maxid` FROM employee_department_details";
		$result = $this -> db -> query($queryString);
		if ($result -> num_rows() == 1) {

			$row = $result -> row();
			$lastDepartmentID = $row -> maxid;

		} else {

			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;

		}
		$queryString = "SELECT MAX(employeeID) AS `maxid` FROM employee_salary_details";
		$result = $this -> db -> query($queryString);
		if ($result -> num_rows() == 1) {

			$row = $result -> row();
			$lastSalaryID = $row -> maxid;

		} else {

			$error = $this -> db -> error();

			// If an error occurred, $error will now have 'code' and 'message' keys...
			if (isset($error['message'])) {
				return $error['message'];
			}

			// No error returned by the DB driver...
			return null;

		}

		if (($lastEmployeeBasicDetailsID === $lastSalaryID) && ($lastSalaryID === $lastDepartmentID)) {

			return $lastUpdatedId = $lastEmployeeBasicDetailsID;
		} else {
			return "there must be data missing in child tables";
		}

	}

}
