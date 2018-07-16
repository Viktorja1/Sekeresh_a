<?php

$data = [
    [
        'is_active'         => '1',
        'name'              => '1+1=3',
        'description'       => 'Три одиниці товару за ціною двох',
        'short_description' => 'Лови вигідну пропрозицію',
        'image'             => 'oneForThree.png',
        'start_datetime'   => '2018-07-14 15:25:52',
        'end_datetime'     => '2018-10-14 15:25:52',
        'status'            => '2'
    ],
    [
        'is_active'         => '1',
        'name'              => '1+1=5',
        'description'       => 'Три одиниці товару за ціною 5-х',
        'short_description' => 'Лови вигідну пропрозицію2',
        'image'             => 'oneFor.png',
        'start_datetime'   => '2019-07-14 15:25:52',
        'end_datetime'     => '2019-10-14 15:25:52',
        'status'            => '1'
    ],
    [
        'is_active'         => '1',
        'name'              => '1+1=11',
        'description'       => 'Три закрита',
        'short_description' => 'Лови вигідну пропрозицію',
        'image'             => 'oneF.png',
        'start_datetime'   => '2018-02-14 15:25:52',
        'end_datetime'     => '2018-03-14 15:25:52',
        'status'           => '3'
    ]
];


foreach ($data as $item) {
    $model = Mage::getModel('sekeresh_action/action');
    $model->setData($item);
    $model->save();
}
