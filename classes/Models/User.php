<?php

namespace Models;

use Models\Db;

/**
  * Class User
  * 
  */
 class User extends UserEntity
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function select()
 	{
 		$stmt = Db::prepare( "SELECT 'something' ;" ) ;
		$stmt->execute( ) ;
		var_dump ( $stmt->fetchAll( ) ) ;
		$stmt->closeCursor( ) ;
 	}

 	public function add($data)
 	{
 		$stmt = Db::prepare( "SELECT 'something' ;" ) ;
		$stmt->execute( ) ;
		var_dump ( $stmt->fetchAll( ) ) ;
		$stmt->closeCursor( ) ;
 	}

 	public function update()
 	{
 		$stmt = Db::prepare( "SELECT 'something' ;" ) ;
		$stmt->execute( ) ;
		var_dump ( $stmt->fetchAll( ) ) ;
		$stmt->closeCursor( ) ;
 	}

 	public function delete()
 	{
 		$stmt = Db::prepare ( "SELECT 'something' ;" ) ;
		$stmt->execute( ) ;
		var_dump ( $stmt->fetchAll( ) ) ;
		$stmt->closeCursor( ) ;
 	}


 }