var API = {
  call:function(url,type,successcallback,errorCallback,data){
    var data = (!!data) ? data : {};
    var callback = (!!callback) ? callback : function(){};
    $.ajax({
      contentType : "application/json",
      dataType: "json",
      //crossDomain: true,
      xhrFields: { withCredentials: true }, 
      url: url,
      data:data,
	  type:type,
      success:successcallback,
      error:errorCallback
    });    
  }
}