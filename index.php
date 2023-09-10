<!-- Header -->
<?php require_once('templates/header.php') ?>
<!-- Main -->
<main>
    <div class="container d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th class="bg-primary" scope="col">#</th>
                    <th class="bg-primary" scope="col">Nome</th>
                    <th class="bg-primary" scope="col">Telefone</th>
                    <th class="bg-primary" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($DATABASE->get_all() as $contact): ?>
                    <tr>
                        <th scope="col"><?php echo $contact['id']?></th>
                        <td scope="col"><?php echo $contact['name']?></td>
                        <td scope="col"><?php echo $contact['phone']?></td>
                        <td scope="col" class="actions">
                            <a href="<?php echo url_for('view.php', ['id'=>$contact['id']])?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href=""><i class="far fa-edit edit-icon"></i></a>
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>
<!-- Footer -->
<?php require_once('templates/footer.php') ?>