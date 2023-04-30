// $("#inputCategory").change(function() {
// 	let selectedCategory = $("#inputCategory").val();

// 	switch(selectedCategory) {
// 		case "Infrastructure":
// 			showQuestions(selectedCategory);
// 			break;

// 		case "Facilities":
// 			showQuestions(selectedCategory);
// 			break;

// 		case "Mentor":
// 			showQuestions(selectedCategory);
// 			break;

// 		case "Academics":
// 			showQuestions(selectedCategory);
// 			break;

// 		case "Ragging/Sexual Harassment":
// 			showQuestions(selectedCategory);
// 			break;

// 		case "Faculty":
// 			showQuestions(selectedCategory);
// 			break;

// 	}

// });

// let Infrastructure = [
// "How up-to-date are campus facilities",
// "How much satisfied are you on the overall infastructure of the college"
// ];
// let Facilities = [
// "How satisfied are you with the facilities provided by the college", 
// "Do you feel it is easier to register for different courses within the college"
// ];
// let Mentor = [
// "How does the mentor communicate with his/her mentee?", 
// "How does the mentor respond to stressfull situation which require mentoring assistance?"
// ];
// let Academics = [
// "How does the mentor respond to stressfull situation which require mentoring assistance?",
// "The teacher showed an interest in hearing students learn"
// ];
// let Ragging = ["Is there any anti-ragging committee in your college", 
// "Does ragging exists in your college"
// ];
// let Faculty = [
// "Faculty1",
// "Faculty2"
// ];

// function showQuestions(category) {
// 	$(".listQuestion").empty();
// 	if(category == "Infrastructure") {
// 		Infrastructure.map((categoryQuestions, index) => {
// 		  $(".listQuestion").append('<div class="col-md-12"><label class="form-label">'+categoryQuestions+'</label><input type="text" name="" class="form-control" placeholder="Write here"></div>');
// 		});
// 	} else if(category == "Facilities") {
// 		Facilities.map((categoryQuestions, index) => {
// 		  $(".listQuestion").append('<div class="col-md-12"><label class="form-label">'+categoryQuestions+'</label><input type="text" name="" class="form-control" placeholder="Write here"></div>');
// 		});
// 	} else if(category == "Mentor") {
// 		Mentor.map((categoryQuestions, index) => {
// 		  $(".listQuestion").append('<div class="col-md-12"><label class="form-label">'+categoryQuestions+'</label><input type="text" name="" class="form-control" placeholder="Write here"></div>');
// 		});
// 	} else if(category == "Academics") {
// 		Academics.map((categoryQuestions, index) => {
// 		  $(".listQuestion").append('<div class="col-md-12"><label class="form-label">'+categoryQuestions+'</label><input type="text" name="" class="form-control" placeholder="Write here"></div>');
// 		});
// 	} else if(category == "Ragging/Sexual Harassment") {
// 		Ragging.map((categoryQuestions, index) => {
// 		  $(".listQuestion").append('<div class="col-md-12"><label class="form-label">'+categoryQuestions+'</label><input type="text" name="" class="form-control" placeholder="Write here"></div>');
// 		});
// 	} else if(category == "Faculty") {
// 		Faculty.map((categoryQuestions, index) => {
// 		  $(".listQuestion").append('<div class="col-md-12"><label class="form-label">'+categoryQuestions+'</label><input type="text" name="" class="form-control" placeholder="Write here"></div>');
// 		});
// 	}
// }


