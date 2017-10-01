<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this -> load -> model('employee_model');

	}
	
	public function index() {
		$data['header'] = 'template/header';
		$data['sidebar'] = 'template/sidebar';
		$data['main_content'] = 'addEmployee';
		$data['footer'] = 'template/footer';
		$this->load->view('template/template',$data);
	}

	/*public function index() {
	 $this -> load -> view('upload_form', array('error' => ' '));
	 }*/

	function functionToTestgetAndSaveEmployeeDetailsResult() {

		$result = $this -> getMaxIDFromEmployeeDetails();
		echo $result;
	}

	function getMaxIDFromEmployeeDetails() {
		$lastIdFromEmployeeTables = $this -> employee_model -> toGetMaximumIDFromEmployeeDetails();
		$dataFromUpdatedIdTable = $this -> employee_model -> toGetLastEmployeeID();
		$updatedIdinUpdatedIdTable = $dataFromUpdatedIdTable['employeeID'];
		if ($lastIdFromEmployeeTables == $updatedIdinUpdatedIdTable) {
			return $employee_id = $lastIdFromEmployeeTables + 1;
		} else {
			echo "There is some issue during previous entry";
			die();
		}
	}

	/*function getLastEmployeeID() {

	 $employeeData = $this -> employee_model -> toGetLastEmployeeID();
	 $employeeID = $employeeData['employeeID'];
	 $oldVersionBit = $employeeData['versionBit'];
	 $employeeID = $employeeID + 1;
	 $versionBit = 1;

	 $updateversionBitOfLastEmployeeAdded = $this -> employee_model -> updateIdOfLastEmployeeAddedAfterSucessfullEmployeeAddition($employeeID, $versionBit);
	 return $employeeID;

	 }*/

	public function do_upload($uploadedField, $employeeID) {

		//$uploadedField = $this -> input -> post('_hidden_field');
		if (empty($_FILES[$uploadedField]['name'])) {

			$error = "File is empty please choose a file";
			return $error;

		} else {
			//print_r($_FILES[$uploadedField]);
			//die();
			$name = '_' . $uploadedField;
			$config['file_name'] = $employeeID . $name;
			$config['upload_path'] = './uploads/' . $employeeID;
			$config['allowed_types'] = 'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp';
			$config['max_size'] = 2048;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this -> upload -> initialize($config);
			//$this -> load -> library('upload', $config);

			if (!is_dir('uploads')) {
				mkdir('./uploads', 0777, true);
			}
			$dir_exist = true;
			// flag for checking the directory exist or not
			if (!is_dir('uploads/' . $employeeID)) {
				mkdir('./uploads/' . $employeeID, 0777, true);
				$dir_exist = false;
				// dir not exist
			} else {

			}

			if (!$this -> upload -> do_upload($uploadedField)) {

				if (!$dir_exist)
					rmdir('./uploads/' . $employeeID);

				$error = array('error' => $this -> upload -> display_errors());
				return $error;

				//$this -> load -> view('upload_form', $error);
			} else {
				$data = array('upload_data' => $this -> upload -> data());
				//print_r($data);
				return $path = $data['upload_data']['full_path'];

				//$this -> load -> view('upload_success', $data);
			}
		}
	}

	function getAndSaveEmployeeDetails() {

		$employeeID = $this -> getMaxIDFromEmployeeDetails();

		echo $firstName = $this -> input -> post('firstName');

		echo $middleName = $this -> input -> post('middleName');

		$lastName = $this -> input -> post('lastName');

		$userName = $this -> input -> post('userName');

		$email = $this -> input -> post('email');

		$mobileNum = $this -> input -> post('mobileNum');

		$homePhone = $this -> input -> post('homePhone');
		
		$cnicNumber = $this -> input -> post('cnicNumber');

		$profilePic = 'profilePic';
		$profilePic = $this -> do_upload($profilePic, $employeeID);

		$resume = 'resume';
		$resume = $this -> do_upload($resume, $employeeID);

		$cnic = 'cnicScannedImage';
		$cnicScannedImage = $this -> do_upload($cnic, $employeeID);
		//die();
		$dob = $this -> input -> post('dob');

		$address = $this -> input -> post('address');

		$emergencyContactName = $this -> input -> post('emergencyContactName');

		$emergencyContactNumber = $this -> input -> post('emergencyContactNumber');

		$bloodGroup = $this -> input -> post('bloodGroup');

		$father_husbandName = $this -> input -> post('father_husbandName');

		$hireDate = $this -> input -> post('hireDate');

		$saveEmployeeBasicDetails = $this -> employee_model -> createEmployee($employeeID, $firstName, $middleName,$homePhone, $lastName, $userName, $email, $mobileNum, $cnicNumber, $dob, $address, $emergencyContactNumber, $emergencyContactName, $bloodGroup, $father_husbandName, $hireDate, $profilePic, $resume, $cnicScannedImage);

		if ($saveEmployeeBasicDetails == 1) {

			$employeeType = $this -> input -> post('employeeType');

			$department = $this -> input -> post('department');

			$designation = $this -> input -> post('designation');

			$supervisorID = $this -> input -> post('supervisorID');

			/*function call to save employe departmental details in departmen table*/

			$saveEmployeeDepartmentalDetails = $this -> employee_model -> createDepartment($employeeID, $department, $designation, $employeeType, $supervisorID);

			if ($saveEmployeeDepartmentalDetails == 1) {

				$salary = $this -> input -> post('salary');

				/*function call to save employe salary details in salary table*/
				$saveEmployeeSalaryDetails = $this -> employee_model -> createSalary($employeeID, $salary, $employeeType);

				/**/

				if ($saveEmployeeSalaryDetails == 1) {

					//$education = array(0 => array('employeeID' => '1005', 'instituteName' => 'FGCC Lahore', 'qualification' => 'SSC', 'admissionDate' => '01-03-2007', 'graduationDate' => '01-06-2009', 'degreeScannedImage' => '1004_SSC_Degree.pdf'), 1 => array('employeeID' => '1004', 'instituteName' => 'FGCC Lahore', 'qualification' => 'HSSC', 'admissionDate' => '01-07-2009', 'graduationDate' => '01-06-2011', 'degreeScannedImage' => '1004_HSSC_Degree.pdf'));

					$education = $this -> input -> post('education');
					//null;

					if (is_array($education) === true && count($education) > 0) {
						/*function call to save employe education details in education table*/

						$saveEmployeeEducationHistory = $this -> employee_model -> createEducation($education);

						/**/
					} else {
						// echo "no employee training data";
					}
					//$jobHistory = array(0 => array('employeeID' => '1004', 'company' => 'Techaccess', 'designation' => 'SupportEngineer', 'employmentStartDate' => '01-02-2015', 'employmentEndDate' => '01-03-2016', 'JobDescription' => 'xyz', 'experienceLetterScannedImage' => '1004_ExperiencedLetter_techacces.pdf'), 1 => array('employeeID' => '1004', 'company' => 'GlobizServ', 'designation' => 'SoftwareEngineer', 'employmentStartDate' => '01-02-2014', 'employmentEndDate' => '01-03-2015', 'JobDescription' => 'xyz', 'experienceLetterScannedImage' => '1004_ExperiencedLetter_GlobizServe.pdf'));
					$jobHistory = $this -> input -> post('jobHistory');
					//null;
					if (is_array($jobHistory) === true && count($jobHistory) > 0) {
						/*function call to save employe job history details in jobHistory table*/
						$saveEmployeejobHistory = $this -> employee_model -> createJobHistory($jobHistory);
						/**/
					} else {
						//echo "no employee job data";
					}

					//$training = array(0 => array('employeeID' => '1004', 'trainingInstituteName' => 'Technoed', 'trainingStartDate' => '10-03-2016', 'trainingEndDate' => '10-06-2016', 'ExamDate' => '11-11-2016', 'certificateScannedImage' => '1004_database_certificate.pdf', 'certificationName' => 'OCP'), 1 => array('employeeID' => '1004', 'trainingInstituteName' => 'Technoed', 'trainingStartDate' => '11-04-2016', 'trainingEndDate' => '01-01-2017', 'ExamDate' => '11-02-2017', 'certificateScannedImage' => '1004_linux_certificate.pdf', 'certificationName' => 'RHCE'), );

					$training = $this -> input -> post('training');
					//null;
					if (is_array($training) === true && count($training) > 0) {
						/*function call to save employe training details in training table*/
						$saveEmployeeTrainingHistory = $this -> employee_model -> createTraining($training);

						/**/
					} else {

					}

				} else {
					$tableName = 'employee_basic_details';
					$this -> employee_model -> deleteUnsuccessfullData($employeeID, $tableName);
					$tableName = 'employee_department_details';
					$this -> employee_model -> deleteUnsuccessfullData($employeeID, $tableName);
					$errorResponse = array("status" => "false", "msg" => $saveEmployeeSalaryDetails);
					$errorResponse = json_encode($errorResponse);
					$data = array('some_data' => $errorResponse);

					$this -> load -> view('upload_success', $data);
					//$this -> load -> view('upload_form', $errorResponse);
					//return $errorResponse;

				}
			} else {
				$tableName = 'employee_basic_details';
				$this -> employee_model -> deleteUnsuccessfullData($employeeID, $tableName);
				$errorResponse = array("status" => "false", "msg" => $saveEmployeeDepartmentalDetails);
				$errorResponse = json_encode($errorResponse);
				$data = array('some_data' => $errorResponse);

				$this -> load -> view('upload_success', $data);
				//return $errorResponse;

			}
			/*updating of last id of employee added*/
			$versionBit = 0;
			$updateIDOfLastEmployeeAdded = $this -> employee_model -> updateIdOfLastEmployeeAddedAfterSucessfullEmployeeAddition($employeeID, $versionBit);
			if ($updateIDOfLastEmployeeAdded == 1) {
				$successResponse = array("status" => "true", "msg" => "Teacher Successfully Added !!!");
				$successResponse = json_encode($successResponse);
				$data = array('some_data' => $successResponse);

				$this -> load -> view('upload_success', $data);
			} else {

				$errorResponse = array("status" => "false", "msg" => $updateIDOfLastEmployeeAdded);
				$errorResponse = json_encode($errorResponse);
				$data = array('some_data' => $errorResponse);

				$this -> load -> view('upload_success', $data);
				//return $errorResponse;

			}
		} else {

			$errorResponse = array("status" => "false", "msg" => $saveEmployeeBasicDetails);
			$errorResponse = json_encode($errorResponse);
			$data = array('some_data' => $errorResponse);
			$this -> load -> view('upload_success', $data);
			//return $errorResponse;

		}

	}

}
?>