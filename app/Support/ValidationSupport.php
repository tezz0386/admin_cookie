<?php 

namespace App\Support;
use Illuminate\Support\Facades\Validator;

class ValidationSupport
{
	protected $validator;
	function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}
	public function validation()
	{
		return $this->validator->make($request->all(), [
            'title' => 'required|unique:categories',
        ], $message=[
            'required'=>'The Title Fiels Could not be empty',
            'unique'=>'The Title Field must be unique or you can view on trashed file',
        ]);
	}
}

 ?>