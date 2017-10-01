/*
 * CLASSES
 */

/*var AddTableRow = {
	add:function(tableID) {
	console.log(inc);
  	var educationInstitute = $("#educationInstitute").val();
    var educationQualification = $('#educationQualification').find(":selected").val();
    var educationAdmDate = $("#educationAdmDate").val();
    var educationGraDate = $("#educationGraDate").val();
    AddTableRow.previewImage("educationImage", inc);
    //var educationImage = $("#educationImage").val();
    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + educationInstitute + "</td><td>" + educationQualification + "</td><td>" + educationAdmDate + "</td><td>" + educationGraDate + "</td><td><img style='width:100px;height:100px;' class=previewImage" + inc +  " src='#' /></td></tr>";
    $("#educationTable tbody").append(markup);
    
  },
  del:function(row) {
  	$("table tbody").find('input[name="record"]').each(function(){
    	if($(this).is(":checked")){
        	$(this).parents("tr").remove();
        }
    });
  },
  previewImage:function(id, inc) {
  	if (document.getElementById(id).files[0]) {
  		console.log("ID");
    	var reader = new FileReader();
        reader.onload = function (e) {
        	//console.log(e.target.result);
        	$('.previewImage' + inc).attr('src',e.target.result);
        	inc +=1;
        	console.log(inc);
       	}
        reader.readAsDataURL(document.getElementById(id).files[0]);
    }
  }
}*/
var inc = 1;
function add(tableID) {
	console.log(inc);
  	var educationInstitute = $("#educationInstitute").val();
    var educationQualification = $('#educationQualification').find(":selected").val();
    var educationAdmDate = $("#educationAdmDate").val();
    var educationGraDate = $("#educationGraDate").val();
    //previewImage("educationImage", inc);
    //var educationImage = $("#educationImage").val();
    
    var fullPath = document.getElementById('educationImage').value;
	if (fullPath) {
	    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
	    var filename = fullPath.substring(startIndex);
	    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
	        filename = filename.substring(1);
	    }
	    
	}
	filename.replace(/ /g,'');
	alert(filename);
	//previewImage("educationImage", filename);
    
    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + educationInstitute + "</td><td>" + educationQualification + "</td><td>" + educationAdmDate + "</td><td>" + educationGraDate + "</td><td>" + filename +  "</td></tr>";
    $("#educationTable tbody").append(markup);
}
function del(row) {
	$("table tbody").find('input[name="record"]').each(function(){
    	if($(this).is(":checked")){
        	$(this).parents("tr").remove();
        }
    });
}
function previewImage(id, filename) {
	if (document.getElementById(id).files[0]) {
  		console.log("ID");
    	var reader = new FileReader();
        reader.onload = function (e) {
        	//console.log(e.target.result);
        	$('.previewImage' + filename).attr('src',e.target.result);
        	inc +=1;
        	console.log(inc);
       	}
        reader.readAsDataURL(document.getElementById(id).files[0]);
    }
}
var fileUploadMecha = {
  getFile:function(fileID) {
  	console.log(fileID);
  	var file = document.getElementById(fileID).files[0];
  	if (file) {
  		var fileSize = 0;
  		if (file.size > 1024 * 1024)
  			fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
  		else
  			fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
  		console.log("name : " + file.name);
  		console.log("name : " + file.size);
  		console.log("name : " + file.type);
  		fileUploadMecha.uploadFile(fileID);
  	}
  },
  uploadFile:function(fileID) {
  	var fd = new FormData(document.getElementById(fileID).files[0]);
  	console.log(fd);
  }
}


/*
 * FUNCTIONS
 */

$(function () {
	$(".profileImageInput").fileinput({
	    overwriteInitial: true,
	    maxFileSize: 1500,
	    showClose: true,
	    showCaption: false,
	    browseLabel: '',
	    removeLabel: '',
	    browseIcon: '<i class="fa fa-folder-open fa-fw"></i>',
	    removeIcon: '<i class="fa fa-close fa-fw"></i>',
	    removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors-1',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img src="assets/images/default_avatar_male.jpg" alt="Your Avatar">',
	    layoutTemplates: {main2: '{preview} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"],
	    
	});
	
	$(".imageFileinput").fileinput({
		showUpload: false
	});
	
});


/*function insTableRow(tableID) {
	var x=document.getElementById(tableID);
	var get_row = x.rows[1];
	var new_row = x.rows[1].cloneNode(true);
	$("#"+tableID+" tbody").append(new_row);
} */

