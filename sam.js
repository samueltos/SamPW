const logo = document.querySelectorAll("#samsvg path");

for (let i = 0; i < logo.length; i++){
	console.log(`${i} : ${logo[i].getTotalLength()}`)
}

$('.collapse').on('hidden.bs.collapse', function () {
    $('.collapse').eq(0).collapse('show');
})