<?php
        class Student{
            private $name;
            private $id;
            private $batch;
            public function __construct($_name,$_id,$_batch){
                $this->name=$_name;
                $this->id=$_id;
                $this->batch=$_batch;
                //echo $_name;
            }

            function result(){
                file_put_contents("storing.txt",$this->st(),FILE_APPEND);
            }
            function st(){
                return $this->name.";".$this->id.";".$this->batch.PHP_EOL;
            }
            static function printResult(){
                // $students=file("storing.txt");
                // echo "<table>
                //              <tr> 
                //                 <th>
                //                      NAME 
                //                 </th> 
                //                 <th>ID</th>
                //                 <th>Batch</th>   
                //              </tr>
                       
                //     ";
                $students=file("storing.txt");
                echo "<table>
                    <tr id='row'>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Batch</th>
                    </tr>";


                
                foreach($students as $student){
                        list($name,$id,$batch)=explode(";",trim($student));
                            echo "
                                    <tr> 
                                <th>
                                    $name
                                </th> 
                                <th>$id</th>
                                <th>$batch</th>   
                             </tr>";

                             
                            }
                            echo "</table>";
                
            }
        }

?>