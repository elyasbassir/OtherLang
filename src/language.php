<?php

namespace elyasbassir\OtherLang;


class language
{
    /*
    variable $response response execute code that language.
    */
    private static $response, $language, $name_file, $code;
    private static array $data = [];

    public function delete_file()
    {
        $address = __DIR__ . '/execution/' . self::$name_file;
        if (file_exists($address)) {
            unlink($address); //delete file
        }
        return true;
    }

    /*
this function can execute python code
*/
    public function python(string $code): Object
    {
        self::$language = "python";
        self::$code = $code;
        return $this;
    }

    /*
    this function run code cpp language
    */

    private static function create_file($file_name, $code): void
    {
        $file = fopen(__DIR__ . "/execution/$file_name", 'w');
        self::$name_file = $file_name;
        fwrite($file, $code);
    }


    /*
this function delete all file from folder execution
    */


    /*
this function show variable $response  which inside that is response execution code
    */
    public function response()
    {
        switch (self::$language) {
            case "python":
                self::create_file("main.py", self::$code);
                self::$response = shell_exec("python " . __DIR__ . "/execution/" . self::$name_file . " '" . json_encode(self::$data) . "' 2>&1");
                $this->delete_file();
                break;
        }
        return self::$response;
    }
}
