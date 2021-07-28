/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// 4: VISA, 51 -> 55: MasterCard, 36-38-39: DinersClub, 34-37: American Express, 65: Discover, 5019: dankort


$(function(){
  
  var cards = [{
    nome: "mastercard",
    colore: "#0061A8",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/mastercard.png"
  }, {
    nome: "citibanamex",
    colore: "#2c82d5",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/citibanamex.png"
  }, {
    nome: "scotiabank",
    colore: "#7C1213",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/scotiabank-white.png"
  }, {
    nome: "santander",
    colore: "#A8A8A8",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/santander.png"
  }, {
    nome: "azteca",
    colore: "#508014",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/azteca.png"
  }, {
    nome: "inbursa",
    colore: "#8F76FF",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/inbursa.png"
  },
  {
    nome: "visa",
    colore: "#E2CB38",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/visa.png"
  }, {
    nome: "coppel",
    colore: "#F2D515",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/bancoppel.svg"
  }, {
    nome: "hsbc",
    colore: "#A0A0A0",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/hsbc.png"
  }, {
    nome: "bbva",
    colore: "#00C8D4",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/bbva.png"
  }, {
    nome: "banbajio",
    colore: "#D2AA36",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/ban-bajio.png"
  }, {
    nome: "banorte",
    colore: "#919191",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/banorte.png"
  },
  {
    nome: "dinersclub",
    colore: "#888",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/diners.png"
  }, {
    nome: "americanExpress",
    colore: "#63b09f",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/american.png"
  }, {
    nome: "discover",
    colore: "#86B8CF",
    src: "../../../../../marketplace/mercado-a-distancia/assets/payment-card/img/discover.webp"
  }];
  
  var month = 0;
  var html = document.getElementsByTagName('html')[0];
  var number = "";
  
  var selected_card = -1;
  
  $(document).click(function(e){
    if(!$(e.target).is(".ccv") || !$(e.target).closest(".ccv").length){
      $(".card_payment").css("transform", "rotatey(0deg)");
      $(".seccode").css("color", "var(--text-color)");
    }
    if(!$(e.target).is(".expire") || !$(e.target).closest(".expire").length){
      $(".date_value").css("color", "var(--text-color)");
    }
    if(!$(e.target).is(".number") || !$(e.target).closest(".number").length){
      $(".card_number").css("color", "var(--text-color)");
    }
    if(!$(e.target).is(".inputname") || !$(e.target).closest(".inputname").length){
      $(".fullname").css("color", "var(--text-color)");
    }
  });
  
  
  // Input del número de la tarjeta
  $(".number").keyup(function(event){
    $(".card_number").text($(this).val());
    number = $(this).val();
    
    if(parseInt(number.substring(0, 2)) == 50){
      selected_card = 0; // Mastercard
    }else if(parseInt(number.substring(0, 2)) == 51 || parseInt(number.substring(0, 2)) == 52){
      selected_card = 1; //    - Citibanamex
    }else if(parseInt(number.substring(0, 2)) == 53 || parseInt(number.substring(0, 2)) == 54){
      selected_card = 2; //    - Scotiabank
    }else if(parseInt(number.substring(0, 2)) == 55 || parseInt(number.substring(0, 2)) == 56){
      selected_card = 3; //    - Santander
    }else if(parseInt(number.substring(0, 2)) == 57 || parseInt(number.substring(0, 2)) == 58){
      selected_card = 4; //    - Banco Azteca
    }else if(parseInt(number.substring(0, 2)) == 59){
      selected_card = 5; //    - Inbursa
    }else if(parseInt(number.substring(0, 2)) == 40){
      selected_card = 6; // VISA
    }else if(parseInt(number.substring(0, 2)) == 41 || parseInt(number.substring(0, 2)) == 42){
      selected_card = 7; //    - Coppel
    }else if(parseInt(number.substring(0, 2)) == 43 || parseInt(number.substring(0, 2)) == 44){
      selected_card = 8; //    - HSBC
    }else if(parseInt(number.substring(0, 2)) == 45 || parseInt(number.substring(0, 2)) == 46){
      selected_card = 9; //    - BBVA
    }else if(parseInt(number.substring(0, 2)) == 47){
      selected_card = 10; //   - Banbajio
    }else if(parseInt(number.substring(0, 2)) == 48 || parseInt(number.substring(0, 2)) == 49){
      selected_card = 11; //   - Banorte
    }else if(parseInt(number.substring(0, 2)) == 36 || parseInt(number.substring(0, 2)) == 38 || parseInt(number.substring(0, 2)) == 39){
      selected_card = 12; // DinersClub
    }else if(parseInt(number.substring(0, 2)) == 34 || parseInt(number.substring(0, 2)) == 37){
      selected_card = 13; // American Express
    }else if(parseInt(number.substring(0, 2)) == 65){
      selected_card = 14; // Discover
    }else{
      selected_card = -1; 
    }
    
    if(selected_card != -1){
      html.setAttribute("style", "--card-color: " + cards[selected_card].colore);  
      $(".bankid").attr("src", cards[selected_card].src).show();
    }else{
      html.setAttribute("style", "--card-color: #cecece");
      $(".bankid").attr("src", "").hide();
    }
    
    if($(".card_number").text().length === 0){
      $(".card_number").html("&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF;");
    }

  }).focus(function(){
    $(".card_number").css("color", "white");
  }).on("keydown input", function(){
    
    $(".card_number").text($(this).val());
    
    if(event.key >= 0 && event.key <= 9){
      if($(this).val().length === 4 || $(this).val().length === 9 || $(this).val().length === 14){
        $(this).val($(this).val() +  " ");
      }
    }
  });
  
  // Input del nombre de la tarjeta
  $(".inputname").keyup(function(){  
    $(".fullname").text($(this).val());  
    if($(".inputname").val().length === 0){
        $(".fullname").text("Nombre Completo");
    }
    return event.charCode;
  }).focus(function(){
    $(".fullname").css("color", "white");
  });
  
  // Código de seguridad CCV
  $(".ccv").focus(function(){
    $(".card_payment").css("transform", "rotatey(180deg)");
    $(".seccode").css("color", "white");
  }).keyup(function(){
    $(".seccode").text($(this).val());
    if($(this).val().length === 0){
      $(".seccode").html("&#x25CF;&#x25CF;&#x25CF;");
    }
  }).focusout(function() {
      $(".card_payment").css("transform", "rotatey(0deg)");
      $(".seccode").css("color", "var(--text-color)");
  });
    
  
  // Input de la fecha de vencimiento
  $(".expire").keypress(function(event){
    if(event.charCode >= 48 && event.charCode <= 57){
      if($(this).val().length === 1){
          $(this).val($(this).val() + event.key + " / ");
      }else if($(this).val().length === 0){
        if(event.key == 1 || event.key == 0){
          month = event.key;
          return event.charCode;
        }else{
          $(this).val(0 + event.key + " / ");
        }
      }else if($(this).val().length > 2 && $(this).val().length < 9){
        return event.charCode;
      }
    }
    return false;
  }).keyup(function(event){
    $(".date_value").html($(this).val());
    if(event.keyCode == 8 && $(".expire").val().length == 4){
      $(this).val(month);
    }
    
    if($(this).val().length === 0){
      $(".date_value").text("MM / AAAA");
    }
  }).keydown(function(){
    $(".date_value").html($(this).val());
  }).focus(function(){
    $(".date_value").css("color", "white");
  });
});

