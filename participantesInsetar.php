<?php
    $miConexion = mysqli_connect('localhost','root','','demo03');
    $misProfesiones = mysqli_query($miConexion,'SELECT Codigo,Nombre FROM tblProfesion ORDER BY Nombre');
    $misCalificaciones = mysqli_query($miConexion,'SELECT Codigo,Nombre FROM tblCalificacion ORDER BY Nombre');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertar Participante</h1>
    <form action="../actions/participanteInsertarConfirmacion.php" method="post">

    <table>
        <tr>
        <td>DNI</td>
        <td><input type="text" name="txtDNI"></td>
        </tr>
        <tr>
            <td>nombres</td>
            <td><input type="text" name="txtNombres"></td>
        </tr>
        <tr>
            <td>Ap. Paterno</td>
            <td><input type="text" name="txtApPaterno"></td>
        </tr>
        <tr>
            <td>Ap. Materno</td>
            <td><input type="text" name="txtApMaterno"></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td>
                <input type="radio" name="rbSexo" value="M" id="rvMas"> 
                <label for="rbMas ">Maculino</label>
                 <input type="radio" name="rbSexo" value="F" id="rbFem">
                 <label for="rbFem ">Femenino</label>
                 <input type="radio" name="rbSexo" value="N" id="rbNoe">
                 <label for="rbNoe">No Especificado</label>
            </td>
        </tr>
        <tr>
            <td>fecha de naci.</td>
            <td> <input type="date" name="txtFechaNac"></td>
        </tr>
        <tr>
            <td>Correo</td>
            <td><input type="text" name="txtCorreo"></td>
        </tr>
        <tr>
            <td>Profesion</td>
            <td>
               <select name="cmbProfesion">
           <?php
            while ($miFila = mysqli_fetch_array($misProfesiones)) 
            {
            ?>
                   <option value="<?php echo $miFila['Codigo']; ?>"><?php echo $miFila['Nombre']; ?> </option>
            <?php
              }
            ?>

               </select> 
            </td>
        </tr>

        <tr>
            <td>Calificacion</td>
            <td>
            <select name="cmbCalificacion">
           <?php
            while ($miFila = mysqli_fetch_array($misCalificaciones)) 
            {
            ?>
                   <option value="<?php echo $miFila['Codigo']; ?>"><?php echo $miFila['Nombre']; ?> </option>
            <?php
              }
            ?>

               </select> 
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Guardar"></td>
        </tr>
    </table>
    </form>
</body>
</html>