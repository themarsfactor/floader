/**
 * File Uploader Project
 */

const floader_input = document.querySelector("#floader_id");
const floader_img_preview = document.querySelector(".floader_img_preview");
const floader_form = document.querySelector(".floader_form");

floader_input.addEventListener("change", function(){


	//console.log(this.files);

	const file = this.files.item(0);
	
	//we need a way to read this file..
	
	const fileReader = new FileReader();

	fileReader.readAsDataURL(file);//read



	//open the file you want to read..
	
	fileReader.onload = function(){

		const encoded_img = this.result;
		floader_img_preview.innerHTML = `<img src='${encoded_img}' width=300 height=300>`;


		//submit with ajax
		
		const formData = new FormData(floader_form);

		const xhr = new XMLHttpRequest();

		xhr.open("POST", "process.php");

		xhr.onload = function(){

			console.log(this.response);


		}


		xhr.send(formData);



	}

	






})