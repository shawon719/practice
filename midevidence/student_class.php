<?php
        class Student_class{
                private $name;
                private $id;
                private $batch;
                private static $file_path="data.txt";

                public function __construct($_name,$_id,$_batch){
                    $this->name=$_name;
                    $this->id=$_id;
                    $this->batch=$_batch;
                    //echo $_name;
                    //echo $_id;    
                    //echo $_batch;
                }

                public function store(){
                        file_put_contents(self::$file_path,$this->sv(),FILE_APPEND);
                        //echo "data goes";
                }
                public function sv(){
                        return $this->name.";".$this->id.";".$this->batch.PHP_EOL;
                }
                static function display(){
                        $students=file(self::$file_path);
                        echo"<div class='file_center'>";
                        echo "Name | ID | Batch <br>";
                        echo"</div><br>";
                        // for($i=0; $i< count($students); $i++){
                        //         list($name,$id,$batch)=explode("--",trim($students[$i]));
                        //         echo "$name | $id | $batch <br>";
                        // }

                        foreach($students as $student){
                                  list($id,$name,$batch)=explode(";",trim($student));
                               // echo "$name | $id | $batch <br>";
                               echo "
                               <table>
                                        <tr>
                                                <td>$id</td>
                                                <td class='name_value'>$name</td>
                                                <td>$batch</td>
                                        </tr>
                                </table>";

                               
                        }
                }

        }

?>