Kohana Serial Key Library
=========================

Generate unique serial keys using this simple module for Kohana 3.3. Although simple, it does allow for the creation of unique serial keys with formats.

== Install ==
Clone or download repository and put the files into your module directory, preferably inside of a folder called "keys". Then in your application/bootstrap.php file, load the keys module and presto.

== Usage ==
To generate a key simply try $serial = Keys::Generate(); echo $serial; without any arguments to get a unique 16 character serial key generated right before your eyes.

== Config ==
In the config/keys.php file you will notice a very minimal amount of options which are used as defaults when the generate function is not supplied with any arguments. The default format is the default format of the string. The replace_char option value is the placeholder value to find and replace in your format strings (by default it's "X" without the quotes).
