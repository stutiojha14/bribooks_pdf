<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Page</title>
    <style>
        .page-number {
            font-size: 14px;
            color: #666;
            text-align: right;
            bottom: 8px;
        }

        .page-publish {
            font-size: 14px;
            color: #666;
            text-align: left;
            bottom: 8px;
        }

        .page-footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div style="text-align: justify;">
        <p>BriBooks is the world’s leading children creative writing platform, enabling children of all ages to learn creative writing, publish their books online, and sell printed-on-demand books on BriBooks.com and Amazon.com in one click.
            BriBooks is the world’s leading children creative writing platform, enabling children of all ages to learn creative writing, publish their books online, and sell printed-on-demand books on BriBooks.com and Amazon.com in one click.
            BriBooks is the world’s leading children creative writing platform, enabling children of all ages to learn creative writing, publish their books online, and sell printed-on-demand books on BriBooks.com and Amazon.com in one click.
            BriBooks is the world’s leading children creative writing platform, enabling children of all ages to learn creative writing, publish their books online, and sell printed-on-demand books on BriBooks.com and Amazon.com in one click.
        </p>
    </div>

    <footer class="page-footer">
        <div>
            <p class="page-number">Page {{ $pageNumber }}</p>
            <p class="page-publish">Published By Bribooks</p>
        </div>
    </footer>
</body>

</html>