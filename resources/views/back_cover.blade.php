<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Cover</title>
    <style>
        .content-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .content {
            font-size: 16px;
            color: #666;
        }

        .top-left {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            position: absolute;
            top: 8px;
            left: 16px;
        }

        .page-footer-back {
            position: fixed;
            bottom: 8px;
            left: 16px;
            width: 100%;
        }
    </style>
</head>

<body>
    <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('assets/images/back-image.jpg'))) }}" alt="" style="height: 100%; width: 100%;">
    <div class="top-left">
        <h1>{{strtoupper($title)}}</h1>
        <p class="content">Written By {{strtoupper($author)}}</p>

        <h1 class="content-name">Published By Bribooks.</h1>
        <p class="content">BriBooks is the world’s leading children creative writing platform, enabling children of all ages to learn creative writing, publish their books online, and sell printed-on-demand books on BriBooks.com and Amazon.com in one click.</p>
    </div>
    <footer class="page-footer-back">
        <div>
            <h2>BriBooks</h2>
            <p class="content">www.bribooks.com</p>
        </div>
    </footer>
</body>

</html>