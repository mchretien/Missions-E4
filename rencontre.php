<!DOCTYPE html>
<html>
<head>
	<title>Rencontre</title>
</head>
<body>
<div class="container">

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">PPE</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="./index.php">Home</a></li>
              <li class="active"><a href="./rencontre.php">Rencontre</a></li>
              <li><a href="./livredor.php">Livre D'or</a></li>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <center>
          <IMG src="./rsport.jpeg">
        </center>
        <br/>
        <center>
          Vous cherchez un partenaire pour pratiquer un sport ?</br>
          Inscrivez vous !</br>
          Deja inscrit ?
        <input   type="text" name="login" placeholder="Login" />
         <input   type="password" name="pass" placeholder="Mot de passe" />
         <button  type="submit" >Connexion</button>
        </center>

        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir l'adresse">
    <small id="emailHelp" class="form-text text-muted">Merci de renseigner une adresse email valide.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Saisir le mot de passe">
  </div>
  <div class="form-group">
    <label for="exampleInputName1">Nom</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Saisir votre nom">
  </div>
  <div class="form-group">
    <label for="exampleInputSurname1">Prénom</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Saisir votre prénom">
  </div>
  <div class="form-group">
    <label for="exampleInputSexe1">Sexe</label>
    <select class="form-control" id="exampleInputSexe1">
      <option>Homme</option>
      <option>Femme</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Jour">Quelle est votre date de naissance ? :</label><br/>
                    <select name="Jour" id="Jour" />
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <select name="MOIS" id="MOIS" />
                        <option value="Janvier">Janvier</option>
                        <option value="Février">Février</option>
                        <option value="Mars">Mars</option>
                        <option value="Avril">Avril</option>
                        <option value="Mai">Mai</option>
                        <option value="Juin">Juin</option>
                        <option value="Aout">Aout</option>
                        <option value="Septembre">Septembre</option>
                        <option value="Octobre">Octobre</option>
                        <option value="Novembre">Novembre</option>
                        <option value="Decembre">Decembre</option>
                    </select>
                    <select name="ANNEE" id="ANNEE" />
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                    </select>
  </div>
</br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </html>