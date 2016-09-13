        <div id="sec">
            <center>
        <?php if (!isset($_GET['type']) || (isset($_POST['pseudo']) && $_POST['pseudo'] == '') || (isset($_POST['pass']) && $_POST['pass'] == '') || ($_GET['type'] == 'inscription' && (isset($_POST['vpass']) && $_POST['vpass'] == '') || (isset($_POST['email']) && $_POST['email'] == '') || (isset($_POST['vpass']) && $_POST['pass'] != $_POST['vpass']))):?>
        <?php if ((isset($_POST['pseudo']) && $_POST['pseudo'] == '') || (isset($_POST['pseudo']) && $_POST['pass'] == '') || (isset($_POST['vpass']) && $_POST['vpass'] == '') || ($_GET['type'] == 'inscription' && isset($_POST['email']) && $_POST['email'] == '')):?>
        <center><p>Vous devez remplir tous les champs marqué d'un *</p></center>
        <?php endif; ?>
        <?php if(isset($_POST['vpass']) && $_POST['pass'] != $_POST['vpass']):?>
       <center><p>Les mots de passes ne correspondent pas.</p></center>
       <?php endif; ?>
            <table>
                <tr>
                    <td>
                        <form method="post" action="index.php?page=connection&type=connection">
                        <h1> Connection: </h1>
                        <p><label>* Pseudo</label>:</br><input name="pseudo" type="text"/></br>
                        <label>* Password</label>:</br><input name="pass" type="password"/></br></p>
                        <input type="submit" value="Connection">
                        </form>
                        <a href="index.php?page=recuperation">Mot de passe oublié</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form method="post" action="index.php?page=connection&type=inscription">
                        <h1> Inscription: </h1>
                        <table>
                            <tr>
                                <td>
                                    <p>Informations personnelles:</br></br>
                                    <label>Nom</label>:</br><input name="nom" type="text"/></br>
                                    <label>Prenom</label>:</br><input name="prenom" type="text"/></br>
                                    <label>Age</label>:</br><input name="age" type="text"/></br>
                                    <label>Adresse</label>:</br><input name="adresse" type="text"/>
                                </td>
                                <td>
                                    </br>Informations communautaires: </br></br>
                                    <label>* Pseudo</label>:</br><input name="pseudo" type="text"/></br>
                                    <label>* Adresse mail</label>:</br><input name="email" type="text"/></br>
                                    <label>* Password</label>:</br><input name="pass" type="password"/></br>
                                    <label>* Verification password</label>:</br><input name="vpass" type="password"/></br></p>
                                </td>
                        </table>
                        <input type="submit" value="Inscription">
                        </form>
                        </tr>
                    </td>
                    </tr>
                        </table>
            </center>
        </div>
        <?php elseif ($_GET['type'] == 'inscription'):
     $file = file_get_contents("bdd.json");
     $bdd = json_decode($file, true);
     $pseudo = $_POST['pseudo'];
     
     if(array_key_exists($pseudo, $bdd)):?>
         <center><p>Ce pseudo est deja utilisé.</p></center>
         
    <?php else:
    $bdd[$pseudo] = $_POST;
     $tab = json_encode($bdd);
     file_put_contents("bdd.json", $tab);?>
     <center><p>Vous etes inscris.</p></center>
     <?php endif; ?>
     
     <?php elseif ($_GET['type'] == 'connection'):
     $pseudo = $_POST['pseudo'];
     $f = 0;
     $file = file_get_contents("bdd.json");
     $bdd = json_decode($file, true);
     if(array_key_exists($pseudo, $bdd)){
         $f = 1;
         if($_POST['pass'] == $bdd[$pseudo]['pass'])
         $f = 2;
     }
     if($f == 2):?>
     <?php session_start();
     $_SESSION['pseudo'] = $_POST['pseudo'];?>
     <meta http-equiv="refresh" content="0; url=index.php" />
    <?php elseif($f == 0):?>
         <center><p>Pseudo incorrect</p></center>
    <?php elseif($f == 1):?>
     <center><p>Mot de passe incorrect</p></center>
    <?php endif;
     endif; ?>