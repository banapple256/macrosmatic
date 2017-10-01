var profileImage,
    firstName,
    middleName,
    lastName,
    userName,
    email,
    cnic,
    mobileNumber,
    homePhone,
    dob,
    address,
    salary;
var emergencyCName,
    emergencyCNumber,
    bloodGroup,
    spouseName,
    hireDate,
    resume,
    cnicImage,
    employeeType,
    department,
    designation,
    superviserID;
var educationDetails;

function getValues() {
	profileImage = document.getElementById('profileImage').files[0];
	firstName = $('#firstName').val();
	middleName = $('#middleName').val();
	lastName = $('#lastName').val();
	userName = $('#userName').val();
	email = $('#email').val();
	cnic = $('#cnic').val();
	mobileNumber = $('#mobileNumber').val();
	homePhone = $('#homePhone').val();
	dob = $('#dob').val();
	address = $('#address').val();
	salary = $('#salary').val();
	emergencyCName = $('#emergencyCName').val();
	emergencyCNumber = $('#emergencyCNumber').val();
	bloodGroup = $('#bloodGroup').val();
	spouseName = $('#spouseName').val();
	hireDate = $('#hireDate').val();
	resume = document.getElementById('resume').files[0];
	cnicImage = document.getElementById('cnicImage').files[0];
	employeeType = $('#employeeType').find(":selected").val();
	department = $('#department').find(":selected").val();
	designation = $('#designation').find(":selected").val();
	superviserID = $('#superviserID').find(":selected").val();

	var cdrReqParams = {};
	cdrReqParams.profilePic = profileImage;
	cdrReqParams.firstName = firstName;
	cdrReqParams.middleName = middleName;
	cdrReqParams.lastName = lastName;
	cdrReqParams.userName = userName;
	cdrReqParams.email = email;
	cdrReqParams.cnicNumber = cnic;
	cdrReqParams.mobileNum = mobileNumber;
	cdrReqParams.homePhone = homePhone;
	cdrReqParams.dob = dob;
	cdrReqParams.address = address;
	cdrReqParams.emergencyCName = emergencyCName;
	cdrReqParams.emergencyCNumber = emergencyCNumber;
	cdrReqParams.bloodGroup = bloodGroup;
	cdrReqParams.father_husbandName = spouseName;
	cdrReqParams.hireDate = hireDate;
	cdrReqParams.resume = resume;
	cdrReqParams.cnicScannedImage = cnicImage;
	cdrReqParams.employeeType = employeeType;
	cdrReqParams.department = department;
	cdrReqParams.designation = designation;
	cdrReqParams.supervisorID = superviserID;
	cdrReqParams.salary = salary;
	var jsonStr = JSON.stringify(cdrReqParams);
	console.log(jsonStr);
	API.call("/macrosmatic/employee/getAndSaveEmployeeDetails", 'POST', function(data) {
		console.log(data);
	}, function(error) {
		console.log(error);
	}, cdrReqParams);

	//console.log("First Name : " + firstName + '\n' + "Middle Name : " + middleName + '\n' + "Last Name : " + lastName + '\n' + "User Name : " + userName + '\n' + "Email : " + email + '\n' + "cnic : " + cnic + '\n' + "mobileNumber : " + mobileNumber + '\n' + "homePhone : " + homePhone + '\n' + "dob : " + dob + '\n' + "address : " + address + '\n' + "emergencyCName : " + emergencyCName + '\n' + "emergencyCNumber : " + emergencyCNumber + '\n' + "bloodGroup : " + bloodGroup + '\n' + "spouseName : " + spouseName + '\n' + "hireDate : " + hireDate + '\n' + "employeeType : " + employeeType + '\n' + "department : " + department + '\n' + "designation : " + designation + '\n' + "superviserID : " + superviserID + '\n' + "Education Details : " + educationDetails + '\n');

}
