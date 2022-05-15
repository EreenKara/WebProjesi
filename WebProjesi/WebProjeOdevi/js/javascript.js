function control() {



	var x = document.forms["form1"]["isim"].value;
	if (x == "") {
		alert("İsim boş bırakılamaz");
		return false;
	}
	

	var y = document.forms["form1"]["soyisim"].value;
	if (y == "") {
		alert("Soyisim Kısmı Boş bırakılamaz");
		return false;

	}



	var b = document.forms["form1"]["yas"].value;
	if (b == "") {
		alert("Yaş Kısmı Boş bırakılamaz");
		return false;
	}


	var a = document.forms["form1"]["floatingTextarea"].value;
	if (a == "") {
		alert("Lütfen Ne İçin Mesaj Attığınızı Yazın.");
		return false;
	}

	
	return true;
}

function Temizle() {
	document.forms["form1"]["isim"].value="";
	document.forms["form1"]["soyisim"].value="";
	document.forms["form1"]["yas"].value="";
	document.forms["form1"]["floatingTextarea"].value="";
	

}

function mail() {
	var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
	if (forMail.test(y) == false) {
		alert("Geçersiz Mail Adresi!!!");
		return false;
	}
}