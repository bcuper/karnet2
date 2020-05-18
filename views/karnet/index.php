<?php
/* @var $this yii\web\View */
?>
<h1>Karnet</h1>
<?php if(!Yii::$app->user->isGuest): ?>
    <p><?= \yii\helpers\Html::a('Dodaj wejście', ['karnet/wejscie'], ['class' => 'btn btn-primary']) ?></p>
    <p><?= \yii\helpers\Html::a('Dodaj przekroczenie czasu', ['karnet/przekroczenie'], ['class' => 'btn btn-primary']) ?></p>
    <p><?= \yii\helpers\Html::a('Dodaj nowe doładowanie', ['karnet/doladowanie'], ['class' => 'btn btn-primary']) ?></p>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>Lp</th>
        <th>Data wejścia</th>
        <th>Opis</th>
        <th>Cena</th>
        <th>Kasjer</th>
    </tr>
    <?php foreach($operacje as $operacja): ?>
        <tr class="<?= ($operacja->rodz === '-' ? 'danger' : 'success') ?>">
            <td><?= $operacja->id ?></td>
            <td><?= $operacja->data_dodania ?></td>
            <td><?= $operacja->opis ?></td>
            <td><?= $operacja->cena ?> zł</td>
            <td><?= $operacja->kasjer->kasjer; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Saldo: <?= $saldo; ?> zł</h2>

<p>Karnet kończy się: <?= $koniecKarnetu['data']; ?></p>
<p>Do końca karnetu zostało: <?= $koniecKarnetu['diff']->m ?> miesiące i  <?= $koniecKarnetu['diff']->d ?> dni (razem: <?= $koniecKarnetu['diff']->days ?> dni)</p>

<h3>Z dostepnym saldem można wejść na nastepujące obiekty podaną ilosć razy:</h3>

<table class="table table-bordered">
    <tr>
        <th>Obiekt - cena</th>
        <th>Liczba wejść</th>
    </tr>

    <?php foreach($ileWejsc as $wejscie): ?>
    <tr>
        <th><?= $wejscie['nazwa'] ?> - <?= $wejscie['cena'] ?> zł</th>
        <td><?= number_format($wejscie['ile'], '0') ?></td>
    </tr>
    <?php endforeach; ?>
</table>