<?php
function loadView($view, $data = [])
{
    extract($data);

    return require "src/Views/{$view}.php";
}
