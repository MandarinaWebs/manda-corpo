<?php 
$archivo=$_GET["archivo"]; 
$galeria=$_GET["galeria"];
unlink($archivo); 
echo "<script language=Javascript> location.href=\"galeriaDefinitiva2.php?galeria=$galeria\"; </script>"; 
?>