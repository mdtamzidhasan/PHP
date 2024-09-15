<?php
$foods=[
    'vegetables'=>explode(', ','brinjal, brocolli, carrot, capsicum'),
    'fruits'=>explode(', ','orange, banana, apple'),
    'drinks'=>explode(', ','water, milk')

];
print_r($foods);
array_push($foods['drinks'], 'orange juice');
print_r($foods);
echo $foods['vegetables'][3]."\n";

$sample=[
    'test'=>[
        'test-again'=>[
            'a',
            'b',
            'c'
        ]
    ]
];
echo $sample['test']['test-again'][2]."\n";


$sample2=[
    [1,2,3,4],
    [11,33,22,44],
    [111,222,333,444,[5,6,7,8]]
];
print_r($sample2);
echo $sample2[2][4][2];
