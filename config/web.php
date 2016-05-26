<?php
return [
    'id'            =>  'crmapp',
    'basePath'      =>  realpath(__DIR__.'/../'),
    'components'    =>  [
            'db'    =>  require (__DIR__.'/db.php'),
            'request'   =>  [
                    'cookieValidationKey'   =>  'D4DFsdfkk((34343234klL:JjjwerNNNjjdsaftkjdsf',
            ],
            'urlManager'    =>[
                    'enablePrettyUrl'   => true,
                    'showScriptName'    => false,
            ],
    ],
];