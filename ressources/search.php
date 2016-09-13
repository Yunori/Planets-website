<div id="sec">
<?php
$bdd = array
(
    'eris' => array('nom' => 'eris', 'num' => 6),
    'pluton' => array('nom' => 'pluton', 'num' => 7),
    'verturi' => array('nom' => 'verturi', 'num' => 9),
    'terraris' => array('nom' => 'terraris', 'num' => 10),
        'noir' => array('nom' => 'noir', 'num' => 1),
    'vegeta' => array('nom' => 'vegeta', 'num' => 8),
    'saturn' => array('nom' => 'saturn', 'num' => 3),
    'mars' => array('nom' => 'mars', 'num' => 0),
        'jupiter' => array('nom' => 'jupiter', 'num' => 2),
    'uranus' => array('nom' => 'uranus', 'num' => 4),
    'neptune' => array('nom' => 'neptune', 'num' => 5),
);
$d = 0;
$final = array();
$search = explode(" ", $_POST['search']);
for($i = 0; isset($search[$i]); $i++){
if(array_key_exists($search[$i], $bdd))
$final[$search[$i]] = $bdd[$search[$i]];
}
$d = count($final);
if($d > 0){
echo '<p>'.$d.' résultats trouvés.</p>';
foreach($final as $cle => $element){
echo "<p>planete : ".$final[$cle]['nom']."</p>";
echo "<p>numero : ".$final[$cle]['num']."</p>";
echo '<a href="index.php?page='.$final[$cle]['num'].'">voir</a>';
echo "<br /><br /><br />";
}
}
elseif($d == 0)
echo '<p>Aucun produit trouvé.</p>';
?>
</div>