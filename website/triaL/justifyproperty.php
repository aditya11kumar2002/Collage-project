<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justify property</title>
</head>
<style>
    .box{
        background-color: black;
        flex-direction: column;
    }
    .container{
        background-color: red;
        justify-items:center;
    }
    @media (max-width:400px) {
        .box{
        background-color: yellow;
        }
    }
</style>
<body>
    <div class="box">hello</div>
    <div class="container"></div>
</body>
</html>