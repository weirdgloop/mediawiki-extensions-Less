<?php

namespace MediaWiki\Extension\Less;

use MediaWiki\Content\TextContent;

class Content extends TextContent {
	public function __construct( $text, $modelId = 'less' ) {
		parent::__construct( $text, $modelId );
	}
}
