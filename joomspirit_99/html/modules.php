<?php
// Protection contre les appels directs.
defined("_JEXEC") or die("Restricted access");
function modChrome_joomspirit($module, &$params, &$attribs) {
   	// init vars
	$showtitle = $module->showtitle;
	$content   = $module->content;
	$suffix    = '';
	$badge		='';
 
	// force module type
	if ($module->position == 'logo')  $suffix = 'logo';
	if ($module->position == 'left')  $suffix = 'normal';
	if ($module->position == 'right')  $suffix = 'normal';
	if ($module->position == 'search')  $suffix = 'normal';
	if ($module->position == 'address')  $suffix = 'normal';
	if ($module->position == 'top')  $suffix = 'normal';
	if ($module->position == 'bottom')  $suffix = 'normal';
	if ($module->position == 'bottom_menu')  $suffix = 'no-title';
	if ($module->position == 'translate')  $suffix = 'no-title';
	if ($module->position == 'menu')  $suffix = 'menu';
	if ($module->position == 'image')  $suffix = 'normal';
	if ($module->position == 'slogan')  $suffix = 'normal';
	if ($module->position == 'user1')  $suffix = 'normal';
	if ($module->position == 'user2')  $suffix = 'normal';
	if ($module->position == 'user3')  $suffix = 'normal';
	if ($module->position == 'user4')  $suffix = 'normal';
	if ($module->position == 'user5')  $suffix = 'normal';
	if ($module->position == 'user6')  $suffix = 'normal';
	if ($module->position == 'user7')  $suffix = 'normal';
	if ($module->position == 'user8')  $suffix = 'normal';
	if ($module->position == 'user9')  $suffix = 'normal';
	if ($module->position == 'ga')  $suffix = 'google_code';

	
	// set module skeleton using the suffix
	switch ($suffix) {
		case 'logo':
			$skeleton = 'logo';
			break;
		case 'normal':
			$skeleton = 'normal';
			break;			
		case 'menu':
			$skeleton = 'menu';
			break;
		case 'google_code':
			$skeleton = 'google_code';
			break;				
		case 'no-title':
			$skeleton = 'no-title';
			break;	
		default:
			$skeleton = 'not defined';
	}
	// Modules
	switch ($skeleton) {
		case 'logo':
			/*
			 * logo module
			 */
			?>
			
				<div class="<?php echo $suffix; ?> <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8'); ?>">
					
					<?php echo $content; ?>
			
				</div>

			
			<?php 
			break;
		case 'normal':
			/*
			 * normal
			 */
			?>
			<div class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8'); ?>" >
				<div>
					<?php if ($showtitle) : ?>
					<div class="module-title">
						<h3 class="module"><span class="<?php echo htmlspecialchars($params->get('header_class'), ENT_QUOTES, 'UTF-8'); ?>" ><?php echo $module->title ; ?></span></h3>
					</div>
					<?php endif; ?>
			
					<div class="content-module">
						<?php echo $content; ?>
					</div>
				</div>
				
				<div class="icon-module"></div>
			</div>
			<?php 
			break;
			
		case 'menu':
			?>
					
					<?php echo $content; ?>

			<?php 
			break;		
			
		case 'no-title':
			/*
			 * no title modules
			 */
			?>
			<div class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_QUOTES, 'UTF-8'); ?>" >
			
				<div class="content-module">
					<?php echo $content; ?>
				</div>

			</div>
			<?php 
			break;			

		case 'google_code':
			/*
			 * for google analytics tracking code
			 */
			?>
					<?php echo $content; ?>

			<?php 
			break;
			
		default:
			/*
			 * not defined
			 */
			?>
			<div class="module <?php echo $suffix; ?>">
				<?php if ($showtitle) : ?>
				<h3 class="module"><span class="<?php echo htmlspecialchars($params->get('header_class'), ENT_QUOTES, 'UTF-8'); ?>" ><?php echo $module->title ; ?></span></h3>
				<?php endif; ?>
				<?php echo $content; ?>
			</div>
			<?php 
			break;
	}
}
?>