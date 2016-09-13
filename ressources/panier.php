    <div id="sec">
    <?php session_start();
    if($_GET['type'] == 'reset'){
    unset($_SESSION['panier']);
    }
    elseif($_GET['type'] == 'resetp')
    unset($_SESSION['panier'][$_POST['produit']]);
    $keys = array_keys($_SESSION['panier']);
    for($i=0; isset($keys[$i]); $i++){
    echo $_SESSION['panier'][$keys[$i]]['produit'];?>
    <form method="post" action="panier.php?page=resetp">
    <input type="hidden" name="produit" value="<?php echo $keys[$i] ?>">
    <input type="submit" value="delete">
    </form>
        <br />
        <br />
    <?php } ?>
    <form method="post" action="index.php?page=panier&type=reset">
    <input type="submit" value="reset panier">
    </form>
    </div>