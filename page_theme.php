<?php

namespace Application\Theme\Mycvl;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {
	
	protected $pThemeGridFrameworkHandle = 'bootstrap3';
	
    public function registerAssets(){
		$this->requireAsset('css', 'font-awesome');
		$this->requireAsset('javascript', 'jquery');
    }
	
	/*
	public function getThemeEditorClasses(){
		return array(
		  array('title' => t('Bordered Image'), 'menuClass' => 'bordered', 'spanClass' => 'bordered'),
		);
	}
	*/

}
