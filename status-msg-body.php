<?php
    $statusMsg = !empty($_SESSION['body-msg'])?$_SESSION['body-msg']:'';
    unset($_SESSION['body-msg']);
    echo $statusMsg;
?>