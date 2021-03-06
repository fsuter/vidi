<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

$tca = array(
	'grid' => array(
		'showFields' => '*', // @todo implement me!
		'hideFields' => '', // @todo implement me!
		'columns' => array(
			'__checkbox' => array(
				'renderer' => new Fab\Vidi\Grid\CheckBoxComponent(),
			),
			'uid' => array(
				'visible' => FALSE,
				'label' => 'Id',
				'width' => '5px',
			),
			'header' => array(
				'editable' => TRUE,
				'label' => 'LLL:EXT:vidi/Resources/Private/Language/tt_content.xlf:header',
			),
			'tstamp' => array(
				'visible' => FALSE,
				'format' => 'Fab\Vidi\Formatter\Date',
				'label' => 'LLL:EXT:vidi/Resources/Private/Language/locallang.xlf:tstamp',
			),
			'crdate' => array(
				'visible' => FALSE,
				'format' => 'Fab\Vidi\Formatter\Date',
				'label' => 'LLL:EXT:vidi/Resources/Private/Language/locallang.xlf:crdate',
			),
			'hidden' => array(
				'renderer' => 'Fab\Vidi\Grid\VisibilityRenderer',
				'label' => 'LLL:EXT:vidi/Resources/Private/Language/locallang.xlf:active',
				'width' => '3%',
			),
			'__buttons' => array(
				'renderer' => new Fab\Vidi\Grid\ButtonGroupComponent(),
			),
		),
	),
);

\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TCA']['tt_content'], $tca);
