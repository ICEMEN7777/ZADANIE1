<h1>Страница учета дней рождения организации</h1>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'surname:ntext',
        'name:ntext',
        'patronymic:ntext',
        'birthday',
// 'created_at',
// 'updated_at',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>