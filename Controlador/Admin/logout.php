<?php

    include_once 'login.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../../index.php");
