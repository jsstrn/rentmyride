<?php
class Car extends AppModel {

	public $validate = array(
		'license_plate' => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'allowEmpty' => 'false',
				'required' => 'true',
				'message' => 'Only letters and numbers allowed.',
				'last' => 'false'
				)
			), 
		'brand' => array(
			'rule' => 'alphaNumeric',
			'allowEmpty' => 'false',
			'required' => 'true',
			'message' => 'Only letters and numbers allowed.',
			'last' => 'false'
			), 
		'model' => array(
			'rule' => 'alphaNumeric',
			'allowEmpty' => 'false',
			'required' => 'true',
			'message' => 'Only letters and numbers allowed.',
			'last' => 'false'
			), 
		'transmission' => array(
			'valid' => array(
				'rule' => array('inList', array('Automatic', 'Manual')),
				'allowEmpty' => 'false',
				'message' => 'Please select the type of engine.',
				'last' => 'false'
				)
			), 
		'engine_type' => array(
			'valid' => array(
				'rule' => array('inList', array('Petrol', 'Diesel', 'Hybrid')),
				'message' => 'Please select the type of engine.',
				'last' => 'false'
				)
			), 
		'engine_capacity' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber', false),
				'allowEmpty' => 'false',
				'required' => 'true',
				'message' => 'Please enter the engine capacity of the car.',
				'last' => 'true'
				)
			),
		//'image' => array(), //validate proper image format (.jpg, .png, etc)
		);
}
?>