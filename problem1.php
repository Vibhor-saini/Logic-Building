<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div>
    <p id="test1" style="text-align: center; font-size: 100px;">1</p>
    <p id="test2">Here is: </p>
    </div>
</body>

</html>
<script>
    var count = 2;
    $(document).ready(function() {
        $("#test1").click(function(){
            $("#test1").text(count);
            count++;

            //  $("#test2").text("Here is " + $("#test1").text());


        });
    });
</script>
