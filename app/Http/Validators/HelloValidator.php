<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends validator
{
    public function validateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}

?>