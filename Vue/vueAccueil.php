<?php $titre = 'Gestionnaire des tickets'; ?>
<?php foreach ($billets as $billet): ?>
    <article>
        <header>
            <?php if ($billet['TIC_ETAT'] == 1 || $billet['TIC_ETAT'] == 2) { ?>
                <h1 class="titreBillet"><a href="index.php?action=billet&id=<?= $billet['id_billet'] ?>"><?= $billet['TIC_TITRE'] ?></a> | <?php if ($billet['TIC_ETAT'] == 1) { ?>
                    <span class="btn btn-success"><?= $billet['nom_etat'] ?></span>
                <?php } elseif ($billet['TIC_ETAT'] == 2) { ?>
                   <span class="btn btn-warning"><?= $billet['nom_etat'] ?></span>
                   <?php } ?></h1>
               <?php } else { ?>
                <h1 class="titreBillet"><?= $billet['TIC_TITRE'] ?> | <span class="btn btn-danger"><?= $billet['nom_etat'] ?></span>
                    <?php } ?></h1>
                    <time><?= $billet['TIC_DATE'] ?></time>
                </header>
                <p><?= $billet['TIC_CONTENU'] ?></p>
            </article>
            <hr />
        <?php endforeach; ?>
        <h2>Ajouter un nouveau ticket</h2>
        <form method="post" action="index.php?action=ajouter">
            <input id="titre" name="titre" type="text" placeholder="Titre de la demande" 
            required /><br />
            <textarea id="txtCommentaire" name="demande" rows="4" 
            placeholder="Votre demande" required></textarea><br />
            <input type="submit" value="Commenter" name="valider_ticket"/>
        </form>