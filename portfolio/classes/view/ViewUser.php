<?php


class ViewUser
{
    public static function ajoutUser()
    {
      
?>
<div class="container">
            <form name="ajout_user" enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="form-group">
                    <input type="text" name="nom" id="nom" class="form-control" aria-describedby="nom" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" id="prenom" class="form-control" aria-describedby="prenom" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="mail" id="mail" class="form-control" aria-describedby="mail" placeholder="Adresse mail" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="tel" id="tel" class="form-control" aria-describedby="tel" placeholder="Tel" required>
                </div>
                <div class="form-group">
                    <input type="text" name="adresse" id="adresse" class="form-control" aria-describedby="adresse" placeholder="Adresse" required>
                </div>
                <div class="form-group">
                    <input type="text" name="photo" id="photo" class="form-control-file" aria-describedby="photo" placeholder="Photo" >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" aria-describedby="description"></textarea>
                </div>

                <button type="submit" name="ajout" class="btn btn-primary">Ajouter</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
            </form>
        </div>

<?php

    }
}


?>