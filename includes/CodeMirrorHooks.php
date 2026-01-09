<?php

namespace MediaWiki\Extension\Less;

use MediaWiki\Config\Config;
use MediaWiki\Extension\CodeMirror\Hooks\CodeMirrorGetModeHook;
use MediaWiki\Title\Title;

class CodeMirrorHooks implements CodeMirrorGetModeHook {

	private bool $useCodeMirror;

	public function __construct( Config $config ) {
		$this->useCodeMirror = $config->get( 'LessUseCodeMirror' );
	}

	/**
	 * @param Title $title The title the language is for
	 * @param string|null &$mode The CodeMirror mode to use
	 * @param string $model The content model of the title
	 * @return bool True to continue or false to abort
	 */
	public function onCodeMirrorGetMode( Title $title, ?string &$mode, string $model ): bool {
		if ( $this->useCodeMirror && $model === 'less' ) {
			$mode = 'less';
			return false;
		}
		return true;
	}
}