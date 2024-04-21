<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Cover</title>
    <style>
        .top-center {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('assets/images/front-image.jpg'))) }}" alt="" style="height: 100%; width: 100%;">
    <h1 class="top-center">{{strtoupper($title)}}</h1>
    <footer>
        <div>
            <p class="footer">Written By {{strtoupper($author)}}</p>
        </div>
    </footer>
</body>

</html>