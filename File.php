<?php

class File
{
    public $fp; //указатель на открытый файл
    public $file;

    public function __construct($file)
    {
        $this->file=$file;

        //файл существует и доступен для записи
        if (!is_writable($this->file)) {
            echo "Файл $this->file недоступен для записи";
        }

        //устанавливаем метку открытого файла
        $this->fp = fopen($this->file, 'a');
    }

    //закрытие файла
    public function __destruct()
    {
        fclose($this->fp);
    }

    public function writeText($text){
        //Записываем $text в открытый файл.
        if (fwrite($this->fp, $text.PHP_EOL) === FALSE) {
            echo "Не могу произвести запись в файл ($this->file)";
            exit;
        }
    }

}