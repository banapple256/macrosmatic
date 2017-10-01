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
    address;
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
	cdrReqParams.profileImage = profileImage;
	cdrReqParams.selectedOperator = firstName;
	cdrReqParams.lookIn = middleName;
	cdrReqParams.wildCardEnabled = lastName;
	cdrReqParams.wildCardEnabled = email;
	cdrReqParams.wildCardEnabled = cnic;
	cdrReqParams.wildCardEnabled = mobileNumber;
	cdrReqParams.wildCardEnabled = homePhone;
	cdrReqParams.wildCardEnabled = dob;
	cdrReqParams.wildCardEnabled = address;
	cdrReqParams.wildCardEnabled = emergencyCName;
	cdrReqParams.wildCardEnabled = emergencyCNumber;
	cdrReqParams.wildCardEnabled = bloodGroup;
	cdrReqParams.wildCardEnabled = spouseName;
	cdrReqParams.wildCardEnabled = hireDate;
	cdrReqParams.wildCardEnabled = resume;
	cdrReqParams.wildCardEnabled = cnicImage;
	cdrReqParams.wildCardEnabled = employeeType;
	cdrReqParams.wildCardEnabled = department;
	cdrReqParams.wildCardEnabled = designation;
	cdrReqParams.wildCardEnabled = superviserID;
	var jsonStr = JSON.stringify(cdrReqParams);
	API.call("/scooper/search_subscriber_basic.json", 'POST', function(data) {
		if (data.status == "success") {
			toastr.options.closeButton = true;
			toastr.success(data.msg);
			tableData = data.data;
			createBasicSubscriberTable(tableData);
		}
		if (data.status == "Error") {
			toastr.options.closeButton = true;
			toastr.error(data.msg);
			$("#loading_image").hide();
		}

	}, function(error) {
		console.log(error);
	}, jsonStr);

	console.log("First Name : " + firstName + '\n' + "Middle Name : " + middleName + '\n' + "Last Name : " + lastName + '\n' + "User Name : " + userName + '\n' + "Email : " + email + '\n' + "cnic : " + cnic + '\n' + "mobileNumber : " + mobileNumber + '\n' + "homePhone : " + homePhone + '\n' + "dob : " + dob + '\n' + "address : " + address + '\n' + "emergencyCName : " + emergencyCName + '\n' + "emergencyCNumber : " + emergencyCNumber + '\n' + "bloodGroup : " + bloodGroup + '\n' + "spouseName : " + spouseName + '\n' + "hireDate : " + hireDate + '\n' + "employeeType : " + employeeType + '\n' + "department : " + department + '\n' + "designation : " + designation + '\n' + "superviserID : " + superviserID + '\n' + "Education Details : " + educationDetails + '\n');

}
