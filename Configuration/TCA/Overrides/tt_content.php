<?php

// ---------------------------------------------------------------------------------------------------------------------
// Icon Text Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ce_facts/Resources/Private/Language/locallang_tca.xlf:tx_ce_facts.title',
		'ce_facts',
		'ps14-content-facts'
	),
	'CType',
	'ce_facts'
);

$GLOBALS['TCA']['tt_content']['types']['ce_facts'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header, bodytext, tx_xo_elements,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

//$GLOBALS['TCA']['tt_content']['types']['ce_hero']['columnsOverrides']['bodytext']['config'] = [
//	'enableRichtext' => true,
//	'richtextConfiguration' => 'xoDefault',
//];
//
//$GLOBALS['TCA']['tt_content']['types']['ce_hero']['columnsOverrides']['image']['config'] = [
//	'maxitems' => 1,
//];

// ---------------------------------------------------------------------------------------------------------------------
// Hero Slider
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
//	array(
//		'LLL:EXT:xo/Resources/Private/Language/locallang_tca.xlf:tx_xo_hero_slider.title',
//		'xo_hero_slider',
//		'content-textpic'
//	),
//	'CType',
//	'xo_hero_slider'
//);
//
//$GLOBALS['TCA']['tt_content']['types']['xo_hero_slider'] = $GLOBALS['TCA']['tt_content']['types']['xo_slider'];