<?php

namespace App\Observers;

use Illuminate\Support\Str;

class StrObserver
{
    /**
     * Create a new Str instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Convert a string to snake case.
     *
     * @param  string  $value
     * @param  string  $delimiter
     * @return string
     */
    public function snake($value, $delimiter = '_')
    {
        return Str::snake($value, $delimiter);
    }

    /**
     * Convert a string to camel case.
     *
     * @param  string  $value
     * @return string
     */
    public function camel($value)
    {
        return Str::camel($value);
    }

    /**
     * Convert the first character of a string to uppercase.
     *
     * @param  string  $value
     * @return string
     */
    public function capitalize($value)
    {
        return Str::ucfirst($value);
    }

    /**
     * Convert the first character of a string to lowercase.
     *
     * @param  string  $value
     * @return string
     */
    public function uncapitalize($value)
    {
        return Str::lcfirst($value);
    }

    // Add any other string processing methods you need here...
}
