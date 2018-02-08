$(document).ready(function(){
    $("#havadurumu").click(function(){
        var sehir = $("#sehir").val();
        var key = 'a180e7708a808705d55af016ca58f45e';

        $.ajax({
            url:'http://api.openweathermap.org/data/2.5/weather',
            dataType:'json',
            type:'GET',
            data:{ q:sehir, appid: key, units: 'metric'},

            success: function(data){


                var wf = '';
                $.each(data.weather, function(index, val){


                    wf += '<p><b>' + data.name + " " +data.sys.country + "</b><img src=icon/"+ val.icon + ".png></p>"+
                    data.main.temp + '&deg;C' + ' | ' + val.main + ", " +
                    val.description + "<br><br>"

                });
                $("#ogren").html(wf);

            }
        });



    });
}); 

$(document).ready(function(){
    $("#belirlizaman").click(function(){
        var sehir = $("#sehir").val();
        var key = 'a180e7708a808705d55af016ca58f45e';

        $.ajax({
            url:'http://api.openweathermap.org/data/2.5/forecast',
            dataType:'json',
            type:'GET',
            data:{ q:sehir, appid: key, units: 'metric'},

            success: function(data){


                var wf = '';
                $.each(data.list, function(index, val){

                    wf +=  '<p><b>' + val.main.temp + '&deg;C'  + ' | ' + 
                    val.dt_txt + ' ' + '<hr>'  




                });


                var bosluksay = new Array();

                bosluksay = wf.split(' ');          
                
                for(var i=0;i<157;i++){

                    if(i<20){
                        elem = document.getElementById('belirli');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];  
                    }else if(i>=20&&i<40){
                        elem = document.getElementById('belirli2');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }else if(i>=40&&i<60){
                        elem = document.getElementById('belirli3');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }else if(i>=60&&i<80){
                        elem = document.getElementById('belirli4');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }else if(i>=80&&i<100){
                        elem = document.getElementById('belirli5');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }else if(i>=100&&i<120){
                        elem = document.getElementById('belirli6');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }else if(i>=120&&i<140){
                        elem = document.getElementById('belirli7');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }else if(i>=140&&i<157){
                        elem = document.getElementById('belirli8');
                        elem.innerHTML += ' ';
                        elem.innerHTML += bosluksay[i];
                    }

                }


                /*  $("#belirli").html(wf.substr(0,200));*/

            }

        });
    });
}); 


$(document).ready(function(){

    var default_text = 'Lütfen şehir giriniz...';


    $('input[type="text"]').attr('value',default_text).focus(function(){

      if ($(this).val()==default_text) {
       $(this).attr('value','');
   }
}).blur(function(){
  if ($(this).val()=='') {
      $(this).attr('value',default_text);	
  }

});
});
