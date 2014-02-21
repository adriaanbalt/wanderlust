<?php

class ContactModel extends Model {

	protected $table = 'contact';

	public function telephone()
	{
		return $this->telephone;
	}

	public function fax()
	{
		return $this->fax;
	}

	public function email()
	{
		return $this->email;
	}

	public function address()
	{
		return $this->address;
	}

}


/*
$table->string('telephone');
$table->string('fax');
$table->string('email');
$table->string('address');
*/