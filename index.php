<?php
require_once ('include/database.php');
    include ('include/header.html');
?>

<main>
    <h1>My pokedex</h1>

    <?php
        foreach ($pokemons as $pokemon => $descriptions) {
            if($descriptions[2] == 'Water'){
    ?>

    <section>
        <h2><?= $pokemon ?></h2>
        <img src="<?=  $descriptions[1] ?>" alt="<?= $pokemon ?>">
        <h3>  <?= $descriptions[2] ?> </h3>
        <p><?= $descriptions[0] ?></p>
    </section>

    <?php
            }
        }
    ?>

</main>

<?php
include ('include/footer.html');
?>

