<?php
        //step one
        class Student{
                private $name;
                private $id;
             public $email;
                //private static $file_path="text.txt";

                function __construct($_id,$_name,$_email){
                    $this->name=$_name;
                    $this->id=$_id;
                    $this->email=$_email;
                    //echo $_id;
                    //echo $_name;
                    //echo $_email;
                }

                public function save(){
                    //$students=file(self::$file_path);
                    //file_put_contents(self::$file_path,$this->sv(),FILE_APPEND);
                    file_put_contents("text.txt",$this->sv(),FILE_APPEND);
                }
                public function sv(){
                    return $this->id."-".$this->name."-".$this->email.PHP_EOL;
                    //return $this->id.$this->name;
                }

                public static function display_students(){
                    //$students=file(self::$file_path);
                    $students=file("text.txt");
                    //print_r($students);
                    //echo "<br>";
                    echo "<table><b>ID | NAME  |  Email</b></table>";
                    foreach($students as $student){
                        list($id,$name,$email)=explode("-",trim($student));
                        echo "$id | $name | $email<br>";
                    }
                }
        }

?>