<?php
namespace Craft;

/**
 * Notes Field plugin for Craft CMS
 *
 * Add custom notes as a field.
 *
 * @author    Ryan Payne
 * @copyright Copyright (c) 2017 Ryan Payne
 * @link      http://www.lewiscommunications.com/
 * @package   NotesField
 * @since     0.1.0
 */

class NotesFieldPlugin extends BasePlugin
{
	public function getName()
	{
		 return Craft::t('Notes Field');
	}

	public function getDescription()
	{
		return Craft::t('Add custom notes as a field.');
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/ryanbrookepayne/craft-notesfield';
	}

	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/ryanbrookepayne/craft-notesfield/master/releases.json';
	}

	public function getVersion()
	{
		return '0.1.0';
	}

	public function getSchemaVersion()
	{
		return '0.1.0';
	}

	public function getDeveloper()
	{
		return 'Ryan Payne';
	}

	public function getDeveloperUrl()
	{
		return 'http://www.lewiscommunications.com/';
	}
}