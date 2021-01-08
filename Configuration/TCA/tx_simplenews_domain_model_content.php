<?php
$ll = 'LLL:EXT:simple_news/Resources/Private/Language/locallang_db.xlf:';
return [
    'ctrl' => [
        'title' => $ll . 'tx_simplenews_domain_model_content',
        'label' => 'title',
        'iconfile' => 'EXT:simple_news/Resources/Public/Icons/newspaper.svg',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'default_sortby' => 'ORDER BY uid DESC',
        //'sortby' => 'sort',
    ],
    'columns' => [
        'title' => [
            'label' => $ll . 'tx_simplenews_domain_model_content.item_title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required, trim',
            ],
        ], 
        'teaser' => [
            'label' => $ll . 'tx_simplenews_domain_model_content.item_teaser',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5,
            ],
        ],
        'bodytext' => [
            'label' => $ll . 'tx_simplenews_domain_model_content.item_bodytext',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
                'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
                'enableRichtext' => true,
            ],
        ],
        'display' => [
            'label' => 'Select display type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Aktuelles','actual'],
                    ['Archiv', 'archive'],
                    ['Entwurf', 'draft'],
                    ['Presse', 'press'],
                ],
            ],
        ],
        'status' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.item_status',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['aktiv', ''],
                ],
            ],
        ],
        'sort' => [
            'label' => $ll . 'tx_simplenews_domain_model_content.item_sort',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'title, teaser, bodytext, --palette--;;display_sort, --palette--;;paletteCore,
                 --div--;' . $ll . 'notes, note'],
    ],
    'palettes' => [
        'display_sort' => [
            'showitem' => 'display, status, sort',
        ],
    ],
];