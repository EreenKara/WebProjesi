async function  getBilgi() {
    const ch = await fetch("https://www.breakingbadapi.com/api/characters");
    const bilgiler = await ch.json();

    console.log(bilgiler);

    document.querySelector("#resim1").src = bilgiler[0].img;
    document.querySelector("#resim2").src = bilgiler[1].img;
    document.querySelector("#resim3").src = bilgiler[2].img;
    document.querySelector("#isim1").innerHTML="Adı:  "+bilgiler[0].name;
    document.querySelector("#isim2").innerHTML="Adı:  "+bilgiler[1].name;
    document.querySelector("#isim3").innerHTML="Adı:  "+bilgiler[2].name;
    document.querySelector("#nickname1").innerHTML="Lakabı:  "+bilgiler[0].nickname;
    document.querySelector("#nickname2").innerHTML="Lakabı:  "+bilgiler[1].nickname;
    document.querySelector("#nickname3").innerHTML="Lakabı:  "+bilgiler[2].nickname;
    


    const ep = await fetch("https://www.breakingbadapi.com/api/episodes");
    const bolumler = await ep.json();
    
    console.log(bolumler);

    document.querySelector("#paragraf1").innerHTML += "İlk izlediğim andan itibaren çok hoşuma giden bir dizi olmuştur Breaking Bad.  ";
    document.querySelector("#paragraf1").innerHTML += bolumler[0].air_date;
    document.querySelector("#paragraf1").innerHTML += " tarihinde ilk bölümü yayınlanıp ";
    document.querySelector("#paragraf1").innerHTML += bolumler[61].air_date;
    document.querySelector("#paragraf1").innerHTML += " tarihinde son bölümü yayınlanmıştır. Gerçi ben daha sonraları izleme fırsatı buldum. Ama gerçekten çok güzel bir polisiye dizi.";
    document.querySelector("#paragraf1").innerHTML += " ";
    
    
}
getBilgi();

