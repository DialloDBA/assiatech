<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidDomain implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $domain = explode('@', $value)[1];
        if(!checkdnsrr($domain, 'MX')){
            $fail('Le domaine de l\'adresse e-mail n\'est pas valide.');
        }
    }
}
