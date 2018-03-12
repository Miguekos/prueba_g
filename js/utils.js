//Utils

function solicitud(URL, callback, error) {
    var req = new XMLHttpRequest();

    req.addEventListener("progress", updateProgress, false);
    req.addEventListener("load", transferComplete, false);
    req.addEventListener("error", transferFailed, false);
    req.addEventListener("abort", transferCanceled, false);

    req.open("GET", URL);
    req.send(null);

    // progress on transfers from the server to the client (downloads)
    function updateProgress(evt) {
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;

      } else {
        // Unable to compute progress information since the total size is unknown
      }
    }

    function transferComplete(evt) {
      // console.log("La tranferencia esta completa.");
      // console.log(req.status);
      // console.log(req.responseText);
      callback(JSON.parse(req.responseText));
      // var mem = JSON.parse(req.responseText);
      // document.getElementById(DOC).innerHTML = mem[PAR] + " MB";
        
    }

    function transferFailed(evt) {
      console.log("Ocurrio un error en la transferecia de archivo.");
        
        error(evt)
    }

    function transferCanceled(evt) {
      console.log(evt);
    }
}