<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class contact extends Sximo  {
	
	protected $table = 'tb_contact';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_contact.* FROM tb_contact  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_contact.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
