<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Welcome <?=$name?>
<h4> Age :  <?=$age?> </h4>
<h4> Bio : <?=$bio?> </h4>
<h2>Add new attributes </h2>

<form action="/profile" method="post" style="display: block">

    <input type="number" name="age" placeholder="age" style="display: block">
    <input type="text" name="bio" placeholder="bio" style="display: block">

    <input type="submit" value="Submit" name="update" style="display: block">
</form>

</body>

</html>