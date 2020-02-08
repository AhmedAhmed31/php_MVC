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
<h4> <?=$Age?> </h4>
<h4> <?=$bio?> </h4>

    <h2>Add new attributes </h2>

<form action="profile" method="post" style="display: block">

    <input type="text" name="age" placeholder="age" style="display: block">
    <textarea name="bio" rows="4" cols="50" style="display: block">
    </textarea>

    <input type="submit" value="Submit" style="display: block">
</form>

</body>

</html>