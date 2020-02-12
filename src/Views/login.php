<?php
require 'Rightside.php';
?>
<form action="/login" method="post">

    <div class="input-group">
        <input class="require" id="email" type="email" name="email" placeholder="Email">
        <span>*</span>
        <i class="pull-right fa fa-envelope-o" aria-hidden="true"></i>
    </div>
    <div class="input-group">
        <input class="require" type="password" id="password" name="password" placeholder="Password">
        <span id="fix">*</span>
        <i class="pull-right fa fa-lock" aria-hidden="true"></i>
    </div>
    <div class="input-group">
        <input type="submit" id='LOGIN' name="login" value="LOGIN" class="btn btn-lg pull-left">
    </div>
        <div id="error"></div>
</form>

</div>
</div>
</div>

</div>