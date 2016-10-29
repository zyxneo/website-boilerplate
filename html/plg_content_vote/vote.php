<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.vote
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Vote plugin.
 *
 * @since  1.5
 */
class PlgContentVote extends JPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * Displays the voting area if in an article
	 *
	 * @param   string   $context  The context of the content being passed to the plugin
	 * @param   object   &$row     The article object
	 * @param   object   &$params  The article params
	 * @param   integer  $page     The 'page' number
	 *
	 * @return  mixed  html string containing code for the votes if in com_content else boolean false
	 *
	 * @since   1.6
	 */
	public function onContentBeforeDisplay($context, &$row, &$params, $page=0)
	{
		$parts = explode(".", $context);

		if ($parts[0] != 'com_content')
		{
			return false;
		}

		$html = '';

		if (!empty($params) && $params->get('show_vote', null))
		{
			$rating = (int) @$row->rating;

			$view = JFactory::getApplication()->input->getString('view', '');
            
			$html .= '<div class="content_rating" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">';
			$html .= '<p class="unseen element-invisible sr-only">'
					. JText::sprintf('PLG_VOTE_USER_RATING', '<span itemprop="ratingValue">' . $rating . '</span>', '<span itemprop="bestRating">5</span>')
					. '<meta itemprop="ratingCount" content="' . (int) $row->rating_count . '" />'
					. '<meta itemprop="worstRating" content="0" />'
					. '</p>';
			$html .= '</div>';

			if ($view == 'article' && $row->state == 1)
			{
				$uri = clone JUri::getInstance();
				$uri->setVar('hitcount', '0');

				// Create option list for voting select box
				$options = array();

				for ($i = 1; $i < 6; $i++)
				{
					$options[] = JHtml::_('select.option', $i, JText::sprintf('PLG_VOTE_VOTE', $i));
				}

				// Generate voting form
				$html .= '<form method="post" action="' . htmlspecialchars($uri->toString(), ENT_COMPAT, 'UTF-8') . '" class="form-inline pull-xs-left">';
				$html .= '<span class="content_vote">';
				$html .= '<label class="unseen element-invisible" for="content_vote_' . $row->id . '">' . JText::_('PLG_VOTE_LABEL') . '</label>';
				$html .= JHtml::_('select.genericlist', $options, 'user_rating', null, 'value', 'text', $rating, 'content_vote_' . $row->id);
				$html .= '&#160;<input class="btn btn-mini hidden-xs-up" type="submit" name="submit_vote" value="' . JText::_('PLG_VOTE_RATE') . '" />';
				$html .= '<input type="hidden" name="task" value="article.vote" />';
				$html .= '<input type="hidden" name="hitcount" value="0" />';
				$html .= '<input type="hidden" name="url" value="' . htmlspecialchars($uri->toString(), ENT_COMPAT, 'UTF-8') . '" />';
				$html .= JHtml::_('form.token');
				$html .= '</span>';
				$html .= '</form>';
			}
		}

		return $html;
	}
}
