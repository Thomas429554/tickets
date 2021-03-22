<?php $titre = "Ticket - " . $billet['titre']; ?>
<form method="post" action="index.php?action=modifieretat">
Modifier l'état du ticket : 
<select name="etats" class="form-control" style="width: 20%;">
	<?php foreach($etats as $etat): ?>
		<option value="<?= $etat['id'] ?>"><?= $etat['nom_etat'] ?></option>
	<?php endforeach; ?>
</select>
<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
<input type="submit" class="btn btn-info" name="modifier_etat">
</form>
<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?> - Ticket <?= $billet['nom_etat'] ?></h1>
        <time><?= $billet['date_ticket'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr>
<header>
    <h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
</header>
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" name="ajouter_commenter" value="Commenter" />
</form>
<hr>
<h2>Commentaires du ticket :</h2>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['auteur'] ?> dit :</p>
    <p><?= $commentaire['contenu'] ?></p>
    <hr>
<?php endforeach; ?>