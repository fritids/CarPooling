<?php /* Smarty version 2.6.26, created on 2013-11-13 11:32:48
         compiled from ricerca_inserisci.tpl */ ?>
<!-- INSERIMENTO VIAGGIO -->
<script src="js/index.js"></script>
		<br>
        <h1 class="pagetitle">Offri un viaggio</h1>

        <!-- Content unit - One column -->
        <div>
		 <h1 class="block">Dati del viaggio</h1>
        <div class="column1-unit">
          <div class="contactform">
            <form>
                <fieldset>
                <p><label for="citta_partenza" class="left">Citta di partenza:</label>
                   <input type="text" name="citta_partenza" id="citta_partenza" class="field" value="" tabindex="1"  /></p>
                <p><label for="citta_arrivo" class="left">Citta di arrivo:</label>
                   <input type="text" name="citta_arrivo" id="citta_arrivo" class="field" value="" tabindex="2" /></p>
                <p><label for="data_partenza" class="left">Data di partenza:</label>
                   <input type="text" name="data_partenza" id="data_partenza" class="field" value="" tabindex="3" /></p>
                <p><label for="targa" class="left">Scegli un veicolo:</label>
                   <input type="text" name="targa" id="targa" class="field" value="" tabindex="4" /></p>
				<p><label for"aggiungi_veicolo" class="left">Oppure:</label>
                   <input type="button" name="aggiungi_veicolo" id="submit_veicolo_da_inserisci" class="button" value="Aggiungi veicolo" tabindex="5" /></p><br><br>
                 <p><label for="note" class="left">Note viaggio:</label>
                   <textarea name="note" id="note" cols="45" rows="7" tabindex="6"></textarea></p>
                <p><input type="button" id="submit_offri" class="button" value="Inserisci viaggio" tabindex="7" /></p>
		</fieldset> 
            </form>   
           </div>              
        </div>
</div>