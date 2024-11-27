<?php
    class StudentData{
        private $id;
        private $name;

       // static private $file_path="";

        public function __construct($_id,$_name){
            $this->id=$_id;
            $this->name=$_name;
            //echo $_name;
        }

        public function saveData(){
            file_put_contents("text.txt",$this->sv(),FILE_APPEND);
        }
        public function sv(){
            return $this->id.";".$this->name.PHP_EOL;
        }

        static function showData(){
            $students=file("text.txt");
            echo "<b>ID          ||       Name</b><br>";

            foreach($students as $student){
                list($id,$name)=explode(";",trim($student));
                //echo "$id  ||  $name <br>";
                echo "<table class='showData'>
                        <tr>
                                <td>$id</td>
                                <td>$name</td>
                        </tr>
                </table>";
            }
        }
    }
?>