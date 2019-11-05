// $('.collapse').on('hidden.bs.collapse', function () {
//     $('.collapse').eq(1).collapse('show');
// })

// var myVar;

// function myFunction() {
//   myVar = setTimeout(showPage, 3000);
// }

// function showPage() {
//   document.getElementById("loader").style.display = "none";
//   document.getElementById("myDiv").style.display = "block";
// }




// (function ($) {
//     "use strict";

// var name = $('.validate-input input[name="name"]');
// var email = $('.validate-input input[name="email"]');
// var message = $('.validate-input textarea[name="message"]');


// $('.validate-form').on('submit',function(){
//     var check = true;

//     if($(name).val().trim() == ''){
//         showValidate(name);
//         check=false;
//     }


//     if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
//         showValidate(email);
//         check=false;
//     }

//     if($(message).val().trim() == ''){
//         showValidate(message);
//         check=false;
//     }

//     return check;
// });

// })(jQuery);