<?php
include('database.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="Champions League.png" type="image/x-icon">
    
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lista oficial de partidos y resultados de la UEFA Champions League" />

    <title>UEFA Champions league</title>
</head>

<body> 
    
    <ul class="nav nav-pills nav-fill" id="navegar">
        <li class="nav-item col-12 col-md-2" >
          <a class="nav-link " href="#">Fase de grupos</a>
        </li>
        <li class="nav-item col-12 col-md-2">
          <a class="nav-link" href="#">Octavos de final</a>
        </li>
        <li class="nav-item col-12 col-md-4" id="nav">
            <a class="active text-warning" href="index.php" id="inicio">UEFA CHAMPIONS LEAGUE</a>
        </li>
        <li class="nav-item col-12 col-md-2">
          <a class="nav-link" href="#">Semifinal</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="false">Final</a>
        </li>
      </ul>

   <div class=" col-12 container " >
     <h3 id="cuartos">Cuartos de final - ida</h3>
   </div>

    <div class="row" id="tabla">
              <div class="col-5 col-md-2" >
                <p>Liverpool</p>
            </div>
            <div class="col-2 col-md2">
                <p>VS</p>
            </div>
            <div class="col-5 col-md-2">
                <p>Real Madrid</p>
            </div>
            <div class="col-5 col-md-2">
                <p>Manchester city</p>
            </div>
            <div class="col-2 col-md2">
                <p>VS</p>
            </div>
            <div class="col-5 col-md-2">
                <p>Dormunt</p>
            </div>

           <div class="col-5 col-md-2">
                <p>Bayern</p>
            </div>
            <div class="col-2 col-md2">
                <p>VS</p>
            </div>
            <div class="col-5 col-md-2">
                <p>Paris</p>
            </div>

            <div class="col-5 col-md-2">
                <p>Porto</p>
            </div>
            <div class="col-2 col-md2">
                <p>VS</p>
            </div>
            <div class="col-5 col-md-2">
                <p>Chelsea</p>
            </div>

            </div>
 



    <table class="table table-sm-6" id="tabla2">
        <thead>
          <tr>
            <th scope="col">LIGA</th>
            <th scope="col">EQUIPO</th>
            <th scope="col">FECHA</th>
            <th scope="col">RESULTADO</th>
          </tr>
        </thead>
     
        <?php 
        $sql="SELECT * FROM partidos";
        $result = mysqli_query($conexion,$sql);
        
        while($mostrar=mysqli_fetch_array($result)){
        
        ?>
        

        <tbody>
          <tr>
            <!-----LIVERPOOL VS REAL MADRID------->
            <th scope="row"><?php echo $mostrar['liga'] ?></th>
            <td><?php echo $mostrar['equipo'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><?php echo $mostrar['resultado'] ?></td>
          </tr>
         <!--  <tr>
            <th scope="row">PREMIER-BUNDESLIGA</th>
             
            <td>MANCHESTER CITY VS DORTMUND</td>
            <td>martes 6 Abril 2021</td>
            <td>0 - 0</td>
          </tr>
          <tr>
            <th scope="row">BUNDESLIGA-LIGUE1</th>
            <td >BAYERN VS PARIS</td>
            <td>miércoles 7 Abril 2021</td>
            <td>0 - 0</td>
          </tr>
          <tr>
            <th scope="row">PRIMEIRA LIGA -PREMIER</th>
            <td >PORTO VS CHELSEA</td>
            <td>miércoles 7 Abril 2021</td>
            <td>0 - 0</td>
          </tr> -->
      <?php
      }
      ?>
        </tbody>
      </table>


      <table class="table table-sm-6" id="tabla3">
        <thead>
          <tr>
            <th scope="col">Maximos Goleadores</th>
            
          </tr>
        </thead>
     

    <?php 
        $sql="SELECT nombre, goles FROM jugador";
        $result = mysqli_query($conexion,$sql);
        
        while($mos=mysqli_fetch_array($result)){
        
        ?>
        
        <tbody>
<tr>
<td>
<p><?php echo $mos['nombre'] ?></p> 
  <p><?php echo $mos['goles'] ?></p>
</td>
</tr>

 <?php
      }
      ?>

</tbody>
      </table>

      <div class="row footer "></div>
      <div class="col-12 col-md-12 navbar  navbar-light  text-light nav justify-content-center" style="background-color: #0b1270;">
        <footer id="footer">
            <p>2021, Juan Peralta.</p> 
            
        </footer>
    </div>
   </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>