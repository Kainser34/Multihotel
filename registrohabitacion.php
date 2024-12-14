<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="registroHab" id="registroHab">
        <label for="">N° de Habitación</label>
        <input type="text" name="numhabitacion" id="hab"><br>
        <label for="">Tipo de habitación</label>
        <select name="tipoh" id="tipoh">
            <option name="tipoh" value="individual">individual</option>
            <option name="tipoh" value="Doble">Doble</option>
            <option name="tipoh" value="Matrimonial">Matrimonial</option>
        </select>
        <label for="">Precio</label>
        <input type="number" name="precio" id="precio"><br>
        <label for="">Servicios</label>
        <input type="text" name="servicios" id="servicios"><br>
        <label for="">Comodidades</label>
        <input type="text" name="comodidades" id="comodidades"><br>
        <select name="estado" id="estado">
            <option name="estadoh" value="alojado">alojado</option>
            <option name="estadoh" value="Reservado">Reservada</option>
            <option name="estadoh" value="Limpieza">Limpieza</option>
        </select><br>
        <input type="submit" name="regishab" value="RegisH">

</form>
</body>
</html>