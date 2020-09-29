<?php
/**
 * SkinTemplate class for the Chick skin
 *
 * @ingroup Skins
 */
class SkinChick extends SkinMustache {
	public $template = 'ChickTemplate';

	/**
	 * @inheritDoc
	 */
	public function getTemplateData() {
		$data = parent::getTemplateData();
		$tpl = $this->prepareQuickTemplate();
		$tplData = $tpl->execute();
		return $data + $tplData + [
			'chick-main-page-url' => self::makeMainPageUrl(),
		];
	}
}
