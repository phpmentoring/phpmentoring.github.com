<?php
class Person extends DataObject {
	public static $db = array(
		"FirstName" => "Varchar",
		"Surname" => "Varchar",
		"Nickname" => "Varchar",
		"GitHubUser" => "Varchar",
		"MentorDescription" => "Text",
		"ApprenticeDescription" => "Text"
	);
	
	public static $many_many = array(
		"Mentors" => "Person",
		"Apprentices" => "Person"
	);
}
