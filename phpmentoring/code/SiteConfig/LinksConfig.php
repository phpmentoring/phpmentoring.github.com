<?php
class LinksConfig extends DataExtension {
	public static $db = array(
		"GitHubLink" => "Text"
	);
	
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab("Root.Links", array(
			new TextField("GitHubLink", "GitHub Link")
		));
	}
}
