<?php


if (isset($_POST["action"]) and $_POST["action"]=="cmd_mu_high_plus")
  {
  if(isset($_POST["input_id"]) and !empty($_POST["input_id"]))
    {
      $update = new adatbazis();
      $update->update_ugro_plus($_POST["input_id"]);
    }
}


if (isset($_POST["action"]) and $_POST["action"]=="cmd_mu_high_minus")
  {
  if(isset($_POST["input_id"]) and !empty($_POST["input_id"]))
    {
      $update = new adatbazis();
      $update->update_ugro_minus($_POST["input_id"]);
    }
}



class adatbazis{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "berendibarnabas";	
    public $conn = NULL;
    public $sql = NULL;
    public $result = NULL;
    public $row = NULL;


    public function __construct(){ $this->kapcsolodas(); }
    public function __destruct(){ $this->kapcsolatbontas(); }

    public function kapcsolodas(){
    // Create connection
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
    }

    $this->conn->query("SET NAMES UTF8;");		
    }

    public function kapcsolatbontas(){
    $this->conn->close();
    }



    public function ugro_felvetel($ugro_magassag,$ugro_neve, $ugro_nemzetig, $ugro_datum,$ugro_helyszin){
    
    $this->sql = "INSERT INTO `magasugrasok`
            (
                `mu_id`,
                `mu_magassag`,
                `mu_atleta`,
                `mu_nemzetiseg`,
                `mu_datum`
                `mu_helyszin`
            )
            VALUES
            (
                NULL,
                '$ugro_magassag', 
                '$ugro_neve',
                '$ugro_nemzetig', 
                '$ugro_datum',
                '$ugro_helyszin'
            );";
    var_dump($this->sql);
    if ($this->conn->query($this->sql)){
        echo "<p>Sikeres felvétel!</p>";
    } else {
        echo "<p>Sikertelen felvétel!</p>";
    }
    }



    public function ugro_lista(){
        $this->sql = "SELECT `mu_id`, `mu_magassag`, `mu_atleta`, `mu_nemzetiseg`, `mu_datum`, `mu_helyszin` FROM `magasugrasok` WHERE 1";
        $this->result = $this->conn->query($this->sql);
        
        if($this->result->num_rows>0)
        {
                echo "<div class='row'>";
            while($this->row = $this->result->fetch_assoc())
            {
                echo "<div  class='column'  >";
                echo   "<h3>" . $this->row["mu_magassag"] . " </h3><br><p>" . $this->row["mu_atleta"] . "(" . $this->row["mu_nemzetiseg"] . ")<br><i>" . $this->row["mu_datum"] . "</i><br>" . $this->row["mu_helyszin"] . " </p>";
                echo "</div>";
            }echo "</div>";
        }
        else
        {
            echo "0 result";
        }


    }

    public function modosito_lista(){
        $this->sql = "SELECT `mu_id`, `mu_magassag`, `mu_atleta`, `mu_nemzetiseg`, `mu_datum`, `mu_helyszin` FROM `magasugrasok` WHERE 1";
        $this->result = $this->conn->query($this->sql);
        
        if($this->result->num_rows>0)
        {
                echo "<div class='row'>";
            while($this->row = $this->result->fetch_assoc())
            {
                echo "<div  class='column'  >";
                echo   "<h3>" . $this->row["mu_magassag"] . " </h3><br><p>" . $this->row["mu_atleta"] . "(" . $this->row["mu_nemzetiseg"] . ")<br><i>" . $this->row["mu_datum"] . "</i><br>" . $this->row["mu_helyszin"] . " </p>";
                echo "<form method='POST' style='display: inline;'>
                    <input type='hidden' name='input_id' value='" . $this->row["id"]. "'>
                    <input type='hidden' name='action' value='cmd_mu_high_plus'>
                    <input type='submit' value='+'>
                    </form>";				
                echo $this->row["mu_magassag"];
                echo "<form method='POST' style='display: inline;'>
                    <input type='hidden' name='input_id' value='" . $this->row["id"]. "'>
                    <input type='hidden' name='action' value='cmd_mu_high_minus'>
                    <input type='submit' value='-'>
                    </form>";				


                echo "</div>";
            }echo "</div>";
        }
        else
        {
            echo "0 result";
        }


    }



    public function update_ugro_plus($id){
    $this->sql = "UPDATE 
                ugro
            SET	
                mu_magassag = mu_magassag +0.01            
            WHERE 
                mu_id = $id";
    var_dump($this->sql);
    if ($this->conn->query($this->sql)){
        echo "<p>Sikeres adatmódosítás!</p>";
    } else {
        echo "<p>Sikertelen adatmódosítás!</p>";
    }		


    }
    public function update_ugro_minus($id){
        $this->sql = "UPDATE 
                ugro
                SET	
                mu_magassag = mu_magassag - 0.01             
                WHERE 
                mu_id = $id";
        var_dump($this->sql);
        if ($this->conn->query($this->sql)){
        echo "<p>Sikeres adatmódosítás!</p>";
        } else {
        echo "<p>Sikertelen adatmódosítás!</p>";
        }		
    }


    public function ugro_torles($id){
    $this->sql = "DELETE FROM `magasugrasok` WHERE `mu_id` = $id";
    var_dump($this->sql);
    if ($this->conn->query($this->sql)){
        echo "<p>Sikeres törlés!</p>";
    } else {
        echo "<p>Sikertelen törlés!</p>";
    }		
    }

}

?>