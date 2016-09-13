<div id="sec">
<?php if($_GET['type'] == 'envoyer'):
    $cmd = 'php ressources/smail.php "'.$_POST['nom'].'" "'.$_POST['email'].'" "'.$_POST['sujet'].'" "'.$_POST['message'].'" > /dev/null 2>/dev/null &';
shell_exec($cmd);
?>
<center><p>Message envoyé</p></center>
<?php else:?>
    <form METHOD="post" ACTION="index.php?page=support&type=envoyer">
    <center><p>Votre email</center>
    <center><input name="email" id="email" type="email"/></br></br></center>
     <center><p>Votre nom</center>
          <center><input name="nom" id="nom" type="text"/></br></br></center>
          <center><p>Sujet</center>
          <center><input name="sujet" id="sujet" type="text"/></br></br></center>
                    <center><p>Votre message</br></center>
          <center><textarea name="message" id="message" cols="50" rows="10" name="body" wrap="hard"></textarea></center>
          <center><input type="submit" value="Envoyer"></center>
      </form>
        </td>
        <td>
    <?php endif; ?>
    </div>