<?php /* Smarty version 2.6.26, created on 2013-11-13 09:47:29
         compiled from ricerca_elenco.tpl */ ?>
		<br>
        <h1 class="pagetitle">Elenco Viaggi</h1>

        <!-- Content unit - One column -->
		 <h1 class="block">Dati viaggi</h1>
         <script src="js/index.js"></script>         
        <div class="column1-unit">
          <div class="contactform" >
            
            <?php if ($this->_tpl_vars['viaggi']): ?>
<h1> Lista viaggi cercati </h1>
<hr>
<?php unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($_loop=$this->_tpl_vars['viaggi']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
    $this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
    if ($this->_sections['nr']['total'] == 0)
        $this->_sections['nr']['show'] = false;
} else
    $this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

            for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
                 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
                 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']      = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']       = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
    <div>     
        <a class="riepilogo_viaggio" value="<?php echo $this->_tpl_vars['viaggi'][$this->_sections['nr']['index']]['num_viaggio']; ?>
"><h5><?php echo $this->_tpl_vars['viaggi'][$this->_sections['nr']['index']]['citta_partenza']; ?>
&nbsp<?php echo $this->_tpl_vars['viaggi'][$this->_sections['nr']['index']]['citta_arrivo']; ?>
&nbsp<?php echo $this->_tpl_vars['viaggi'][$this->_sections['nr']['index']]['data_partenza']; ?>
</h5></a>
    </div>  
<hr>
<?php endfor; endif; ?>
<?php else: ?>
<h3> Non ci sono viaggi</h3>    
<?php endif; ?>
           </div>              
        </div>