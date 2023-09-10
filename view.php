<!-- Header -->
<?php 
require_once('templates/header.php');

$contact = $DATABASE->get($_GET['id']);

?>
<!-- Main -->
<main>
<div class="container p-5">
    <h1><?php echo $contact['name']?></h1>
    <p><strong>Descrição: </strong><?php echo $contact['observation'] ?></p>
</div>
</main>
<!-- Footer -->
<?php require_once('templates/footer.php') ?>
