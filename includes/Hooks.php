<?php

namespace MediaWiki\Extension\Less;

use MediaWiki\Revision\Hook\ContentHandlerDefaultModelForHook;

class Hooks implements ContentHandlerDefaultModelForHook {

	/**
	 * @param Title $title Title in question
	 * @param string &$model Model name. Use with CONTENT_MODEL_XXX constants.
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onContentHandlerDefaultModelFor( $title, &$model ) {
		if ( $title->getNamespace() === NS_MEDIAWIKI && preg_match( '/\.less$/', $title->getText() )) {
			$model = 'less';
			return false;
		}
		return true;
	}
}
