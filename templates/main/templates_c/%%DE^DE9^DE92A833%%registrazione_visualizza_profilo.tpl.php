<?php /* Smarty version 2.6.26, created on 2013-10-22 10:09:10
         compiled from registrazione_visualizza_profilo.tpl */ ?>
<br>
<h1 class="pagetitle">Il tuo profilo</h1>
<div>
	<h1 class="block"><?php echo $this->_tpl_vars['nome_cognome']; ?>
</h1>

</div>
<h1 class="block"></h1>
        <div class="column1-unit">
          <h1><?php echo $this->_tpl_vars['nome_cognome']; ?>
</h1>
          <h3><?php echo $this->_tpl_vars['citta_residenza']; ?>
</h3>                    
          <p><img src=<?php echo $this->_tpl_vars['immagine_profilo_url']; ?>
 alt="Image description" title="Image title" />Punteggio: <?php echo $this->_tpl_vars['media_feedback']; ?>
</p>              
          <p><?php echo $this->_tpl_vars['data_nascita']; ?>
</p>