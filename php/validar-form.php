<?php
if (isset($_POST['submit'])){

    include "conexion.php";

    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    
    $query = mysqli_query ($conn, "SELECT * FROM login WHERE apellido = '".$apellido."' and nombre = '".$nombre."'");
    $nr = mysqli_fetch_array($query);   

    if ($nr)
        {

            echo ucfirst("$nombre confirmaste tu asistencia con exito <br/>");
            echo "<script>alert('Se ha inscrito correctamente.');</script>";

            echo "Esta es tu tarjeta de invitacion <br />";
            echo "Descargala y no te olvides de presentarla al ingreso";
?>
            <img class='tarjeta-img' src="data:image/jpg;base64,<?php echo base64_encode($nr['tarjeta']);?>"/>
            <a href="data:image/jpg;base64,<?php echo base64_encode($nr['tarjeta']);?>" class="descargaT" download="tarjeta-de-casamiento.jpeg"> Descarga tu tarjeta </a>
<?php             
        }
        elseif (!$nr)
        {
            echo "<p class='error'> * Apellido y/o Nombre incorrectos </p>";
        }
    }
?>