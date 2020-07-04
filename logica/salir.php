<?php

    session_start();

    session_destroy();

    header("location: ../index.php");
    /**Rederigir a la página de login**/
    exit();

?>