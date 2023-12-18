<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

class SquareImage implements Rule
{
    /**
     * Indicates whether the rule should be implicit.
     *
     * @var bool
     */
    public $implicit = true;

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        if (!$value instanceof UploadedFile || !$value->isValid()) {
            return false;
        }

        $imageSize = getimagesize($value->getPathname());
        if (!$imageSize) {
            return false;
        }

        [$width, $height] = $imageSize;

        return $width === $height;
    }

    public function message()
    {
        return 'The image must be a square (1:1 aspect ratio).';
    }
}
