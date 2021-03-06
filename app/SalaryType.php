<?php
namespace App;
use Eloquent;

class SalaryType extends Eloquent {

	protected $fillable = [
							'head',
							'salary_type'
						];
	protected $primaryKey = 'id';
	protected $table = 'salary_types';

    public function payroll()
    {
        return $this->hasMany('App\Payroll'); 
    }
}
