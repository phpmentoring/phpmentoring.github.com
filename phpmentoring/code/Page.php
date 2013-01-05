<?php
class Page extends SiteTree {
	public static $has_many = array(
		"FragmentMenu" => "FragmentLink"
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->addFieldToTab("Root.NavMenu", new GridField("FragmentMenu", "FragmentMenu", $this->FragmentMenu(), new GridFieldConfig_RelationEditor()));
		
		return $fields;
	}
}
class Page_Controller extends ContentController {

}
