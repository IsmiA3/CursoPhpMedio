<nav class="title-area large-3 medium-4 columns" id="actions-sidebars">
            <ul class="side-nav">
            	<li class="heading">Acciones</li>
                <li><?=$this->Html->link('Nuevo Tipo',['controller'=>'Tipos','action'=>'add'])?></li>
				<li><?=$this->Html->link('Productos',['controller'=>'Productos','action'=>'index'])?></li>
                <li><?=$this->Html->link('Nuevo Producto',['controller'=>'Productos','action'=>'add'])?></li>
            </ul>
</nav>

<?=$this->Form->create($tipo)?>
<fieldset>
<legend>Nuevo Tipo</legend>
<?=$this->Form->control('nombre')?>
</fieldset>

<?=$this->Form->button('Crear')?>
<?=$this->Form->end()?>