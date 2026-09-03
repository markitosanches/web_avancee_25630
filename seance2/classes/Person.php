<?php
class Person{
    private string $name;
    public string $address;
    public string $zipCode = "H1H 1H1";
    public string $phone;
    public string $email;
    public int $id;

    public function __construct(string $name = '',int $id = 0){
            $this->name = $name;
            $this->id = $id;
    }

    public function __destruct()
    {
       echo "Salut je suis $this->name et mon adresse est le $this->address<br>";
    }

    public function setName(string $name):void{
        $this->name = $name;
    }

    public function getName(){
        return "Salut $this->name";
    }

    public function setCoord(string $address = "", string $zipCode = "", string $phone = "", string $email = ""):void{
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getCard():string{
        $return = "<h2>".$this->getName()."</h2>";
        $return = $return."<hr/><p><strong>Address: </strong>$this->address<p><p><strong>Phone</strong>$this->phone<p><p><strong>email:</strong>$this->email<p>";
        return $return;

    }
}
?>