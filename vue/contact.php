<?php require_once __DIR__ . "/../inc/haut.inc.php"; ?>
    <?php if (isset($_GET['error'])) { ?>
        <p style="color: red;" class="text-center">Merci de remplir tous les champs !</p>
    <?php }
    if (isset($_GET['success'])) { ?>
        <p style="color: green;" class="text-center">Votre demande a bien été ajouté à la base de données</p>
    <?php } ?>

    <form action="../model/traitement.php" method="POST" class="w-50 m-auto mt-5 py-5">
        <div class="input-group">
            <span class="input-group-text">Nom et Prénom</span>
            <input type="text" aria-label="First name" class="form-control" name="nom">
            <input type="text" aria-label="Last name" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="objet" class="form-label">Objet</label>
            <select name="objet" id="objet">
                <option value="accessoire">Accessoire</option>
                <option value="jouet">Jouet</option>
                <option value="nourriture">Nourriture</option>
                <option value="serviceClient">Service Client</option>
                </select>
        </div>
        <div class="mb-3">
            <label for="question" class="form-label">Votre demande</label>
            <textarea class="form-control" name="question" id="question" rows="3"
                style="resize: none; height:25vh;"></textarea>
        </div>
        <input type="submit" value="Envoyer" name="form_submit" class="form-control bg-primary text-white w-50 m-auto">
    </form>

<?php require_once __DIR__ . "/../inc/bas.inc.php" ?>