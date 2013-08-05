<?php defined('SYSPATH') or die('No direct script access.');

class Keys_Core
{
    protected static $_config = array();

    /*
     * Generate a key using a custom format
     *
     * @param string $format        Format of the key, the the character (default is "X") will be replaced
     * @param array $exclude      Serials to check against for uniqueness
     */
    public static function generate($format = NULL, $exclude = array())
    {
        // Have we populated the config array?
        if ( empty(self::$_config) )
        {
            self::$_config = Kohana::$config->load('keys');
        }

        // No format specified? Use the config file default
        if ($format == NULL)
        {
            $format = self::$_config->get("keys.default_format");
        }

        $key                = array();
        $format_length = strlen($format);

        // This do-while-loop generates our key
        do {
            for ($i=0 ; $i < $format_length ; $i++)
            {
                if ( $format[$i] == self::$_config->get('keys.replace_char') )
                {
                    $key[] = Text::Random("distinct", 1);
                }
                else
                {
                    $key[] .= $format[$i];
                }

                if (in_array(implode("",$key), $exclude)) $i--;
            }

        } while( in_array($key, $exclude) );

        return implode("",$key);
    }

}
