<?php
// this is a Model
class Task
{
	// This is a private member variable
	private $message='Hello Developers';

	// This is a simple class method to return the value of $message
	public function getMessage() {
		return $this->message;
	}
}