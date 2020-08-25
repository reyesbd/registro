<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('v_registro');
	}
	
	public function alta(){
		helper(['form','url']);
		
		$validation = \Config\Services::validation();

		$ok = $this->validate([
			'nombre' => [
				'label' => 'Nombre',
				'rules' => 'required',
				'errors'=>[
                    'required' => 'Este campo es requerido'
				]
			],
			'ntrol' =>[
				'label' => 'Número de control',
				'rules' => 'required|numeric|max_length[8]|min_length[8]',
				'errors'=>[
					'required' => 'Este campo es requerido',
					'valid_email' => 'No es un número de control  válido',
					'max_length' => 'solo 8 digitos',
					'min_length' => 'solo 8 digitos',
					'numeric'   =>	'Solo números'			
				],
			],
			'sem' =>[
				'label' => 'Semestre',
				'rules' => 'required|numeric|greater_than[0]|less_than[13]',
				'errors'=>[
					'required'     => 'Este campo es requerido',
					'valid_email'  => 'No es un semestre válido',
					'numeric'      => 'Solo números',
					'greater_than' => 'Debe ser mayor que 1',
					'less_than' => 'Debe ser menor o igual a 12',
				]
		    ]			
		]);

       if (!$ok){
		   return view('v_registro',['validation'=>$this->validator]);
	   }
	   else{
		   echo "Gracias!!!  Registro realizado";
	   }

	}	
	
	
	
	
	
	//--------------------------------------------------------------------

}
