# theming-with-timber
Creating a theme with timber wordpress plugin.

Actually i'm using @jarednova timber plugin to develop a wordpress theme.

I've just replaced the all the files in the Timber-Starter-Theme with mine. And only created pages and added them to the menu ofwhich i managed to 
loop through from the header in the base.twig file.

However, i've encountered a timber Warning: 
call_user_func_array() expects parameter 1 to be a valid callback, no array or string given in C:\xampp\htdocs\marine\wordpress\wp-content\plugins\timber-library\lib\Twig.php on line 268

...will update after debugging.

Debugged the warning error by using this help from stackoverflow: 
https://stackoverflow.com/questions/43263238/warning-call-user-func-array-expects-parameter-1-to-be-a-valid-callback-timb

Done some template refactor just to improve the structure of the front-end and better readability.

All pages conveted to Twig templates. 
