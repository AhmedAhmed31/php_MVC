<?php
require 'header.php';
?>
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