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
           $row = $result[0];

           $this->setIdusuario($row['idusuario']);
           $this->setDesclogin($row['desclogin']);
           $this->setDessenha($row['dessenha']);
           $this->setDtcadastro($row['dtcadastro']);
       }
    }
}

?>