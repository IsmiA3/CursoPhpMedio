<nav class="title-area large-3 medium-4 columns" id="actions-sidebars">
            <ul class="side-nav">
            	<li class="heading">Acciones</li>
                <li><?=$this->Html->link('Nuevo Tipo',['controller'=>'Tipos','action'=>'add'])?></li>
				<li><?=$this->Html->link('Productos',['controller'=>'Productos','action'=>'index'])?></li>
                <li><?=$this->Html->link('Nuevo Producto',['controller'=>'Productos','action'=>'add'])?></li>
            </ul>
</nav>

<h3>Tipos</h3>
<table cellpadding="0" cellspacing="0">

	<thead>
		<tr>
			<th scope="col"><?=$this->Paginator->sort("Tipo.id","Id")?></th>
			<th scope="col">Nombre</th>
		</tr>
	</thead>
	
	<tbody>
	
  	<?php foreach ($tipos as $tipo): ?>
		<tr>
			<td><?=$tipo['id'];?></td>
			<td><?=$tipo['nombre'];?></td>
		</tr>	
	<?php endforeach;?>
	</tbody>

</table>

<div class="paginator">
	<ul class="pagination">
		<li><?=$this->Paginator->first('<< Primero');?></li>
	    <li><?=$this->Paginator->numbers();?></li>
	</ul>
</div>

<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
