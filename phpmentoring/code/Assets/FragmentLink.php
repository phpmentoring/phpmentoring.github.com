<?php
class FragmentLink extends DataObject {
	public static $db = array(
		"Fragment" => "Text",
		"Title" => "Text"
	);
	
	public static $has_one = array(
		"Page" => "Page"
	);
	
	public function getCMSFields() {
		$fields = new FieldList(new TabSet("Root"));
		
		$fields->addFieldsToTab("Root.Main", array(
			new TextField("Fragment"),
			new TextField("Title")
		));
		
		return $fields;
	}
}
