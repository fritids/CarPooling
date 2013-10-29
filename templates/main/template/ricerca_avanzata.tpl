<!-- RICERCA VIAGGI -->
		<br>
        <h1 class="pagetitle">Registrazione nuovo utente</h1>

        <!-- Content unit - One column -->
        <div>
        <h1 class="block">Dati personali</h1>
        <div class="column1-unit">
          <div class="contactform">
            <form method="post" action="index.php?controller=ricerca&task=invio_ricerca">
              <fieldset>
                <p><label for="citta_partenza" class="left">Da: </label>
                   <input type="text" name="citta_partenza" id="citta_partenza" class="field" value="" tabindex="1"  /></p>
                <p><label for="citta_arrivo" class="left">a:</label>
                   <input type="text" name="citta_arrivo" id="citta_arrivo" class="field" value="" tabindex="1"  /></p>
                <p><label for="data_partenza" class="left">data partenza:</label>
                   <input type="text" name="data_partenza" id="data_partenza" class="field" value="" tabindex="1"  /></p>
                
                <p><input type="submit" name="submit" id="submit" class="button" value="Cerca" tabindex="6" /></p>
              
              
              </fieldset>
            </form>
         </div>
        </div>              
        </div>