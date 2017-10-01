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

	function functionToTestgetAndSaveEmployeeDetailsResult() {

		$result = $this -> getAndSaveEmployeeDetails();
		print_r($result);
	}

	function getLastEmployeeID() {
		 $employeeData=$this -> employee_model -> toGetLastEmployeeID();
		 $employeeID=$employeeData['employeeID'];
		 $oldVersionBit=$employeeData['versionBit'];
		 $versionBit=1;
		 $updateversionBitOfLastEmployeeAdded = $this -> employee_model -> updateIdOfLastEmployeeAddedAfterSucessfullEmployeeAddition($employeeID,$versionBit);
		 $employeeID=$employeeID+1;
		 return $employeeID;
	
	}

	function getAndSaveEmployeeDetails() {

		$employeeID = $this -> input -> post('$employeeID');
		//'1005';
		$firstName = $this -> input -> post('$firstName');
		//'Bilal';
		$middleName = $this -> input -> post('$middleName');
		//'';
		$lastName = $this -> input -> post('$lastName');
		//'Zafar';
		$userName = $this -> input -> post('$userName');
		//'zb02';
		$email = $this -> input -> post('$email');
		//'qbilal@gmail.com';
		$mobileNum = $this -> input -> post('$mobileNum');
		//'03331524155';
		$cnicNumber = $this -> input -> post('$cnicNumber');
		//'33105-1244965-9';
		$dob = $this -> input -> post('$dob');
		//'27-08-1991';
		$address = $this -> input -> post('$address');
		//'8/9-d cat # IV, Sector I-8/1, Islamabad';
		$emergencyContactName = $this -> input -> post('$emergencyContactName');
		//'Sheraz Hashmi';
		$emergencyContactNumber = $this -> input -> post('$emergencyContactNumber');
		//'03135446302';
		$bloodGroup = $this -> input -> post('$bloodGroup');
		//'B-';
		$father_husbandName = $this -> input -> post('$father_husbandName');
		//'Zafar Ullah';
		$hireDate = $this -> input -> post('$hireDate');
		//'02-09-2017';
		$profilePic = $this -> input -> post('$profilePic');
		//'1005_profile_pic.jpeg';
		$resume = $this -> input -> post('$resume');
		//'1005_resume.pdf';
		$cnicScannedImage = $this -> input -> post('$cnicScannedImage');
		//'1005_cnic.jpeg';
		/*function call to save employe basic details in employee table*/

		$saveEmployeeBasicDetails = $this -> employee_model -> createEmployee($employeeID, $firstName, $middleName, $lastName, $userName, $email, $mobileNum, $cnicNumber, $dob, $address, $emergencyContactNumber, $emergencyContactName, $bloodGroup, $father_husbandName, $hireDate, $profilePic, $resume, $cnicScannedImage);

		if ($saveEmployeeBasicDetails == 1) {

			$employeeType = $this -> input -> post('$employeeType');
			//'Permanent';
			$department = $this -> input -> post('$department');
			//'Technical';
			$designation = $this -> input -> post('$designation');
			//'Engineer';
			$supervisorID = $this -> input -> post('$supervisorID');
			//'109';

			/*function call to save employe departmental details in departmen table*/

			$saveEmployeeDepartmentalDetails = $this -> employee_model -> createDepartment($employeeID, $department, $designation, $employeeType, $supervisorID);

			if ($saveEmployeeDepartmentalDetails == 1) {

				$salary = $this -> input -> post('$salary');
				//'30000';

				/*function call to save employe salary details in salary table*/
				$saveEmployeeSalaryDetails = $this -> employee_model -> createSalary($employeeID, $salary, $employeeType);

				/**/

				if ($saveEmployeeSalaryDetails == 1) {

					//$education = array(0 => array('employeeID' => '1005', 'instituteName' => 'FGCC Lahore', 'qualification' => 'SSC', 'admissionDate' => '01-03-2007', 'graduationDate' => '01-06-2009', 'degreeScannedImage' => '1004_SSC_Degree.pdf'), 1 => array('employeeID' => '1004', 'instituteName' => 'FGCC Lahore', 'qualification' => 'HSSC', 'admissionDate' => '01-07-2009', 'graduationDate' => '01-06-2011', 'degreeScannedImage' => '1004_HSSC_Degree.pdf'));

					$education = $this -> input -> post('$education');
					//null;

					if (is_array($education) === true && count($education) > 0) {
						/*function call to save employe education details in education table*/

						$saveEmployeeEducationHistory = $this -> employee_model -> createEducation($education);

						/**/
					} else {
						// echo "no employee training data";
					}
					//$jobHistory = array(0 => array('employeeID' => '1004', 'company' => 'Techaccess', 'designation' => 'SupportEngineer', 'employmentStartDate' => '01-02-2015', 'employmentEndDate' => '01-03-2016', 'JobDescription' => 'xyz', 'experienceLetterScannedImage' => '1004_ExperiencedLetter_techacces.pdf'), 1 => array('employeeID' => '1004', 'company' => 'GlobizServ', 'designation' => 'SoftwareEngineer', 'employmentStartDate' => '01-02-2014', 'employmentEndDate' => '01-03-2015', 'JobDescription' => 'xyz', 'experienceLetterScannedImage' => '1004_ExperiencedLetter_GlobizServe.pdf'));
					$jobHistory = $this -> input -> post('$jobHistory');
					//null;
					if (is_array($jobHistory) === true && count($jobHistory) > 0) {
						/*function call to save employe job history details in jobHistory table*/
						$saveEmployeejobHistory = $this -> employee_model -> createJobHistory($jobHistory);
						/**/
					} else {
						//echo "no employee job data";
					}

					//$training = array(0 => array('employeeID' => '1004', 'trainingInstituteName' => 'Technoed', 'trainingStartDate' => '10-03-2016', 'trainingEndDate' => '10-06-2016', 'ExamDate' => '11-11-2016', 'certificateScannedImage' => '1004_database_certificate.pdf', 'certificationName' => 'OCP'), 1 => array('employeeID' => '1004', 'trainingInstituteName' => 'Technoed', 'trainingStartDate' => '11-04-2016', 'trainingEndDate' => '01-01-2017', 'ExamDate' => '11-02-2017', 'certificateScannedImage' => '1004_linux_certificate.pdf', 'certificationName' => 'RHCE'), );

					$training = $this -> input -> post('$training');
					//null;
					if (is_array($training) === true && count($training) > 0) {
						/*function call to save employe training details in training table*/
						$saveEmployeeTrainingHistory = $this -> employee_model -> createTraining($training);

						/**/
					} else {

					}

				} else {
					$errorResponse = array("status" => "false", "msg" => "Employee Is not added due to some error please try again !!!");
					$errorResponse = json_encode($errorResponse);
					return $errorResponse;
					die();
				}
			} else {
				$errorResponse = array("status" => "false", "msg" => "Employee Is not added due to some error please try again !!!");
				$errorResponse = json_encode($errorResponse);
				return $errorResponse;
				die();

			}
			/*updating of last id of employee added*/
			$versionBit=0;
			$updateIDOfLastEmployeeAdded = $this -> employee_model -> updateIdOfLastEmployeeAddedAfterSucessfullEmployeeAddition($employeeID,$versionBit);
			if ($updateIDOfLastEmployeeAdded == 1) {
				$successResponse = array("status" => "true", "msg" => "Teacher Successfully Added !!!");
				$successResponse = json_encode($successResponse);
				return $successResponse;
			} else {
				$errorResponse = array("status" => "false", "msg" => "Employee Is not added due to some error please try again !!!");
				$errorResponse = json_encode($errorResponse);
				return $errorResponse;
				die();
			}
		} else {

			$errorResponse = array("status" => "false", "msg" => "Employee Is not added due to some error please try again !!!");
			$errorResponse = json_encode($errorResponse);
			return $errorResponse;
			die();

		}

	}

}
?>