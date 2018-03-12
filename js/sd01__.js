//sd01

function loadDoc_sd01() {
    //reemplazar esta variable para cambiar la configuracion de servidor
    var servidor = "SD01";

    var updateInterval = 10000;
    load_server();
    function load_server() {
        solicitud("conf/" + servidor + ".php?item=mem&id=percent", function(data) {
            document.getElementById(servidor + '_alert').setAttribute('data-background-color', 'blue');
            document.getElementById(servidor + "_percent").innerHTML = data.value + " %";
            var hora = data.timestamp;
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
            var fecha = "Ultima Vez: " + month + "/" + day + " - Hora: " +  hour + ":" + min + ":" + sec;
            // alert(str);
            document.getElementById(servidor + "_tiempo").innerHTML = fecha;

        }, function(error) {
            // document.getElementById('sn03_alert').setAttribute('data-background-color', 'red');
            // document.getElementById("sn03_nombre").innerHTML = "SN03 Desconectado";
            // document.getElementById('pruebasn03').setAttribute('class', 'col-md-4 filterDiv Normal');
            console.log("adasd");
        })
        solicitud("conf/" + servidor + ".php?item=mem&id=total", function(data) {
            document.getElementById(servidor + "_total").innerHTML = Number(data.value/1024/1024).toFixed(0) + " MB";
            
        })
        solicitud("conf/" + servidor + ".php?item=cpu&id=total", function(data) {
            document.getElementById(servidor + "_cpu_load").innerHTML = data.value + " %";

        })
        solicitud("conf/" + servidor + ".php?item=load&id=min1", function(data) {
            document.getElementById(servidor + "_load_total").innerHTML = data.value;
        })
        
        var clearRAM = setInterval(function () {
            load_server();
            limpiar();
        }, updateInterval);
        var limpiar = function () {
            clearInterval(clearRAM);
        };
        }
        document.getElementById(servidor + '_alert').setAttribute('data-background-color', 'red');
}
