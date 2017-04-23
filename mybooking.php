
<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/home.css">
<?php
session_start();
ini_set('display_errors', true);?>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
  <?php include "assets/inc/navbar.php"; ?>
  <div class="panel panel-perso">
      <div class="panel-heading">
          <h3>Mes réservation</h3>
<?php  if (isset($_SESSION['id'])){
            ?><a href="./add-booking.php" class="btn btn-primary">Éditer une réservation</a><?php
          }
          else {

          } ?>

      </div>
      <table class="table table-striped table-hover">
          <thead>
              <tr>

                  <th>Salle</th>
                  <th>Nom</th>
                  <th>Section</th>
                  <th>Date</th>
                  <th>Debut</th>
                  <th>Fin</th>
                  <th></th>

              </tr>
          </thead>
          <tbody>
                <?php
                include "assets/inc/connect.php";

                $bdd = connectToSQL();
                $res = $bdd->query("SELECT * FROM booking WHERE Nom = 'ncl' ORDER BY Nom ASC");
                while ($donnees = $res->fetch())
                {
                    ?>
                    <tr>

                        <td><?php echo $donnees['Salle']; ?></td>
                        <td><?php echo $donnees['Nom']; ?></td>
                        <td><?php echo $donnees['Section']; ?></td>
                        <td class="status"><?php echo $donnees['Date']; ?></td>
                        <td><?php echo $donnees['Debut']; ?></td>
                        <td><?php echo $donnees['Fin']; ?></td>
                        <td></td>

                    </tr>
                  <?php
                }

                $res->closeCursor();

                ?>



                </tbody>
            </table>
          </div>



</body>
</html>