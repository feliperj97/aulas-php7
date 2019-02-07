<?php

class Usuario{
    private $idusuario;
    private $desclogin;
    private $dessenha;
    private $dtcadastro;

    /**
     * Get the value of idusuario
     */ 
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */ 
    public function setIdusuario($value)
    {
        $this->idusuario = $value;

        return $this;
    }

    /**
     * Get the value of desclogin
     */ 
    public function getDesclogin()
    {
        return $this->desclogin;
    }

    /**
     * Set the value of desclogin
     *
     * @return  self
     */ 
    public function setDesclogin($value)
    {
        $this->desclogin = $value;

        return $this;
    }

    /**
     * Get the value of dessenha
     */ 
    public function getDessenha()
    {
        return $this->dessenha;
    }

    /**
     * Set the value of dessenha
     *
     * @return  self
     */ 
    public function setDessenha($value)
    {
        $this->dessenha = $value;

        return $this;
    }

    /**
     * Get the value of dtcadastro
     */ 
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    /**
     * Set the value of dtcadastro
     *
     * @return  self
     */ 
    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;

        return $this;
    }

    public function loadById($id){
        $sql = new SQL;
       $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
           ":ID"=>$id
       ));

       if(isset($result[0])){
            $this->setData($results[0]);
       }
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "desclogin"=>$this->getDesclogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()
        ));
    }

    public static function getList(){
        $sql = new SQL();
        return  $sql->select("SELECT * FROM tb_usuarios");
    }

    public static function search($login){
        $sql = new SQL();
        return  $sql->select("SELECT * FROM tb_usuarios WHERE desclogin LIKE :SEARCH ORDER BY desclogin", array(
            ":SEARCH"=>"%" . $login . "%"
        ));
    }

    public function login($user, $senha){

        $sql = new SQL;
       $result = $sql->select("SELECT * FROM tb_usuarios WHERE desclogin = :LOGIN and dessenha = :SENHA", array(
           ":LOGIN"=>$user,
           ":SENHA"=>$senha
       ));

       if(isset($result[0])){
        $this->setData($results[0]);
          
       }

       else{
           throw new Exception("Login e/ou senha inválidos");
           
       }

    }

    public function setData($data){
         $this->setIdusuario($data['idusuario']);
         $this->setDesclogin($data['desclogin']);
         $this->setDessenha($data['dessenha']);
         $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(

            ':LOGIN'->$this->getDesclogin(),
            ':PASSWORD'=>$this->getDessenha()

        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }
}

?>