<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Create Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Halaman Create Post</h1>
    <form action="http://localhost/blog/public/post/store" method="post">
        {{ csrf_field() }}
        <label for="title">Judul</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>