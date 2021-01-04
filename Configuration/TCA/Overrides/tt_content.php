<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'SimpleNews',
    'ManageSimpleNews',
    'Simple News',
    'EXT:simple_news/Resources/Public/Icons/Extension.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['simplenews_managesimplenews'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'simplenews_managesimplenews',
    'FILE:EXT:simple_news/Configuration/FlexForms/flexform_news.xml'
    );