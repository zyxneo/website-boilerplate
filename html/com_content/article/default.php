<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc =& JFactory::getDocument();
$templateparams = $app->getTemplate(true)->params;
$images = json_decode($this->item->images);
$urls = json_decode($this->item->urls);
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

// Create shortcut to parameters.
$params = $this->item->params;


// Add Facebook Open Graph and Twitter Cards to Joomla
// https://www.dart-creations.com/joomla/joomla-tutorials/add-facebook-open-graph-and-twitter-cards-to-joomla.html
$profilImage = htmlspecialchars(JURI::root().'images/profil.jpg');
$logoImage = htmlspecialchars(JURI::root().'images/logo.jpg');
$sitename = $app->get('sitename');
$email = $app->getCfg('mailfrom');
$fb_app_id = $app->getCfg('facebook_app_id');
$fb_admins = $app->getCfg('facebook_admins');
$language  = $doc->language;

if (isset($images->image_intro) and !empty($images->image_intro)) {
  $timage= htmlspecialchars(JURI::root().$images->image_intro);
} elseif (isset($images->image_fulltext) and !empty($images->image_fulltext)) {
  $timage= htmlspecialchars(JURI::root().$images->image_fulltext);
} else {
  $timage= $logoImage;
}
$imageData = getimagesize($timage);
$imageWidth = $imageData[0];
$imageHeight = $imageData[1];

$doc->addCustomTag( '
    <meta name="twitter:title" content="'.$this->escape($this->item->title).'">
    <meta name="twitter:card" content="'.$profilImage.'">
    <meta name="twitter:site" content="@Bernathju">
    <meta name="twitter:creator" content="@Bernathju">
    <meta name="twitter:url" content="'.str_replace('" ','&quot;',JURI::current()).'">
    <meta name="twitter:description" content="'.strip_tags($this->item->introtext).'">
    <meta name="twitter:image" content="'.$timage.'">
    <meta property="og:title" content="'.$this->escape($this->item->title).'"/>
    <meta property="og:type" content="article"/>
    <meta property="og:email" content="'.$email.'"/>
    <meta property="og:url" content="'.str_replace('" ','&quot;',juri::current()).'">
    <meta property="og:image" content="'.$timage.'"/>
    <meta property="og:image:width" content="'.$imageWidth.'"/>
    <meta property="og:image:height" content="'.$imageHeight.'"/>
    <meta property="og:site_name" content="'.$sitename.'"/>
    <meta property="og:locale" content="'.$language.'"/>
    <meta property="fb:admins" content="'.$fb_admins.'"/>
    <meta property="fb:app_id" content="'.$fb_app_id.'"/>
    <meta property="og:description" content="'.strip_tags($this->item->introtext).'"/>
    <meta property="article:published_time" content="'.$this->item->publish_up.'"/>
    <meta property="article:author" content="'.$this->item->author.'"/>
    <meta property="article:section" content="'.$this->escape($this->item->category_title).'"/>
');


if (!empty($this->item->tags->itemTags)) {
$tags = "";
$index = 0;
foreach ($this->item->tags->itemTags as $key) {
  if ($index != 0) {
    $tags .= ", ";
  }
  $tags .= $key->title;
  $index += 1;
}
$doc->addCustomTag( '
<meta property="article:tag" content="'.$tags.'"/>
');
}

?>
<article class="item-page<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>

<?php if ($this->params->get('show_page_heading') and $params->get('show_title')) :?>
<hgroup>
<?php endif; ?>
<h1>
	<?php echo $this->escape($this->params->get('page_heading')); ?>
</h1>
<?php endif; ?>
<?php
if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
{
	echo $this->item->pagination;
}

if ($params->get('show_title')) : ?>
		<h2>
			<?php echo $this->escape($this->item->title);?>
		</h2>
<?php endif; ?>
<?php if ($this->params->get('show_page_heading') and $params->get('show_title')) :?>
</hgroup>
<?php endif; ?>



	<?php  if (!$params->get('show_intro')) :
		echo $this->item->event->afterDisplayTitle;
	endif; ?>


<?php $useDefList = (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_parent_category'))
	or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date'))
	or ($params->get('show_hits'))); ?>

<?php if ($useDefList) : ?>
 <dl class="article-info">
 <dt class="article-info-term"><?php  echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?></dt>
<?php endif; ?>
<?php if ($params->get('show_parent_category') && $this->item->parent_slug != '1:root') : ?>
		<dd class="parent-category-name">
			<?php 	$title = $this->escape($this->item->parent_title);
					$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '">' . $title . '</a>';?>
			<?php if ($params->get('link_parent_category') and $this->item->parent_slug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
			<?php endif; ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_category')) : ?>
		<dd class="category-name">
			<?php 	$title = $this->escape($this->item->category_title);
					$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)) . '">' . $title . '</a>';?>
			<?php if ($params->get('link_category') and $this->item->catslug) : ?>
				<?php echo '<span class="icon-news"></span>' . $url; ?>
				<?php else : ?>
				<?php echo '<span class="icon-news"></span>' . $title; ?>
			<?php endif; ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_create_date')) : ?>
		<dd class="create">
		<?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2'))); ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_modify_date')) : ?>
		<dd class="modified">
		<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2'))); ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_publish_date')) : ?>
		<dd class="published">
		<?php echo '<span class="icon-calendar"></span>' . JHtml::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC2')); ?>
		</dd>
<?php endif; ?>
<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
	<dd class="createdby">
		<?php $author = $this->item->author; ?>
		<?php $author = ($this->item->created_by_alias ? $this->item->created_by_alias : $author);?>
		<?php if (!empty($this->item->contact_link ) &&  $params->get('link_author') == true) : ?>
			<?php echo '<span class="icon-pen"></span>' . JHtml::_('link', $this->item->contact_link, $author); ?>
		<?php else : ?>
			<?php echo '<span class="icon-pen"></span>' . $author; ?>
		<?php endif; ?>
	</dd>
<?php endif; ?>
<?php if ($params->get('show_hits')) : ?>
		<dd class="hits">
		<?php echo '<span class="icon-eye"></span>' . $this->item->hits; ?>
		</dd>
<?php endif; ?>
<?php if ($useDefList) : ?>
 </dl>
<?php endif; ?>

	<?php if (isset ($this->item->toc)) : ?>
		<?php echo $this->item->toc; ?>
	<?php endif; ?>

<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position == '0')) OR ($params->get('urls_position') == '0' AND empty($urls->urls_position)))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))) : ?>

	<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>
	<?php  if (isset($images->image_fulltext) and !empty($images->image_fulltext)) : ?>
	<?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>

	<div class="img-fulltext-<?php echo htmlspecialchars($imgfloat, ENT_COMPAT, 'UTF-8'); ?>">
	<img
		<?php if ($images->image_fulltext_caption):
			echo 'class="img-fluid caption"'.' title="' .htmlspecialchars($images->image_fulltext_caption, ENT_COMPAT, 'UTF-8') .'"';
      else :
        echo 'class="img-fluid"';
		endif; ?>
		src="<?php echo htmlspecialchars($images->image_fulltext, ENT_COMPAT, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt, ENT_COMPAT, 'UTF-8'); ?>"/>
	</div>
	<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
endif;
?>
	<?php echo $this->item->text; ?>

<?php // TAGS ?>
<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
	<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
	<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
<?php endif; ?>

<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
	echo $this->item->pagination;?>
<?php endif; ?>

	<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position == '1')) OR ( $params->get('urls_position') == '1'))) : ?>

	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	echo $this->item->pagination;?>
<?php endif; ?>
	<?php echo $this->item->event->afterDisplayContent; ?>


	<?php echo $this->item->event->beforeDisplayContent; ?>

<?php if ($params->get('access-edit') ||  $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
		<ul class="actions list-inline">
		<?php if (!$this->print) : ?>
				<?php if ($params->get('show_print_icon')) : ?>
				<li class="print-icon list-inline-item">
						<?php echo JHtml::_('icon.print_popup', $this->item, $params, array(), true); ?>
				</li>
				<?php endif; ?>

				<?php if ($params->get('show_email_icon')) : ?>
				<li class="email-icon list-inline-item">
						<?php echo JHtml::_('icon.email', $this->item, $params, array(), true); ?>
				</li>
				<?php endif; ?>
				<?php if ($this->user->authorise('core.edit', 'com_content.article.' . $this->item->id)) : ?>
						<li class="edit-icon list-inline-item">
							<?php echo JHtml::_('icon.edit', $this->item, $params, array(), true); ?>
						</li>
					<?php endif; ?>
		<?php else : ?>
				<li class="list-inline-item">
						<?php echo JHtml::_('icon.print_screen', $this->item, $params, array(), true); ?>
				</li>
		<?php endif; ?>
		</ul>
<?php endif; ?>

<ul class="list-inline social">
    <li class="list-inline-item twitter">
      <a href="https://twitter.com/share" class="twitter-share-button" data-via="bernatju" data-related="bernatju" data-dnt="true">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </li>
    <li class="list-inline-item facebook">
      <div
        class="fb-like"
        data-share="true"
        data-layout="button_count">
      </div>
    </li>
    <li class="list-inline-item google">
        <div class="g-plus" data-action="share" data-annotation="none"></div>
    </li>
</ul>

</article>
