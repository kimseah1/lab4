

/*function popupfunction(x)

{

document.getElementById('popup'+x).style.display='block';

document.getElementById('fade'+x).style.display='block';

}



function popupclose(x)

{

document.getElementById('popup'+x).style.display='none';

document.getElementById('fade'+x).style.display='none';

}*/




function myFunction() {
  var x = document.getElementById('cart');
  if (x.style.display === 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }

}


function addtocart(y) {
  
	document.getElementById("output").innerHTML+="<br>"+y;
			



}


function cartfunction(x)

{

document.getElementById('popup'+x).style.display='block';

document.getElementById('fade'+x).style.display='block';

}



function cartclose(x)

{

document.getElementById('popup'+x).style.display='none';

document.getElementById('fade'+x).style.display='none';

}
