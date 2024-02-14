<?php

namespace elyasbassir\OtherLang;



class language
{
    /*
    variable $response response execute code that language.
    */
    private static $response, $language, $name_file,$code;
    private static array $data = [];
    /*
this function can execute python code
*/
    public function python(string $code): Object
    {
        self::$language = "python";
        self::$code = $code;
        return $this;
    }
    public function send_data(array $data): Object
    {
        self::$data = $data;
        return $this;
    }

    private static function create_file($file_name, $code): void
    {
        $file = fopen(__DIR__ . "/execution/$file_name", 'w');
        self::$name_file = $file_name;
        fwrite($file, $code);
    }


    /*
this function delete all file from folder execution
    */
    public function __destruct()
    {
        // unlink(__DIR__ . '/execution/' . self::$name_file); //delete file
        return true;
    }
    /*
this function show variable $response  which inside that is response execution code
    */
    public function response()
    {
        switch (self::$language) {
            case "python":
                if(count(self::$data) > 0){
                    self::create_file("main.py", <<<EOT
                    import argparse
                    import json
                    import sys

                    laravel = {}
                    parser = argparse.ArgumentParser(description="Process dynamic input data")
                    parser.add_argument("data", help="JSON data as input", type=str)
                    args = parser.parse_args()
                    data = json.loads(args.data)
                    for key, value in data.items():
                        laravel[key] = value


                    EOT . self::$code);
                }else{
                    self::create_file("main.py",self::$code);
                }
                self::$response = shell_exec("python " . __DIR__ . "/execution/" . self::$name_file . " '" . json_encode(self::$data) . "' 2>&1");

                break;
        }
        return self::$response;
    }
}
