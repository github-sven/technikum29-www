<?php

if(realpath($_SERVER['SCRIPT_FILENAME']) == __FILE__) {
	header('Content-Type: application/json');
	if(isset($_GET['pre'])) echo $_GET['pre'];
	echo t29Messages::create_json();
	if(isset($_GET['post'])) echo ";\n".$_GET['post'];
}

class t29Messages {
	public $lang;
	public static $order = array('de' => 0, 'en' => 1);
	
	function __construct($lang) {
		$this->lang = $lang;
	}

	function _($str_id) {
		if(!isset(self::$msg[$str_id])) {
			return "&lt;$str_id&gt;"; // error; mediawiki style
		} else {
			if(is_array(self::$msg[$str_id])) {
				return self::$msg[$str_id][ self::$order[$this->lang] ];
			} else
				return self::$msg[$str_id];
		}
	}
	
	/**
	 * $msg = new t29Messages("foo");
	 * print $msg->_("foobar");              // ordinary long version
	 * $_ = $msg->get_shorthand_printer();
	 * $_("foobar");                         // same but shorter
	 **/
	function get_shorthand_printer() {
		$t = $this;
		return function($str)use($t) { print $t->_($str); };
	}

	/// same but return instead of print
	function get_shorthand_returner() {
		$t = $this;
		return function($str)use($t) { return $t->_($str); };
	}

	static function create_json($filter_regexp=false) {
		$msg = $filter_regexp ? array_intersect_key(self::$msg,
				array_flip(preg_grep($filter_regexp, array_keys(self::$msg)))
				) : self::$msg;
		return json_encode(array(
			'order' => self::$order,
			'msg'   => $msg
		));
	}

	public static $msg = array(
		'html-title'             => 'technikum29',
		'head-h1-title'          => array('Zur technikum29 Startseite', 'Go to technikum29 homepage'),
		'head-h1'                => 'technikum29',

		'sidebar-h2-tour'        => array('Museumstour', 'Museum Tour'),
		'sidebar-h2-mainnav'     => array('Hauptnavigation', 'Main Navigation'),
		'sidebar-h2-lang'        => array('Sprachauswahl', 'Language'),

		'topnav-interlang-title' => array('Read this page (%s) in English', 'Diese Seite (%s) auf Deutsch lesen'),
		'topnav-search-label'    => array('Suchen', 'Search'),

		'js-menu-collapse-out'   => array('Menü ausklappen', 'Expand menu'),
		'js-menu-collapse-in'    => array('Menü einklappen', 'Fold menu'),
		'js-menu-scroll-show'    => array('Menü einblenden', 'Show menu'),
		'js-menu-scroll-hide'    => array('Menü ausblenden', 'Hide menu'),

		'footer-copyright-tag'   => '&copy; 2003-2012 technikum29.',
		'footer-legal-link'      => array('Impressum und Kontakt', 'Legal notices'),
		'footer-legal-file'      => array('/impressum.php', '/contact.php'),
		
		'nav-rel-prev'           => array('vorherige Seite', 'previous page'),
		'nav-rel-next'           => array('nächste Seite', 'next page'),
		'nav-rel-start'          => array('Starte Führrung', 'Start guided tour'),
		
		'head-rel-first'         => array('Deutscher Start', 'English start'),
		'head-rel-prev'          => array('Zur vorherigen Seite (%s)', 'Previous Page (%s)'),
		'head-rel-next'          => array('Zur folgenden Seite (%s)', 'Next Page (%s)'),
		'head-rel-interlang'     => array('Englische Version dieser Seite (%s)', 'Deutsche Version dieser Seite (%s)'),
		
		// used in /shared/js/modules/heading_links.js
		'js-heading-links'       => array("Direktlink zu diesem Abschnitt", "Link to this section"),
		// used in /shared/js/modules/img_license.js
		'js-img-license'         => array(
										'&copy; technikum29. <a href="/de-v6/impressum.shtm#image-copyright">Lizenzbestimmungen</a>',
										'&copy; technikum29. <a href="/en/contact.shtm#image-copyright">Licensing terms</a>',
									),
	);
}
