<!-- The button to open modal -->
<label for="<?= $enfant["id"] ?>" class="btn btn-error modal-button">Supprimer</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="<?= $enfant["id"] ?>" class="modal-toggle" />
<div class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg text-center">Voulez-vous vraiment supprimer ce jeu ?</h3>
        <div class="flex justify-center gap-3">
            <div class="modal-action">
            <label for="<?= $enfant["id"] ?>" class="btn">Non</label>
        </div>
        <div class="modal-action">
            <label for="<?= $enfant["id"] ?>" class="btn btn-primary">
            <a href="delate.php?id=<?= $enfant["id"] ?>&nom=<?= $enfant["nom"] ?>" class="">Oui</a></label>
        </div>
        </div>
    </div>
</div>