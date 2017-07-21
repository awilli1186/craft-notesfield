<?php
namespace Craft;

/**
 * Notes Field plugin for Craft CMS
 *
 * NotesField FieldType
 *
 * @author    Ryan Payne
 * @copyright Copyright (c) 2017 Ryan Payne
 * @link      http://www.lewiscommunications.com/
 * @package   NotesField
 * @since     0.1.0
 */

class NotesFieldFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Notes');
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('notesfield/settings', [
			'settings' => $this->getSettings()
		]);
	}

	public function getInputHtml($name, $value)
	{
		craft()->templates->includeCssResource('notesfield/css/field.min.css');
		craft()->templates->includeJsResource('notesfield/js/field.min.js');

		return craft()->templates->render('notesfield/', [
			'id' => craft()->templates->formatInputId($name),
			'settings' => $this->getSettings()
		]);
	}

	protected function defineSettings()
	{
		return [
			'notes' => AttributeType::Mixed,
			'type' => AttributeType::String,
			'hideLabel' => [AttributeType::Bool, true]
		];
	}
}