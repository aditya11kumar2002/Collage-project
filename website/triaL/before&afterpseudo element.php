<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo Element Selector</title>
    <style>
        p{
            font-size: 50px;
        }
        p:hover::before{
            content:"Hello";
            background-color: red;
            color: white;
        }
        p::after{
            content: "World";
            /*content:url(/workout fusion/website/image/1.jpg);*/
            background-color: yellow;
            color: white;
        }
      p::after{
        content: attr(data-caption);
        background-color: aqua;
      }
    </style>
</head>
<body>
    <h1>Pseudo Element Selector</h1>
    <p>Learn web design for us..</p>
    <p class="test" data-caption="Baba">Yahoo</p>
</body>
</html>