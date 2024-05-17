

function loadData(phone)
{
	var txt,pic;
	
	if(phone=="XS")
	{
		txt = "The iPhone XS is a smartphone designed and produced by Apple Inc. It was released on September 21, 2018, as part of the twelfth generation of iPhones. The iPhone XS features a 5.8-inch Super Retina OLED display, a dual-camera system with improved Portrait mode and Smart HDR, and the A12 Bionic chip with next-generation Neural Engine. It also includes Face ID for secure authentication and is available in three colors: gold, silver, and space gray.";
		pic = "images/iphone XS.jpg";
	}
	else if(phone=="XSmax")
	{
		txt = "The iPhone XS Max is a larger version of the iPhone XS, also designed and produced by Apple Inc. It was released on September 21, 2018, along with the iPhone XS. The iPhone XS Max features a 6.5-inch Super Retina OLED display, a dual-camera system with improved Portrait mode and Smart HDR, and the A12 Bionic chip with next-generation Neural Engine. It also includes Face ID for secure authentication and is available in three colors: gold, silver, and space gray.";
		pic = "images/iphone XS.jpg";
	}
	else if(phone=="8s")
	{
		txt = "The iPhone 8 Plus is a smartphone designed and produced by Apple Inc. It was released on September 22, 2017, as part of the eleventh generation of iPhones. The iPhone 8 Plus features a 5.5-inch Retina HD display, a dual-camera system with Portrait mode and Portrait Lighting, and the A11 Bionic chip with Neural Engine. It also includes Touch ID for secure authentication and is available in three colors: gold, silver, and space gray.";
		pic = "images/8s.jpg";
	}
	else if(phone=="se")
	{
		txt = "The iPhone SE is a smartphone designed and produced by Apple Inc. It was released on April 24, 2020, as a budget-friendly option for those who prefer a smaller phone. The iPhone SE features a 4.7-inch Retina HD display, a single-lens camera with advanced bokeh and depth control, and the A13 Bionic chip with Neural Engine. It also includes Touch ID for secure authentication and is available in three colors: black, white, and (PRODUCT)RED.";
		pic = "images/se.jpg";
	}
	document.getElementById("photo").src =pic;
	document.getElementById("dis").innerHTML = txt;
	
}
function priceForLoop()
{
	let product = ["Iphone XS - $1,350","Iphone XS max - $1,500","Iphone 8s plus - $850","Iphone SE - $800"];
	let x;
	let txt1="";
	for(x in product)
	{
		txt1 += product[x]+"</br>";
	}
	document.getElementById("dis").innerHTML = txt1;
	document.getElementById("photo").src="images/iphones.jpg";
}
function priceHigher()
{
	document.getElementById("photo").src="images/iphones.jpg";
	var phone = [];
    phone["IPhone XS"] = 1350;
    phone["IPhone XS max"] = 1500;
    phone["IPhone 8s plus"] = 850;
    phone["IPhone SE"] = 800;
	var item;
	var HighPrice = "List of high cost mobile phones <br/>";
	for(item in phone)
	{
		if(phone[item]>1000)
		{
			HighPrice += item + " : " + phone[item] + "<br>";
		}
	}
	
	document.getElementById("dis").innerHTML = HighPrice;
}
function priceLower()
{
	document.getElementById("photo").src="images/iphones.jpg";
	var phone = [];
    phone["IPhone XS"] = 1350;
    phone["IPhone XS max"] = 1500;
    phone["IPhone 8s plus"] = 850;
    phone["IPhone SE"] = 800;
	var item;
	var LowPrice = "List of low cost mobile phones <br/>";
	for(item in phone)
	{
		if(phone[item]<1000)
		{
			LowPrice += item + " : " + phone[item] + "<br>";
		}
	}
	
	document.getElementById("dis").innerHTML = LowPrice;
}
function checkPassword(){
    if(document.getElementById("pws").value!=document.getElementById("rpws").value)
    {
        alert("Password Mismatched!");
        return false;
    }
    else{
        alert("Success");
        return true;
    }
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
        document.getElementById("submitBtn").disabled=false;
    }
    else{
        document.getElementById("submitBtn").disabled=true;
    }
    
}
