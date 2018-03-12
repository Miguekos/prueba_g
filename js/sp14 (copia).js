//sd01

function loadDoc_sd01() {
    

    var updateInterval = 10000;
    load_server();
    function load_server() {
        
        solicitud("conf/sd01.php", function(value) {
            // console.log(Number(value.total/1024/1024).toFixed(0));
            document.getElementById('sd01_alert').setAttribute('data-background-color', 'blue');
            document.getElementById("sd01_nombre").innerHTML = "SD01";
            document.getElementById("sd01_used").innerHTML = Number(value.used/1024/1024).toFixed(0) + " MB";
            document.getElementById("sd01_total").innerHTML = Number(value.total/1024/1024).toFixed(0) + " MB";
            document.getElementById("sd01_percent").innerHTML = value.percent + " %";


        }, function(error) {
            document.getElementById('sd01_alert').setAttribute('data-background-color', 'red');
            document.getElementById("sd01_nombre").innerHTML = "SD01 Desconectado";
            console.log(error);
        })
        
        solicitud("conf/sd01.php?valor=cpu", function(value) {
            // console.log(Number(value.free/1024/1024).toFixed(0));
            document.getElementById("sd01_cpu_load").innerHTML = value.total + " %";
            if (value.total > 90) {
                document.getElementById('sd01_cpu_load').setAttribute('data-background-color', 'red');
                
            }else if(value.total > 50){
                document.getElementById('sd01_cpu_load').setAttribute('data-background-color', 'orange');

            }else{
                document.getElementById('sd01_cpu_load').setAttribute('data-background-color', 'blue');
            }

        }, function(error) {
            console.log(error);
        })

        solicitud("conf/sd01.php?valor=load", function(value) {
            // console.log(Number(value.min1/1024/1024).toFixed(0));
            document.getElementById("sd01_load_total").innerHTML = value.min1;

        }, function(error) {
            console.log(error);
        })
        var clearRAM = setInterval(function () {
                load_server()
            }, updateInterval);
            clearInterval(clearRAM);
            
        }
        
        
}
