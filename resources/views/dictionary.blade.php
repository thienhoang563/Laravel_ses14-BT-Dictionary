<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" name="dictionary" action="{{route('result')}}">
    @csrf
    <h1>Simple Dictionary</h1>
    <input type="text" name="word" placeholder="Nhap tu">
    <select name="select">
        <option value="viet">English to Vietnamese</option>
        <option value="eng">Vietnamese to English</option>
    </select>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>