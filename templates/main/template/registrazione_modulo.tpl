<!-- REGISTRAZIONE -->
		<br>
        <h1 class="pagetitle">Registrazione nuovo utente</h1>

        <!-- Content unit - One column -->
        <div>
		<h1 class="block">Dati personali</h1>
        <div class="column1-unit">
          <div class="contactform">
            <form method="post" action="index.php">
                <p><input type="hidden" name="controller" value="registrazione" /></p>
                <p><input type="hidden" name="task" value="salva" /></p>
                <fieldset>
                <p><label for="nome" class="left">Nome:</label>
                   <input type="text" name="nome" id="nome" class="field" value="" tabindex="1"  /></p>
                <p><label for="cognome" class="left">Cognome:</label>
                   <input type="text" name="cognome" id="cognome" class="field" value="" tabindex="2" /></p>
                <p><label for="data_nascita" class="left">Data di nascita:</label>
                   <input type="text" name="data_nascita" id="data_nascita" class="field" value="" tabindex="3" /></p>
                <p><label for="citta_nascita" class="left">Città di nascita:</label>
                   <input type="text" name="citta_nascita" id="citta_nascita" class="field" value="" tabindex="4" /></p>
                <p><label for="citta_residenza" class="left">Città di residenza:</label>
                   <input type="text" name="citta_residenza" id="citta_residenza" class="field" value="" tabindex="5" /></p>
                <p><label for="email" class="left">Email:</label>
                   <input type="text" name="email" id="email" class="field" value="" tabindex="7" /></p>
                <p><label for="cod_fiscale" class="left">Codice fiscale:</label>
                   <input type="text" name="cod_fiscale" id="cod_fiscale" class="field" value="" tabindex="8" /></p>
		</fieldset>  
                </div>
		  <h1 class="block">Dati per il login</h1>
		  <div class="contactform">
              <fieldset>
				<p><label for="username" class="left">Username:</label>
                   <input type="text" name="username" id="username" class="field" value="" tabindex="9"  /></p>
				<p><label for="password" class="left">Password:</label>
                   <input type="password" name="password" id="password" class="field" value="" tabindex="10"  /></p>
				<p><label for="password_1" class="left">Ripeti password:</label>
                   <input type="password" name="password_1" id="password_1" class="field" value="" tabindex="11"  /></p>   
                <p><input type="submit" name="submit" id="submit" class="button" value="Registrati" tabindex="12" /></p>
              </fieldset>
            </form>
          </div>              
        </div>
</div>