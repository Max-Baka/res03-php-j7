<?php 
    class User {

    private int $id;
    private string $first_name;
    private string $las_name;
    private string $email;
    private string $password;
    
   
    private function __construct(string $firstName, string $lastName, string $email)
    {
        $this->id = null;
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
    
     public function getId() : int
    {
     return $this->id;
    }

    public function setId(int $id)
    {
    $this->id = $id;
    }

    public function getFirstName() : string
    {
        return $this->first_name;
    }

    public function setFirstName(string $firstName) : void
    {
        $this->first_name = $first_name;
    }

    public function getLastName() : string
    {
       return $this->last_name;
    }
 
    public function setLastName(string $last_name) : void
    {
        $this->last_name = $last_name;
    }

    public function getEmail() : string
    {
       return $this->email;
    }
 
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getFullName() : string {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function getPassword() : string 
    {
        return $this->password;
    }
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
    

 }
 ?>