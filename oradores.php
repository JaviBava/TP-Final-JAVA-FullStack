<?php
$conexion=mysqli_connect("localhost","root","1234","persona");

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">

        <style>
            h1 {
                text-align: center;
            }
            table {
                width: 50%;
                border: 2px solid black;
                margin:auto;
                margin-top:3%;
            }
            tr {
                height: 40px;
                background-color: lightcyan;
                font-weight: bolder;
                
            }

            div {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 30px;
            }

            button{
                width: 300px;
                height: 50px;
                font-size: 20px;
            }

            a {
                text-decoration: none;
            }
            </style>
    </head>

    <header>
        <img src="https://user-images.githubusercontent.com/83146564/137408912-013f0d0c-37d1-4dc2-a1b5-77356c1003f3.png" alt="">
    </header>

    
    <body>
        <h1>Oradores Registrados</h1>
        <br>
        <table>
           <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Tema</td>
           </tr>

           <?php

           $sql="SELECT * from persona";
           $result=mysqli_query($conexion,$sql);

           while($mostrar=mysqli_fetch_array($result)){

           ?>

           <tr>
            <td><?php echo $mostrar ["id"] ?></td>
            <td><?php echo $mostrar ["Nombre"] ?></td>
            <td><?php echo $mostrar ["Apellido"] ?></td>
            <td><?php echo $mostrar ["Tema"] ?></td>
           </tr>

           <?php
}
           ?>

        </table>

<div>
        <button>Administrar</button>
</div>      
<div>
<a href="http://127.0.0.1:5500/"><h3>Ir al Inicio</h3></a>
</div>  
        <script src="" async defer></script>
    </body>
</html>