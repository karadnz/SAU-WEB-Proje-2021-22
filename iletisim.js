function validateForm() {


    //e- mail

    let emailK = document.forms["iletisimForm"]["email"].value;
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    
    if (emailK == "") {
      alert("Lütfen e-mailinizi giriniz!");
      return false;
    }

    if (!(mailformat.test(iletisimForm.email.value)))
    {
        alert("Lütfen geçerli bir e-mail giriniz");
        return (false);
    }

    //isim

    let isimK = document.forms["iletisimForm"]["isim"].value;

    if (isimK == "") {
        alert("Lütfen isiminizi giriniz!");
        return false;
    }


    //mesaj

    let mesajK = document.forms["iletisimForm"]["msj"].value;

    if (mesajK == "") {
        alert("Lütfen mesaj kısmını doldurunuz");
        return false;
    }


    //şehir

    let sehirK = document.forms["iletisimForm"]["sehir"].value;

    if (sehirK == "0") {
        alert("Lütfen bir şehir seçiniz!");
        return false;
    }


    //adres

    let adresK = document.forms["iletisimForm"]["adres"].value;

    if (adresK == "") {
        alert("Lütfen adresini giriniz!");
        return false;
    }

    //yaş

    let yasK = document.forms["iletisimForm"]["yas"].value;

    if (yasK == "") {
        alert("Lütfen yaş aralığınızı seçiniz!");
        return false;
    }







  }



  function linkEkle(){
      document.getElementById("geriLink").value=window.location.href;
  }
  



  
