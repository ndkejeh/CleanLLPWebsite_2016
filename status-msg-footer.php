<?php
    $statusMsg = !empty($_SESSION['footer-msg'])?$_SESSION['footer-msg']:'';
    unset($_SESSION['footer-msg']);
    echo $statusMsg;
?>