<?php /* Smarty version 2.6.26, created on 2013-10-24 17:36:42
         compiled from ricerca_inserisci.tpl */ ?>
<!-- INSERIMENTO VIAGGIO -->
		<br>
        <h1 class="pagetitle">Inserimento nuovo viaggio</h1>

        <!-- Content unit - One column -->
        <div>
		 <h1 class="block">Dati viaggio</h1>
        <div class="column1-unit">
          <div class="contactform">
            <form method="post" action="index.php">
                <p><input type="hidden" name="controller" value="ricerca" /></p>
                <p><input type="hidden" name="task" value="inserisci" /></p>
                <fieldset>
                <p><label for="citta_partenza" class="left">Citta di Partenza:</label>
                   <input type="text" name="citta_partenza" id="citta_partenza" class="field" value="" tabindex="1"  /></p>
                <p><label for="citta_arrivo" class="left">Citta di Arrivo:</label>
                   <input type="text" name="citta_arrivo" id="citta_arrivo" class="field" value="" tabindex="2" /></p>
                <p><label for="data_partenza" class="left">Data di partenza:</label>
                   <input type="text" name="data_partenza" id="data_partenza" class="field" value="" tabindex="3" /></p>
                <p><label for="note" class="left">Note:</label>
                   <input type="text" name="note" id="note" class="field" value="" tabindex="4" /></p>
                <p><input type="submit" name="submit" id="submit" class="button" value="Conferma" tabindex="5" /></p>
		</fieldset>  
           </div>              
        </div>
</div>