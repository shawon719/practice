<?php
    class Student{
        private $name;
        private $id;
        private $phone;

         public function __construct($_name,$_id,$_phone) {
            $this->name = $_name;
            $this->id = $_id;
            $this->phone = $_phone;
            //echo $_name;
        }
        function info(){
            file_put_contents("data.txt",$this->in(),FILE_APPEND);
        }
        function in(){
            return $this->name.";".$this->id.";".$this->phone.PHP_EOL;
         }
         static function showInfo(){
            $students=file("data.txt");
            echo "<table>
            <tr id='row'>
                <th>Name</th>
                <th>ID</th>
                <th>phone</th>
            </tr>";
                foreach($students as $student){
                    list($name,$id,$phone)=explode(";",trim($student));
                    echo "
                                    <tr> 
                                <th>
                                    $name
                                </th> 
                                <th>$id</th>
                                <th>$phone</th>   
                             </tr>";

                             
                    }
                         echo "</table>";
        }
    }
    
?>