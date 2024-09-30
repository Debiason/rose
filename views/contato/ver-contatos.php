<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Contato;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Contato $model */

$contatos = Contato::find()->Where(['id_estado' => $estado->id])->createcommand()->queryAll();

?>
<div class="contato-view">

    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">cidade</th>
        <th scope="col">telefone</th>
        <th scope="col">email</th>
        <th scope="col">endereço</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php
    foreach ($contatos as $contato) {?>
      <?php $url = Url::to(['contato/update', 'id' => $contato['id']]); ?>
    <tr>
      <th scope="row"><?= $contato['id']?></th>
      <td><?= $contato['cidade']?></td>
      <td><?= $contato['telefone']?></td>
      <td><?= $contato['email']?></td>
      <td><?= $contato['endereco']?></td>
      <td><?php echo Html::a('Atualizar', $url, ['title' => 'Atualizar','class' => 'btn btn-primary']);?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
