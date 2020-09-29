<?php
/**
 * SkinTemplate class for the Antique skin
 *
 * @ingroup Skins
 */
class SkinAntique extends SkinTemplate {
	public $skinname = 'antique',
		$stylename = 'Antique',
		$template = 'AntiqueTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.antique'
		] );
		$out->addModules( [
			'skins.antique.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
