<?php

namespace MediaWiki\Extension\Less;

use MediaWiki\Config\Config;
use MediaWiki\Extension\CodeEditor\Hooks\CodeEditorGetPageLanguageHook;
use MediaWiki\Title\Title;

class CodeEditorHooks implements CodeEditorGetPageLanguageHook {

	private bool $useCodeEditor;

	public function __construct( Config $config ) {
		$this->useCodeEditor = $config->get( 'LessUseCodeEditor' );
	}

	/**
	 * @param Title $title The title the language is for
	 * @param string|null &$lang The language to use
	 * @param string $model The content model of the title
	 * @param string $format The content format of the title
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onCodeEditorGetPageLanguage( Title $title, ?string &$lang, string $model, string $format ): bool {
		if ( $this->useCodeEditor && $model === 'less' ) {
			$lang = 'less';
			return false;
		}
		return true;
	}
}
