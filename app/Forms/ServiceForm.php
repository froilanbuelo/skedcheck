<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ServiceForm extends Form
{
    public function buildForm()
    {
    	$this
    		->add('name','text')
    		->add('description','textarea')
    		//->add('image','text')
    		->add('category','text')
    		->add('duration_hours','text')
    		->add('duration_minutes','text')
    		->add('pricing_type','text')
    		->add('pricing_bill_at','text')
    		->add('pricing_amount','text')
    		->add('buffer_before','text')
    		->add('buffer_after','text')
    		->add('maximum_schedule_notice_hours','text')
    		->add('maximum_per_day','text')
    		->add('active','checkbox')
    	;
    }
}
