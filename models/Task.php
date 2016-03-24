<?php
// this is a Model
class Task
{
	// This is a private member variable
	private $message='Hello Developers';

	// This is a list of all team members
	private $team = array(
		"Don" => "Don",
		"Ben" => "Ben",
		"Magda" => "Magda",
		"Dave B" => "Dave B",
		"Dave W" => "Dave W",
		"Adam" => "Adam",
		);

	// This is a simple class method to return the value of $message
	public function getMessage() {
		return $this->message;
	}

	// This is Dave W trying to do something
	public function getTeam() {
		return $this->team;
	}
}