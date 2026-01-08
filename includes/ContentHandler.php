<?php

namespace MediaWiki\Extension\Less;

use MediaWiki\Content\TextContentHandler;

class ContentHandler extends TextContentHandler {
	public function __construct( $modelId = 'less' ) {
		parent::__construct( $modelId, [ 'less' ] );
	}

	protected function getContentClass() {
		return Content::class;
	}
}
