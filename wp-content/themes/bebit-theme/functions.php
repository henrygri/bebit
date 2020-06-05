<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */


/* Custom functions dev */
require_once(dirname( __FILE__ ) . '/include/custom-function.php');

/**
 * If you are installing Timber as a Composer dependency in your theme, you'll need this block
 * to load your dependencies and initialize Timber. If you are using Timber via the WordPress.org
 * plug-in, you can safely delete this block.
 */
$composer_autoload = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $composer_autoload ) ) {
	require_once $composer_autoload;
	$timber = new Timber\Timber();
}

/**
 * This ensures that Timber is loaded and available as a PHP class.
 * If not, it gives an error message to help direct developers on where to activate
 */
if ( ! class_exists( 'Timber' ) ) {

	add_action(
		'admin_notices',
		function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		}
	);

	add_filter(
		'template_include',
		function( $template ) {
			return get_stylesheet_directory() . '/static/no-timber.html';
		}
	);
	return;
}

/**
 * Sets the directories (inside your theme) to find .twig files
 */
Timber::$dirname = array( 'templates', 'views' );

/**
 * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
 * No prob! Just set this value to true
 */
Timber::$autoescape = false;


/**
 * We're going to configure our theme inside of a subclass of Timber\Site
 * You can move this to its own file and include here via php's include("MySite.php")
 */
class StarterSite extends Timber\Site {
	/** Add timber support. */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
		add_filter( 'timber/context', array( $this, 'add_to_context' ) );
		add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}
	/** This is where you can register custom post types. */
	public function register_post_types() {

	}
	/** This is where you can register custom taxonomies. */
	public function register_taxonomies() {

	}

	/** This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context( $context ) {
		$context['menu']  = new Timber\Menu();
		$context['site']  = $this;
		$object = get_queried_object();
		$context['seo']  = get_field('fileds_seo',$object->name);
		$context['current_language']  = ICL_LANGUAGE_CODE;
		return $context;
	}



	public function theme_supports() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		//add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		add_theme_support( 'menus' );
	}

	/** This Would return 'foo bar!'.
	 *
	 * @param string $text being 'foo', then returned 'foo bar!'.
	 */
	public function myfoo( $text ) {
		$text .= ' bar!';
		return $text;
	}

	/** This is where you can add your own functions to twig.
	 *
	 * @param string $twig get extension.
	 */
	public function add_to_twig( $twig ) {
		$twig->addExtension( new Twig\Extension\StringLoaderExtension() );
		$twig->addFilter( new Twig_SimpleFilter( 'dump', [$this, 'filter_dump'] ) );
    	$twig->addFilter( new Twig_SimpleFilter( 'methods', [$this, 'filter_methods'] ) );
		return $twig;
	}

	/** This is where you can enable var_dump .*/
	function filter_dump( $var ) {
		var_dump( $var );
	}

	function filter_methods( $object ) {
		var_dump( get_class_methods( $object ) );
	}

}


function load_case(){
    if(isset($_POST['page']) && $_POST['page'] != '') {

    			$id = array();
    			$caseShow = get_field('lista_case',7);
    			foreach ($caseShow as $case) {
    				$id[] = $case->ID;
    			}

				$args = array(
					'post_type' => 'case-history',
					'post_status' => 'publish',
					'posts_per_page' => 6,
					'suppress_filters' => false,
					'offset' => $_POST['page'] * 6,
					'post__not_in'  => $id,
					'has_password'=>false
				);

				$cases = get_posts($args);
				if(count($cases) > 0) : ?>
				<div class="grid row list_ajax">
				<?php foreach ($cases as $case) : ?>
							<div class="item col-lg-6" data-id="<?php echo $case->ID; ?>">
								<div class="figure">
									<a href="<?php echo $case->guid; ?>" title="<?php echo $case->post_title; ?>">
										<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($case->ID),'full'); ?>
										<figure><img class="w-100" src="<?php echo $image[0]; ?>" alt=""></figure>
										<div class="case_box_text">
											<h3><img src="/content/be.png" alt="Be"><?php echo $case->post_title; ?></h3>
											<?php
											$terms = wp_get_post_terms($case->ID, 'sector', array( 'fields' => 'names', 'parent' => 27) );
											$total = count($terms);
											$count = 1;
											?>
											<p>
												<?php
												foreach ($terms as $term) {
													echo $term;
													if ($count < $total) {
										        		echo ', ';
										      		}
										      		$count++;
												}
												?>
											</p>
										</div>
									</a>
								</div>
							</div>
				<?php endforeach; ?>
				</div>
<?php		else :
					echo 'end';
				endif;
			}
    die;
}
add_action('wp_ajax_load_case','load_case');
add_action('wp_ajax_nopriv_load_case','load_case');

new StarterSite();
