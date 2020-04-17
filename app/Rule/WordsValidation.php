<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class WordsValidation implements Rule
{
  
    public function __Construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value) >= 2;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Task title should contain at least 3 words';
    }
}
