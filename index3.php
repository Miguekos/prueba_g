<!DOCTYPE html>
<html>
  <body>

    <h2>Get data as JSON from a PHP file, and convert it into a JavaScript array.</h2>

    <p id="demo"></p>

    <script>

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            // var hora = document.getElementById("demo").innerHTML = myObj['timestamp'];
            var hora = myObj['timestamp'];

              var date = new Date(hora);
              var month = date.getMonth() + 1;
              var day = date.getDate();
              var hour = date.getHours();
              var min = date.getMinutes();
              var sec = date.getSeconds();

              month = (month < 10 ? "0" : "") + month;
              day = (day < 10 ? "0" : "") + day;
              hour = (hour < 10 ? "0" : "") + hour;
              min = (min < 10 ? "0" : "") + min;
              sec = (sec < 10 ? "0" : "") + sec;

              // var str = date.getFullYear() + "-" + month + "-" + day + "-" +  hour + ":" + min + ":" + sec;
              var str = month + "/" + day + " - Hora: " +  hour + ":" + min + ":" + sec;

              /*alert(str);*/
              document.getElementById("demo").innerHTML = str;
          
        }
    };
    xmlhttp.open("GET", "http://192.168.56.102:9200/glances/mem/free/_source", true);
    xmlhttp.send();


    // Convert JSON String to JavaScript Object
    // var JSONString = 'http://192.168.56.103:8086/query?db=donals&u=miguel&p=alex&q=SELECT%20seconds%20FROM%20"localhost.uptime"%20ORDER%20BY%20DESC%20limit%201';
    // console.log(JSONString)
    // var JSONObject = JSON.parse(JSONString);
    // console.log(JSONObject);      // Dump all data of the Object in the console
    // alert(JSONObject[0]['seconds']); // Access Object data

    </script>

  </body>
</html>