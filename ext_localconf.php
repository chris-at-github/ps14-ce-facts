<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	function() {

		// -----------------------------------------------------------------------------------------------------------------
		// PageTs
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ce_facts/Configuration/TSConfig/Page.t3s">'
		);

		// -----------------------------------------------------------------------------------------------------------------
		// Icons

		// Registrierung Icons
		// @see: https://www.typo3lexikon.de/typo3-tutorials/core/systemextensions/core/imaging.html
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

		$iconRegistry->registerIcon(
			'ps14-content-facts',
			\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
			['source' => 'EXT:ce_facts/Resources/Public/Icons/content-facts.svg']
		);
	}
);