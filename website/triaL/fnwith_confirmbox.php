<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
      function show(){
        var a=confirm("This is Confirm BOx");
        if(a==true){
          document.write("User wants to continue");
        }
        else{
            document.write("User does not continue");
        }
      }


    </script>
</head>
<body>
   <input type="button" value="Click me" onclick="show()"> 
</body>
</html>