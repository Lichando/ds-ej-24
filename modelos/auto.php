<?php

class auto{
    private $marca;
    private $modelo; 
    private $version;  
    private $anio;

    public function getmarca()
    {
      return $this->marca;
    }
    public function setmarca($marca)
    {
        $this->marca = $marca;
    }
    public function getmodelo()
    {
      return $this->modelo;
    }
    public function setmodelo($modelo)
    {
        $this->modelo= $modelo;
    }
     public function getversion()
    {
      return $this->version;
    }
     public function setversion($version)
    {
        $this->version=$version;
    }
       public function getanio()
    {
      return $this->anio;
    }
     public function setanio($anio)
    {
        $this->anio= $anio;
    }
    public function mostrarDatos(){
        echo '•Marca: ' . $this->getmarca() . '<br>';
        echo '•Modelo: ' . $this->getmodelo() . '<br>';
        echo '•Version: ' . $this->getversion() . '<br>';
        echo '•Año: ' . $this->getanio() . '<br>';
    }


}