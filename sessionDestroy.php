<?php     
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    session_destroy();
?>
<script>
    if(comprobarCookie('enigma2counter')){
            eraseCookie("enigma2counter")
    }
</script>
<?php  
    header('Location:index.php');
    exit();
?>
