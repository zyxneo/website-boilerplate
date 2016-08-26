<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', false, true);

if ($width)
{
	$moduleclass_sfx .= ' ' . 'mod_search' . $module->id;
	$css = 'div.mod_search' . $module->id . ' input[type="search"]{ width:auto; }';
	JFactory::getDocument()->addStyleDeclaration($css);
	$width = ' size="' . $width . '"';
}
else
{
	$width = '';
}
?>
<div class="search col-lg-3 pull-xs-right">
	<form action="<?php echo JRoute::_('index.php');?>" method="post" class="form-inline">
	
		<div class="input-group">
			<?php
				$output = '<label for="mod-search-searchword" class="sr-only">' . $label . '</label> ';
				$output .= '<input name="searchword" id="mod-search-searchword" maxlength="' . $maxlength . '"  class="form-control inputbox search-query" type="search"' . $width;
				$output .= ' placeholder="' . $text . '" />';

				$output .= '<span class="input-group-btn"><button class="button btn btn-primary" onclick="this.form.searchword.focus();">' . $button_text . '</button></span>';

				echo $output;
			?>
			<input type="hidden" name="task" value="search" />
			<input type="hidden" name="option" value="com_search" />
			<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
			
		</div>
	</form>
</div>
