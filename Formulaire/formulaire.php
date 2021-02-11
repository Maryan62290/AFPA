<DOCTYPE >
    <html>
        <head>
          <link rel='stylesheet' href='form.css' type='text/css'  />
          <link rel='stylesheet' href='svg-with-js.css' type='text/css'  />
        </head>
        <body>
          <h1>Formulaires</h1>
            <form action="action.php" method="post" id="frm">

              <fieldset>
                <legend>Informations personnelles</legend><br/>
                  <div>
                      <label for="nom">Votre nom : </label>
                      <input type="text" name="nom" id="nom" /><br/>
                  </div>
                  <div>
                    <label for="age">Votre Age : </label>
                    <input type="text" name="age" id="age" /><br/>
                  </div>
                  <div>
                    <label for="dat">Votre date de naissance : </label>
                    <input type="date" name="dat" id="dat" /><br/>
                  </div>
                  <div>
                    <label for="mail">Votre Adresse Email : </label>
                    <input type="email" name="mail" id="mail" /><br/>
                  </div>
                  <div>
                      <label for="tel">Votre numéro de téléphone : </label>
                      <input type="tel" name="tel" id="tel" /><br/>
                  </div>
                  <div>
                    <label for="country">Votre nationalité : </label>
                      <select name="country" id="country">
                        <option>-- Choississez un pays --</option>
                        <option value="BE">Belgique</option>
                        <option value="CA">Canada</option>
                        <option value"FR">France</option>
                        <option value="MA">Maroc</option>
                        <option value="MA">Sénégal</option>
                      </select>
                  </div>
              </fieldset>


              <fieldset>
                <legend>Options</legend><br/>
                  <div class="radio">
                      <label><input type="radio" name="sexe" id="sexe" value="wowem" checked /><span>Femme</span></label>

                      <label><input type="radio" name="sexe" id="sexe" value="men" /><span>Homme</span></label>

                      <label><input type="radio" name="sexe" id="sexe" value="kid" /><span>Enfant</span></label>

                      <label><input type="radio" name="sexe" id="sexe" value="et" /><span>ExtraTerrestre</span></label>

                  </div>
              </fieldset>


              <fieldset>
                <legend>Identifiant</legend><br/>
                <div>
                  <label for="user">Choisir un pseudo :</label>
                    <input type="text" name="user" id="user" />
                </div>
                <div>
                  <label for="mdp1" >Choisir un mot de passe : </label>
                  <input type="password" name="mdp1" id="mdp1" />
                </div>
                <div>
                  <label for="mdp2" >Confirmer votre mot de passe : </label>
                  <input type="password" name="mdp2" id="mdp2" />
                </div>
              </fieldset>


              <fieldset>
                <legend>Vos sport préférés</legend><br/>
                  <div>
                    <label ><input type="checkbox"  value="foot" name="sport" />Football</label>
                    <label ><input type="checkbox"  value="tennis" name="sport" />Tennis</label>
                    <label><input type="checkbox" value="nata" name="sport"/>Natation</label>
                    <label><input type="checkbox" value="boxe" name="sport"/>Boxe</label>
                  </div>
              </fieldset>

              <fieldset>
                <legend>Message</legend>
                  <label for="subject">Sujet de votre message</label><br/>
                    <input type="text" name="subject" id="subject" list="subject-list" placeholder="Sujet" ><br/><br/>
                    <datalist id="subject-list">
                      <option value="Demande de support">
                      <option value="service aprés vente">
                    </datalist>
                  <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Votre message"></textarea>
              </fieldset>

              <fieldset>
                <legend>Autres</legend>
                <label for="fichier">Upload image ou vidéo</label>
                <input type="file" name="fichier" id="fichier" /><br/>
                <label for="q">Recherche</label>
                <input type="search" name="q" id="q" />


              </fieldset>
              <fieldset>
                <button type="reset" name="reset" id="reset">Effacer</button>
                <button type="submit" name="Envoyer" id="Envoyer" >Envoyer</button>
              </fieldset>
            </form>

        </body>
</html>
