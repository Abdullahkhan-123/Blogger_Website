<?php    
if(!isset($_SESSION['UserName']))
{

    echo "<script>
                alert('Accesss To admin Panel please login')
                window.location.href='../login.php';
            </script>";
            
}
?>


