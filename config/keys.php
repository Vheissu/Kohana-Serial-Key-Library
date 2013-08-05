<?php defined('SYSPATH') or die('No direct script access.');

return array(

    // If we no key format is specified, used this one
    'keys.default_format' => 'XXXX-XXXX-LOLL-ROFL',

    // We can construct formatted keys by specifying a character to replace
    'keys.replace_char' => 'X',

    // Should all letters in generated key be capitals only?
    'keys.all_caps' => TRUE,

    // Force generated key to only use lowercase letters
    'keys.all_lowercase' => FALSE,

    // Should the generated key only contain numeric values?
    'keys.numeric_only' => FALSE,

);
