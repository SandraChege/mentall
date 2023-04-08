var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init, false);
	
	function init() {
		document.querySelector('#fileToUpload').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles");
	}
    function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;

		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			var f = files[i];
			if(!f.type.match("image.*")) {
				return;
			}

			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
		});
		
	}
	// let fileInput = document.getElementById("file-input");
	// let fileResult = document.getElementById("file-result");
	// let fileSubmit = document.getElementById("file-submit");
	let fileInput = document.getElementById("fileToUpload");
	let fileResult = document.getElementById("selectedFiles");
	let fileSubmit = document.getElementById("submit");
	fileInput.addEventListener("change", function () {  
		if (fileInput.files.length > 0) {
		  const fileSize = fileInput.files.item(0).size;
		  const fileMb = fileSize / 1024 ** 2;
		  //alert(fileMb);
		}
	});

	// Get the file input element(s)
var fileInputs = document.querySelectorAll('input[type="file"]');

// Add event listener for each file input
for (var i = 0; i < fileInputs.length; i++) {
  fileInputs[i].addEventListener('change', function(event) {
    // Get the file(s) from the input element
    var files = event.target.files;
    
    // Loop through each file
    for (var j = 0; j < files.length; j++) {
      var file = files[j];
      
      // Check the size of the file
      if (file.size > (5 * 1024 * 1024)) { // 5 MB limit
        alert('File ' + file.name + ' exceeds the maximum size of 5 MB.');
      } else {
        alert('File ' + file.name + ' has a size of ' + file.size + ' bytes.');
      }
    }
  });
}
