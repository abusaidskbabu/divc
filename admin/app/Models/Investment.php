<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class investment extends Sximo  {
	
	protected $table = 'tb_investment';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_investment.* FROM tb_investment  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_investment.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
