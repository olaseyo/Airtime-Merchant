<?php

namespace App\Repositories\User;

interface UserRepository{
	 
	public function paginate($perPage = 20, $columns = array('*'));
	  
	public function getAll();
	
	public function getById($id);
	
	public function getByAttribute($attribute, $value, $columns = array('*'));
	
	public function create(array $attribute);
	
	public function update($id,array $attribute);
	
	public function createToken();
	
	/* public function getBalance($account_id);
	
	public function validateToken($account_id); */
	
	public function delete($id);
	
}

