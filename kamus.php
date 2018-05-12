<link rel="stylesheet" type="text/css" href="config/style3.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<div class="halaman1">
	<h2>Kamus Bahasa Inggris - Indonesia</h2>
<p>Ini adalah kamus sederhana yang masih kurang sempurna, kamus ini hanya digunakan untuk uji coba dan juga untuk memenuhi kegiatan UAS mata kuliah OTOMATA.</p>
</div>
<center>
<div class="halaman">
<script>
function getXMLHttpRequest(){
  if(window.ActiveXObject){
    return new ActiveXObject("Microsoft.XMLHTTP");
  }else if(window.XMLHttpRequest){
    return new XMLHttpRequest();  
  }else alert("Status : Can not create XMLHttpRequest Object");
}
var xmlhttp=getXMLHttpRequest();
function sendRequest(pageURL,bahasa){
  if(xmlhttp.readyState==4 || xmlhttp.readyState==0){
    
    xmlhttp.onreadystatechange=function(){
      if(xmlhttp.readyState==4 && xmlhttp.status==200){
      
      if(bahasa=='indonesia'){
      document.getElementById('konveringgris').value=xmlhttp.responseText;
      }else if(bahasa=='inggris'){
      document.getElementById('konverindonesia').value=xmlhttp.responseText;
      }
      }
    }
    xmlhttp.open('GET',pageURL,true);
    xmlhttp.send(null); 
  }
}
function konversi(bahasa){
if(bahasa=='indonesia'){
sendRequest('proses.php?kata='+document.getElementById('Bindonesia').value+'&bahasa=indonesia','indonesia'); 
} else if(bahasa=='inggris'){
sendRequest('proses.php?kata='+document.getElementById('Binggris').value+'&bahasa=inggris','inggris'); 
}
}
</script>
        <form class="bahasa" action="">
        <table>
          <tr>
            <td><input style="text-align: center; height: 40px; width: 200px;" name="Bindonesia" type="text" id="Bindonesia" placeholder="indonesia" class="input" /></td>
            <td><input type="button" value="Terjemah ke Inggris" onclick="konversi('indonesia');" class="submit" /></td>
            <td><input style="text-align: center; height: 40px; width: 200px;" name="konveringgris" type="text" id="konveringgris" placeholder="inggris" class="input color"/></td>
          </tr>
 
           <tr class="en">
            <td><input style="text-align: center; height: 40px; width: 200px;" name="Binggris" type="text" id="Binggris" placeholder="inggris" class="input"/></td>
            <td><input type="button" value="Terjemah ke Indonesia"  onclick="konversi('inggris');" class="submit"/></td>
            <td><input style="text-align: center; height: 40px; width: 200px;" name="konverindonesia" type="text" id="konverindonesia" placeholder="indonesia" class="input color"/></td>
          </tr>
        </table>
      </form>
</div>
<div class="nb">
	NB: Kata yang ada dalam database masih sedikit jadi kalau ingin mencoba bisa memasukkan kata berikut : makan, minum, senang, marah, dll.
	<p>atau kamu juga bisa menerjemahkannya ke bahasa indonesia dengan kata berikut: eat, drink, dll.</p>
</div>
</center>