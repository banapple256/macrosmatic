<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<title>Add Employee</title>
<div class="main-content">
	<?php include 'template/topmenu.php' ?>
	<!-- PAGE CODE STARTS BELOW FROM HERE -->
	
	<!-- Breadcrumbs -->
	<div class="container-fluid">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="javascript:;"> <i class="fa fa-user fa-fw"></i> Employee </a>
				</li>
				<li>
					<a href="<?php base_url(); ?>employee">Add Employee</a>
				</li>
			</ol>
		</div>
	</div>
	
	<!-- ADD EMPLOYEE FORM -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-gray" data-collapsed="0">
			        <!-- panel head -->
			        <div class="panel-heading">
			            <div class="panel-title">Add Teacher Form</div>
			            <div class="panel-options"> <a href="#" data-rel="collapse"><i class="fa fa-angle-down fa-fw"></i></a> </div>
			        </div>
			        <!-- panel body -->
			        <div class="panel-body">
			        	<form role="form" method="POST" enctype="multipart/form-data">
			        		<div class="container-fluid">
			        			<div class="row">
			        				<div class="col-md-12">
			        					<div class="form-group">
                            				<label class="control-label">Profile Picture : </label><br>
                            				<div class="kv-avatar">
								                <div class="file-loading">
								                    <input class="profileImageInput" id="profileImage" name="profileImage" type="file" />
								                </div>
							            	</div>
							            </div>
			        				</div>
			        			</div>
			        			<fieldset style="min-height:100px;">
									<legend>Employee Details </legend>
				        			<div class="row">
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">First Name: </label><br>
	                            				<input type="text" class="form-control" name="firstName" id="firstName" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Middle Name : </label><br>
	                            				<input type="text" class="form-control" name="middleName" id="middleName" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Last Name : </label><br>
	                            				<input type="text" class="form-control" name="lastName" id="lastName" />
								            </div>
				        				</div>
				        			</div>
				        			<div class="row">
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">User Name: </label><br>
	                            				<input type="text" class="form-control" name="userName" id="userName" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Email : </label><br>
	                            				<input type="email" class="form-control" name="email" id="email" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">CNIC : </label><br>
	                            				<input type="text" class="form-control" name="cnic" id="cnic" data-masked-input="99999-9999999-9" placeholder="xxxxx-xxxxxxx-x" />
								            </div>
				        				</div>
				        			</div>
				        			<div class="row">
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Mobile Number: </label><br>
	                            				<input type="text" class="form-control" name="mobileNumber" id="mobileNumber" data-masked-input="9999-9999999" placeholder="xxxx-xxxxxxx" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Home Phone : </label><br>
	                            				<input type="text" class="form-control" name="homePhone" id="homePhone"  data-masked-input="999-9999999" placeholder="xxx-xxxxxxx"/>
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Date Of Birth : </label><br>
	                            				<input type="text" class="form-control datepicker" name="dob" id="dob" />
								            </div>
				        				</div>
				        			</div>
				        			<div class="row">
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Address : </label><br>
	                            				<input type="text" class="form-control" name="address" id="address" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Emergency Contact Name : </label><br>
	                            				<input type="text" class="form-control" name="emergencyCName" id="emergencyCName" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Emergency Contact Number : </label><br>
	                            				<input type="text" class="form-control" name="emergencyCNumber" id="emergencyCNumber" data-masked-input="9999-9999999" placeholder="xxxx-xxxxxxx" />
								            </div>
				        				</div>
				        			</div>
				        			<div class="row">
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Blood Group: </label><br>
	                            				<select class="form-control" name="bloodGroup" id="bloodGroup"> 
	                            					<option value="O +">O +</option> 
	                            					<option value="O -">O -</option>
	                            					<option value="A +">A +</option> 
	                            					<option value="A -">A -</option>
	                            					<option value="B +">B +</option> 
	                            					<option value="B -">B -</option>
	                            					<option value="AB +">AB +</option> 
	                            					<option value="AB -">AB -</option>
	                            				</select>
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Spouse Name : </label><br>
	                            				<input type="text" class="form-control" name="spouseName" id="spouseName" />
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Hire Date : </label><br>
	                            				<input type="text" class="form-control datepicker" name="hireDate" id="hireDate" />
								            </div>
				        				</div>
				        			</div>
				        			<div class="row">
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Resume : </label><br>
	                            				<input type="file" class="form-control imageFileinput" name="resume" id="resume" data-show-preview="false"/>
								            </div>
				        				</div>
				        				<div class="col-md-4">
				        					<div class="form-group">
	                            				<label class="control-label">Scanned CNIC Image : </label><br>
	                            				<input type="file" class="form-control imageFileinput" name="cnicImage" id="cnicImage" data-show-preview="false"/>
								            </div>
				        				</div>
				        			</div>
			        			</fieldset>
			        			<fieldset style="min-height:100px;">
									<legend>Department Details </legend>
									<div class="row">
										<div class="col-md-6">
				        					<div class="form-group">
	                            				<label class="control-label">Employee Type : </label><br>
	                            				<select class="form-control" name="employeeType" id="employeeType"> 
	                            					<option value="1">Option 1</option> 
	                            					<option value="2">Option 2</option>
	                            				</select>
								            </div>
				        				</div>
				        				<div class="col-md-6">
				        					<div class="form-group">
	                            				<label class="control-label">Department : </label><br>
	                            				<select class="form-control" name="department" id="department"> 
	                            					<option value="3">Option 1</option> 
	                            					<option value="4">Option 2</option>
	                            				</select>
								            </div>
				        				</div>
				        				<div class="col-md-6">
				        					<div class="form-group">
	                            				<label class="control-label">Designation : </label><br>
	                            				<select class="form-control" name="designation" id="designation"> 
	                            					<option value="5">Option 1</option> 
	                            					<option value="6">Option 2</option>
	                            				</select>
								            </div>
				        				</div>
				        				<div class="col-md-6">
				        					<div class="form-group">
	                            				<label class="control-label">Superviser ID : </label><br>
	                            				<select class="form-control" name="superviserID" id="superviserID"> 
	                            					<option value="7">Option 1</option> 
	                            					<option value="8">Option 2</option>
	                            				</select>
								            </div>
				        				</div>
									</div>
								</fieldset>
								<fieldset style="min-height:100px;">
									<legend>Education Details </legend>
									<div class="row">
										<i class="fa fa-plus-circle fa-2x fa-fw" style="padding-left: 15px;" onclick="add('educationTable')"></i>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<input type="text" class="form-control" name="educationInstitute" id="educationInstitute" placeholder="Institue Name" />
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<select class="form-control" name="educationQualification" id="educationQualification"> 
													<option value="5">--- Qualification ---</option> 
	                            					<option value="5">Option 1</option> 
	                            					<option value="6">Option 2</option>
	                            				</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input type="text" class="form-control datepicker" name="educationAdmDate" id="educationAdmDate" placeholder="Admission Date" />
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input type="text" class="form-control datepicker" name="educationGraDate" id="educationGraDate" placeholder="Graduation Date" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="file" class="form-control imageFileinput" name="educationImage" id="educationImage"  data-show-preview="false"/>
											</div>
										</div>
											
										<table class="table table-responsive table-bordered order-list" id="educationTable">
											<thead>
												<tr>
													<th>Check</th>
													<th>Institute Name</th>
												    <th>Qualification</th>
												    <th>Admission Date</th>
												    <th>Graduation Date</th>
												    <th>Degree Scanned Image</th>
												 </tr>
											 </thead>
											 <tbody></tbody>
										</table>
									</div>
									<div class="row">
										<i class="fa fa-plus-circle fa-2x fa-fw" style="padding-left: 15px;" onclick="AddTableRow.del('educationTable')"></i>	
									</div>
								</fieldset>
								<fieldset style="min-height:100px;">
									<legend>Job History </legend>
									<div class="row">
										<div class="col-md-12">
											<i class="fa fa-plus-circle fa-2x fa-fw" onclick="AddTableRow.add('jobHistoryTable')"></i>
											<table class="table table-responsive table-bordered" id="jobHistoryTable">
											    <thead>
											    	<tr>
												        <th>Company</th>
												        <th>Designation</th>
												        <th>Start Date</th>
												        <th>End Date</th>
												        <th>Experience Letter Scanned Image</th>
												     </tr>
											    </thead>
											    <tbody>
											      	<tr>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="file" class="form-control resumeImageInput" name="resume" id="resume" data-show-preview="false"/></td>
												     </tr>
												     <tr style="display:none;">
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="file" class="form-control resumeImageInput" name="resume" id="resume" data-show-preview="false"/></td>
												        <td><i class="fa fa-minus-circle fa-2x fa-fw" onclick="AddTableRow.del($(this))"></i></td>
												    </tr>
											    </tbody>
											</table>
										</div>
									</div>
								</fieldset>
								<fieldset style="min-height:100px;">
									<legend>Trainings</legend>
									<div class="row">
										<div class="col-md-12">
											<i class="fa fa-plus-circle fa-2x fa-fw" onclick="AddTableRow.add('trainingsTable')"></i>
											<table class="table table-responsive table-bordered" id="trainingsTable">
											    <thead>
											    	<tr>
												        <th>Institute Name</th>
												        <th>Certification Name</th>
												        <th>Start Date</th>
												        <th>End Date</th>
												        <th>Exam Date</th>
												        <th>Experience Letter mage</th>
												     </tr>
											    </thead>
											    <tbody>
											      	<tr>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="text" class="form-control" name="number" id="number" /></td>
												        <td><input type="file" class="form-control resumeImageInput" name="resume" id="resume" data-show-preview="false"/></td>
												     </tr>
												     <tr style="display:none;">
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="text" class="form-control" name="txt[]" id="number" /></td>
												        <td><input type="file" class="form-control resumeImageInput" name="resume" id="resume" data-show-preview="false"/></td>
												        <td><i class="fa fa-minus-circle fa-2x fa-fw" onclick="AddTableRow.del($(this))"></i></td>
												    </tr>
											    </tbody>
											</table>
										</div>
									</div>
								</fieldset>
								<div class="row">
									<button type="button" class="btn btn-lg btn-success pull-right" style="margin-right: 15px;margin-top: 10px;" onclick="getValues();">SUBMIT</button>
								</div>
			        		</div>
	                     </form>
			        </div>
			    </div>
			</div>
		</div>
	</div>
	
	
	
	<script src="<?php echo base_url(); ?>assets/js/apicall.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pages/addEmployee.js"></script>
</div>
