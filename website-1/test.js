
// receive data or get data
var pagecounter = 1;
var totext = document.getElementById('totext');
var btn = document.getElementById('btn');

//var ourRequest = new XMLHttpRequest();
//ourRequest.open('GET','start'+pagecounter+'.json');
// sending data code
//ourRequest.open('POST');



// another way of onclick 
btn.addEventListener('click',function(){
	var ourRequest = new XMLHttpRequest();
	ourRequest.open('GET','start'+pagecounter+'.json');
	ourRequest.onload = function(){
		
		var data = JSON.parse(ourRequest.responseText);
		renderhtml(data);
		counter(data.length);
	};
	ourRequest.send();

});

/*btn.onclick = function(){
	var jsons = JSON.parse(ourRequest.responseText);
	console.log(jsons[0].age);
	//console.log(ourRequest.responseText);
	renderhtml(jsons);
	ourRequest.send();
};*/


function counter(datas){
	console.log(datas);
	pagecounter++;
	if(pagecounter > datas){
		// add class from bootstrap to look disabled
		btn.classList.add('disabled');
		// actually disable the button from onclick listener
		document.getElementById("btn").disabled = true;
	}
}

function renderhtml(para){
	var htmlstring = "";
	// each item in the array
	for(i = 0; i < para.length;i++){
		htmlstring+= "<p>"+ para[i].name + para[i].age + "</p>";
	}

	totext.insertAdjacentHTML('beforeend',htmlstring);
}