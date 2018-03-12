<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>

$(document).ready(function() {
    $.ajax({
        url: "http://192.168.0.103:61208/api/2/mem"
    }).then(function(data) {
       $('.greeting-available').append(data.available);
       $('.greeting-used').append(data.used);
    });
});

</script>
</head>
<body>
            <div>
                <p class="greeting-id">The ID is </p>
                <p class="greeting-content">The content is </p>
            </div>
</body>
</html>


