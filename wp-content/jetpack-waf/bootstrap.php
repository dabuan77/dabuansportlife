<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'normal' );
define( 'JETPACK_WAF_SHARE_DATA', true );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', '/homepages/6/d995481062/htdocs/clickandbuilds/dabuansportlife134107/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/homepages/6/d995481062/htdocs/clickandbuilds/dabuansportlife134107/wp-content/../wp-config.php' );
require_once '/homepages/6/d995481062/htdocs/clickandbuilds/dabuansportlife134107/wp-content/plugins/jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
