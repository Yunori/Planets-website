<div id="sec">
<h2> Récupération: </h2>
             <p>Votre mdp sera envoyé sur votre @mail.</p>
        <form method="post" action="index.php?page=recuperation&type=recup">
          <p><label>* Pseudo</label> : <br /><input name="pseudo" type="text"/><br />
          <label>* Email</label> : <br /><input name="email" type="email"/><br /><br /><br />
          <input type="submit" value="Recup">
      </form>
      <?php if($_GET['type'] == 'recup'):
          if((isset($_POST['pseudo']) && $_POST['pseudo'] == '') || (isset($_POST['email']) && $_POST['email'] == '')):?>
              <p>Veuillez remplir tous les champs</p>
    <?php else:
            $file = file_get_contents("bdd.json");
            $bdd = json_decode($file, true);
            $pseudo = $_POST['pseudo'];
            if(array_key_exists($_POST['pseudo'], $bdd) && $_POST['email'] == $bdd[$pseudo]['email']):
                $cmd = 'php ressources/rmail.php "P_DISCOUNT" "'.$_POST['email'].'" "Récupération de mot de passe" "Votre mot de passe est ""'.$bdd[$pseudo]['pass'].'" > /dev/null 2>/dev/null &';
                shell_exec($cmd);?>
                <p>Un email vous a été envoyé.</p>
                <?php
            else:?>
                <p>Les infos ne correspondent pas</p>
            <?php
        endif;
        endif;
        endif;?>
</div>