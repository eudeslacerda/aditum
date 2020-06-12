<?=$barraLista."\n"?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" class="col-1">#</th>
      <th scope="col"><?= Kohana::message('usuario','usuario.singular') ?></th>
      <th scope="col" class="col-2">&nbsp;</th>     
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach ($usuarios as $usuario){
  ?>
    <tr>
      <th scope="row"><?=$usuario->id?></th>
      <td><?=$usuario->nomeusuario?></td>
      <td class="text-right">
      	<?=$acao."\n"?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>