<?php

$langGeneralPath = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:';

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'enablecolumns' => array(
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:ke_search/Resources/Public/Icons/table_icons/icon_tx_kesearch_index.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'targetpid,content,params,type,tags,abstract,title,language'
    ),
    'columns' => array(
        'starttime' => array(
            'exclude' => 1,
            'label' => $langGeneralPath . 'LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'eval' => 'date',
                'renderType' => 'inputDateTime',
                'default' => '0',
                'checkbox' => '0'
            )
        ),
        'endtime' => array(
            'exclude' => 1,
            'label' => $langGeneralPath . 'LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'eval' => 'date',
                'renderType' => 'inputDateTime',
                'checkbox' => '0',
                'default' => '0',
                'range' => array(
                    'upper' => mktime(3, 14, 7, 1, 19, 2038),
                    'lower' => mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'))
                )
            )
        ),
        'fe_group' => array(
            'exclude' => 1,
            'label' => $langGeneralPath . 'LGL.fe_group',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'items' => array(
                    array('', 0),
                    array($langGeneralPath . 'LGL.hide_at_login', -1),
                    array($langGeneralPath . 'LGL.any_login', -2),
                    array($langGeneralPath . 'LGL.usergroups', '--div--')
                ),
                'foreign_table' => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
                'size' => 6,
                'minitems' => 0,
                'maxitems' => 99999,
            )
        ),
        'targetpid' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.targetpid',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'pages',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'content' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.content',
            'config' => array(
                'type' => 'text',
                'wrap' => 'OFF',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'params' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.params',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'type' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.type',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'tags' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.tags',
            'config' => array(
                'type' => 'text',
                'wrap' => 'OFF',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'abstract' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.abstract',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'language' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.language',
            'config' => array(
                'default' => 0,
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'sortdate' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.sortdate',
            'config' => array(
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => '10',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            )
        ),
        'orig_uid' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'orig_pid' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'directory' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.directory',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'hash' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'starttime, endtime, fe_group, targetpid, content,'
            . ' params, type, tags, abstract, title, language')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
