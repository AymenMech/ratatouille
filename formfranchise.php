<?php include'inc/link.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>


<div class="container">
  <form class="franchise" action="redirec.php" method="post">
<h2 class="text-center" style="margin:40px auto;">Renseignements Personnels</h2>

  <div class="row">
    <div class="class col-md-4">

      <label for="">Pr&#233;nom </label> <input type="text" name="name" value="">

    </div>

    <div class="col-md-4">
      <label for="">Nom </label> <input type="text" name="name" value="">
    </div>

    <div class="col-md-4">
      <label for="">Nationalit&#233; </label> <input type="text" name="name" value="">
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <label for="">Date de naissance </label>
      <select class="" name="Ann&#233;e"><option>Ann&#233;e</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option>
      <option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option></select>

      <select class="" name="Mois"><option>Mois</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
      <option>11</option><option>12</option></select>

      <select class="" name="Jour"><option>Jour</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
      <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option>
      <option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
      </label>

    </div>

    <div class="col-md-3">
      <ul class="list-group list-unstyled"><label for="">Sexe </label>
       <li><label> Masculin<input type="radio" name="sexe" value="homme"></li>
       <li><label>F&#233;minim<input type="radio" name="sexe" value="femme"></label></li>
      </ul>
    </div>

    <div class="col-md-4">
      <ul class="list-group list-unstyled"><label for="">Situation </label>
       <li><label> C&#233;libataire<input type="radio" name="situation" value=""></li>
       <li><label>Mari&#233;(e)<input type="radio" name="situation" value=""></label></li>
       <li><label>Divorc&#233;(e)<input type="radio" name="situation" value=""></label></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <label for="">Enfants &#224; charge </label><select name="Enfant">
        <option value="">0</option><option value="">1</option><option value="">2</option>
        <option value="">3</option><option value="">4 ou plus</option></select>
    </div>

    <div class="col-md-4">
      <ul class="list-group list-unstyled"><label for="">T&#233;l&#233;phone </label>
        <li><label style="margin-right: 16px;"  for="">Fixe  </label><input type="text" name="name" value=""></li>
        <li><label for="">Mobile  </label><input type="text" name="name" value=""></li>
      </ul>
    </div>

    <div class="col-md-4">
      <label for="">Email </label> <input type="email" name="name" value="">
    </div>
  </div>


<h2 class="text-center" style="margin:40px auto;" >Parcours</h2>
<h4>Vos experiences</h4>

  <div class="row">
    <div class="col-md-4">
      <ul><label for="">Durée </label>
       <li><input type="text" value=""></li>
       <li><input type="text" value=""></li>
       <li><input type="text" value=""></li>
       <li><input type="text" value=""></li>
      </ul>
    </div>

    <div class="col-md-4">
      <ul><label for="">Postes </label>
       <li><input type="text" name="name" value=""></li>
       <li><input type="text" name="name" value=""></li>
       <li><input type="text" name="name" value=""></li>
       <li><input type="text" name="name" value=""></li>
      </ul>
    </div>

    <div class="col-md-4">
      <ul><label for="">Entreprises </label>
       <li><input type="text" name="name" value=""></li>
       <li><input type="text" name="name" value=""></li>
       <li><input type="text" name="name" value=""></li>
       <li><input type="text" name="name" value=""></li>
      </ul>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <label for="">Niveau d'&#233;tudes</label>
      <select name="Etudes"><option value="">Lyc&#233;e</option><option value="">Baccalaur&#233;at</option>
      <option value="">Dipl&#244;me Universitaire ou sup&#233;rieur</option></select>
    </div>

    <div class="col-md-6">
      <label for="">Votre Curiculum Vitae </label><input type="file" name="CV">
    </div>

  </div>



<h2 class="text-center" style="margin:40px auto;" >Situations financi&#232;res </h2>


  <div class="row">
    <div class="col-md-4">
      <label for="">Vos revenus actuels</label> <input type="text" name="" value="">
    </div>
    <div class="col-md-4">
      <label for="">Votre apport</label> <input type="text" name="" value="">
    </div>
    <div class="col-md-4">
      <label for="">Vos locaux : superficie en m2 </label> <input type="text" name="" size="4" maxlength="4" value="">
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <label for="">Avez-vous un associ&#232; ?</label>
      <label>Oui<input type="radio" name="assoc" value=""></label><label>Non<input type="radio" name="assoc" value=""></label>
    </div>

    <div class="col-md-4">
      <label for="">Nom </label> <input type="text" name="name" value="">
    </div>

    <div class="col-md-4">
      <label for="">Pr&#232;nom </label> <input type="text" name="name" value="">
    </div>
  </div>


  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <input type="checkbox"><label for="">Je certifie l'authenticit&#233; des informations et j'ai pris connaissance des conditions g&#232;n&#232;rales</label>
    </div>
  </div>

    <input type="submit" class="center-block btn btn-primary btn-lg" name="name" value="Envoyer">
</form>

</div>
</body>
</html>
