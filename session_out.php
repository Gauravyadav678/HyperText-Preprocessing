<?php

session_start();
session_unset();
session_destroy();

echo "you have loged out";

?>