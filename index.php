<?php include "inc/header.php";?>
    
    <div class="para">
      <?php
//      public
//      private
//      protected

      class  UserData{
            public $user;
            public $userid;
            protected $age = 18;
            
            
            function __construct($userName, $userId){
                $this->user = $userName;
                $this->userid =$userId;
           }
             
            public function display(){
                 echo "User Name {$this->user} and user Id:{$this->userid}<br>";
                 echo $this->age." insete class<br>";
             }
        }
        
        class Admit extends UserData{
            public $level;
             public  function display(){
                 echo "User Name {$this->user} and user Id:{$this->userid} and user level {$this->level}<br>";
                 echo $this->age." insete class<br>";
             }
        }
         
         $name = "Md.Rauysul kobir";
         $id = 12345;
         $ur = new UserData($name, $id);
         $ur->display();
         echo $ur->age;
         
         $ab = new Admit($name, $id);
         $ab ->level = "Md.Akram miya";
         $ab->display()
       
      ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>