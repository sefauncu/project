<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hava Durumu Scripti</title>

  
  <link href="css/bootstrap.css" rel="stylesheet" />
 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">

    $(function(){

    // toplam li sayısı
    var toplamLi = $("ul#liste li").size();

// sayfa veri sayısı
var veriSayisi = 1;

// Sayfalamayı uygula
$("ul#liste li:gt(" + (veriSayisi - 1) + ")").hide();

// sayfa sayısı bulalım
var sayfaSayisi = (toplamLi / veriSayisi);

// sayıyı yuvarlayalım
// Sayfa linklerini ekleyelim
for (var i = 1; i <= sayfaSayisi; i++)
{
  $("#sayfalama").append('<a href="javascript:void(0)">' + i + '</a>');
}

// İlk sayfaya aktif classı ekle
$("#sayfalama a:first").addClass("aktif");

// Sayfalama içindeki a'lardan birine tıklandığında
$(document.body).on("click", "#sayfalama a", function(){
    // indis değerini al (1 fazlası şeklinde)
    var indis = $(this).index() + 1;
    // toplam gözüken veri sayısını bul
    var gt = veriSayisi * indis;
    // aktif class işlemleri
    $("#sayfalama a").removeClass("aktif");
    $(this).addClass("aktif");
    // listedeki tüm lileri gizle
    $("ul#liste li").hide();
    // for ile toplam gözüken veri sayısı - veriSayisi işlemi yap ve veriSayisi kadarını göster
    for (i = gt - veriSayisi; i < gt; i++)
    {
      $("ul#liste li:eq(" + i + ")").show();
    }
  });

});

</script>
<style type="text/css">


  ul, li {margin: 0; padding: 0; list-style-type: none}
  ul#liste {padding: 20px;}
  #sayfalama a { color: #fff; background: #333; text-decoration: none;padding: 3px 7px;margin-right: 6px;}
 
  #sayfalama {padding: 0 20px 20px 20px;}
  #sayfalama a.aktif {background: red}



  body  {

   background-image: url("image/arkaplan3.jpg");
   background-attachment: fixed;
   -moz-background-size: 100% 100%;       /*Firefox 3.6*/
   -o-background-size: 100% 100%;         /*Opera 9.5*/
   -webkit-background-size: 100% 100%;    /*Safari 3.0, Chrome*/
   background-size: 100% 100%;}         /*w3c, Firefox 4.0, ie9*/


 </style>


</head>


<script type="text/javascript" src="js/main.js"></script>




<body>



  <div class="container">
    <div class="row text-center">

    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

        <div class="panel-body">

          <hr />
          <center><h3 style="color: white; font-size:20px;"><b>Hava Durumu Öğren</b></h3></center>

          <br />

          <div class="form-group input-group">

            <input style="width: 350px;"   type="text" class="form-control" id="sehir"></input>
          </div>




          <center><button id="havadurumu" class="btn btn-primary">Öğren</button>
            <button id="belirlizaman" class="btn btn-primary">Belirli-Zaman</button></center>
            <hr />

            <div>


              <center><b><p id="ogren" style="font-size: 15px; color:white;"></p></b></center>


            </div>

            <ul id="liste">
              <b><li id="belirli"></li></b>
              <b><li id="belirli2"></li></b>
               <b><li id="belirli3"></li></b>
                <b><li id="belirli4"></li></b>
                 <b><li id="belirli5"></li></b>
                  <b><li id="belirli6"></li></b>
                   <b><li id="belirli7"></li></b>

          




            </ul>
           <center><div id="sayfalama"></div></center>



          </div>

        </div>


      </div>
    </div>

  </body>

  </html>
