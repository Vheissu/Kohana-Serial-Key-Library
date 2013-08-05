<?php defined('SYSPATH') or die('No direct script access.');

return array(

    // If we no key format is specified, used this one
    'default_format' => 'XXXX-XXXX-LOLL-ROFL',

    // We can construct formatted keys by specifying a character to replace
    'replace_char' => 'X',

    // Should all letters in generated key be capitals only?
    'all_caps' => TRUE,

    // Force generated key to only use lowercase letters
    'all_lowercase' => FALSE,

    // Should the generated key only contain numeric values?
    'numeric_only' => FALSE,

);
