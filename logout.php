<?php
session_start();
session_destroy();
header('Location: pag_ini.php');
exit();

