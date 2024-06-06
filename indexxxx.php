<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .header{
            border: 1px solid;
            width:100%;
            height: 100px;
        }
        .content{
            border: 2px solid blue;
            width:100%;
            height: 400px;
        }
        .content .content1{
            border: 2px solid red;
            width:100%;
            height: 300px;
            display: flex;
        }
        .content .content1 .text{
            border:1px solid green;
            width:50%;
            height:250px;
        }
        .content .content1 .image{
            border:1px solid green;
            width:50%;
            height:250px;
        }
    </style>
</head>
<body>
    <div class="header">

    </div>
    <div class="content">
        <h2>hello</h2>
        <div class="content1">
            <div class="text"></div>
            <div class="image"></div>
        </div>
    </div>
</body>
</html>