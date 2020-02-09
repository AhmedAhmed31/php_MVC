<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="/static/img/logo.png"/>

    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/static/css/stylesheet.css">
</head>

<body>
<h1>Welcome <?= $name ?>
    <h4> Age : <?= $age ?> </h4>
    <h4> Bio : <?= $bio ?> </h4>
    <h2>Add new attributes </h2>
    <form action="/profile" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Age</label>
            <input type="text" name='age' class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">BIO</label>
            <input type="text" name='bio' class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">

            <input type="submit" value="Submit" name="update" style="display: block">

        </div>
    </form>
    <form action="/logout" method="post">

        <div class="form-group">

            <input type="submit" value="logout" name="logout" style="display: block">

        </div>
    </form>


</body>

</html>