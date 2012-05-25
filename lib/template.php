<?php
/**
 * technikum29v6 Page Template
 *
 * Global vars:
 *  $lang = de | en
 *  $seiten_id = kurzkennung der aktuellen seite
 *  $root = Seiten-Root fuer URLs ($root/de, $root/shared, etc.)
 *  $titel = Seitentitel
 *  $header_cache_file, $footer_cache_file.
 **/
 
class t29Template {
	public $conf;
	public $menu;

	function __construct($conf_array) {
		$this->conf = $conf_array;
		
		// create a menu:
		require_once $this->conf['lib'].'/menu.php';
		$this->menu = new t29Menu($this->conf);
	}
	
	/**
	 * Main caching and output system.
	 * Parameters (global configuration):
	 *    skip_cache  -  if true, skips writing output to cache file
	 *    purge_cache -  if true, forces creation of new cache file
	 *                   (does not change behaviour of this file's code)
	 **/
	function create_cache() {
		ob_start();
		$this->print_header();
		register_shutdown_function(array($this, 'create_cache_shutdown'));
	}
	
	function create_cache_shutdown() {
		$this->print_footer();
		$whole_page = ob_get_flush();
		if($this->conf['skip_cache']) {
			echo "<!-- debug mode, skipped cache and cache saving. -->";
			return; // do not save anything
		}
		
		if(!file_exists($this->conf['cache_file'])) {
			t29Template::mkdir_recursive(dirname($this->conf['cache_file']));
		}

		file_put_contents($this->conf['cache_file'], $whole_page);
	}

	public static function mkdir_recursive($pathname) {
		is_dir(dirname($pathname)) || t29Template::mkdir_recursive(dirname($pathname));
		return is_dir($pathname) || @mkdir($pathname);
	}

	function print_header() {
?>
<!doctype html>
<html class="no-js" lang="de">
<head>
  <meta charset="utf-8">
  <title><?php isset($this->conf['titel']) ? $this->conf['titel'].' - ' : ''; ?> technikum29</title>
  <meta name="description" content="Produziert am 08.01.2012">
  <meta name="author" content="Sven">
  <meta name="generator" content="t29v6 $Id$">
  <meta name="t29.cachedate" content="<?php print date('r'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="/shared/css-v6/boiler.css">
  <link rel="stylesheet" href="/shared/css-v6/style.css">
  <link rel="stylesheet" href="/shared/css/common.css">

  <script src="/shared/js-v6/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<div id="footer-background-container"><!-- helper -->
  <div id="container">
	<h1 role="banner"><a href="#/" title="Zur technikum29 Startseite">technikum29</a></h1>
	<div id="background-color-container"><!-- helper -->
	<section class="main content" role="main" id="content">
		<!--<header class="teaser">
			<h2 id="pdp8L">Wissenschaftliche Rechner und Minicomputer</h2>
			<img width=880 src="http://www.technikum29.de/shared/photos/rechnertechnik/univac/panorama-rechts.jpg">
		</header>-->
	<!-- start content -->
<?php 
} // function print_header().

function print_footer() {
?>
	<!-- end content -->
	</section>
	<hr>
	<section class="sidebar">
			<h2 class="visuallyhidden">Museumstour</h2>
			<nav class="side">
				<?php $this->menu->print_menu($this->menu->sidebar_menu); ?>
				<span class="button collapse-menu">Menü ausklappen</span>
			</nav>
			<!-- hier dann die Buttons, die dynamisch erzeugt werden, zum Aufklappen, etc. -->
			<!-- die werden dann mit Javascript gemacht -->
			<span class="button get-menu">Menü anzeigen</span>
	</section>
	</div><!-- div id="background-color-container" helper end -->
	<hr>
	<header class="banner">
		<h2 class="visuallyhidden">Hauptnavigation</h2>
		<nav class="horizontal">
			<?php $this->menu->print_menu($this->menu->horizontal_menu); ?>
		</nav>
		<nav class="top">
			<h3 class="visuallyhidden">Sprachauswahl</h3>
			<ul>
				<li class="active"><a href="#">Deutsch</a>
				<li><a href="#">Englisch</a>
			</ul>
			<form method="get" action="#">
				<span class="no-js">Suchen:</span>
				<input type="text" value="" data-defaultvalue="Suchen" name="q" class="text">
				<input type="submit" value="Suchen" class="button">
			</form>
		</nav>
    </header>
	<hr>
    <footer>
		<nav class="guide">
			<!-- hier wird nav.side die Liste per JS reinkopiert -->
		</nav>
		<nav class="rel clearfix">
		<ul>
			<?php $this->menu->print_relations(); ?>
			<!--
			<li class="prev"><a href="#">vorherige Seite <strong>Univac 9200</strong></a>
			<li class="next"><a href="#">nächste Seite <strong>Analog und Hybridrechner</strong></a>
			-->
		</ul>
		</nav>
		<div class="right">
			<img src="/shared/img-v6/logo.footer.png" title="technikum29 Logo" alt="Logo" class="logo">
			&copy; 2003-2012 technikum29.
			<br/><a href="/de-v6/impressum.php">Impressum und Kontakt</a>
			<div class="icons">
				<a href="/de-v6/impressum.php#image-copyright"><img src="/shared/img-v6/cc-icon.png"></a>
				<!--<a href="http://ufopixel.de" title="Designed by Ufopixel"><img src="http://svenk.homeip.net/dropbox/Ufopixel/Ufopixel-Design/logo_90x30/ufopixel_logo_90x30_version2.png"></a>-->
			</div>
			<!--CC<br>Viele Bilder können unter einer CreativeCommons-Lizenz
			verwendet werden. Erkundigen Sie sich.-->
		</div>
				
		<!--Copyright-Hinweis<br>
		technikum29-Logo, Link aufs Impressum, Kontakt<br>
		Creative-Commons-Tag<br>
		Designed by Ufopixel<br>-->
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/shared/js-v6/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <script defer src="/shared/js-v6/plugins.js"></script>
  <script defer src="/shared/js-v6/script.js"></script>
</div><!-- end of div id="footer-background-container" helper -->
</body>
</html>
<?php
	} // function print_footer()
	
} // class t29Template