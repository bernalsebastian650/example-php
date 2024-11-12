<?php
require_once('conexion.php');

class Categoria extends conexion{
	
	private $IdCategoria;
	private $Categoria ;
	

        /* Setters and Getters*/
        public function getIdCategoria() {
            return $this->IdCategoria;
        }

        public function getCategoria() {
            return $this->Categoria;
        }

        public function setIdCategoria($IdCategoria) {
            $this->IdCategoria = $IdCategoria;
        }

        public function setCategoria($Categoria) {
            $this->Categoria = $Categoria;
        }

        
                
         function __destruct() {
        $this->Disconnect();
    }

	public function __construct($cat=array()){
        parent::__construct();
		if(count($cat)>1){
			foreach ($cat as $campo=>$valor){
                $this->$campo = $valor;
			}
		}else {
			$this->Categoria = "";
			
			
		}
    }

    public function insertar(){
        $this->insertRow("INSERT INTO Categoria
            VALUES ('NULL', ?)", array( 
                $this->Categoria,
                
               )
        );
		$this->Disconnect();
    }

    public function editar(){
		$arrCat = (array) $this;
		$this->updateRow("UPDATE Categoria SET  Categoria = ? WHERE IdCategoria = ?", array(
	    $this->Categoria,
            $this->IdCategoria,
		));
		$this->Disconnect();
    }
    public static function getAll(){
		return Categoria::buscar("SELECT * FROM Categoria",array());
    }
    
	public static function buscar($query, $param){
        $arrCat = array();
        $tmp = new Categoria();
        $getrows = $tmp->getRows($query, $param);
        
        foreach ($getrows as $valor) {
            $cat = new Categoria();
            $cat->IdCategoria = $valor['IdCategoria'];
            $cat->Categoria = $valor['Categoria'];
            
            array_push($arrCat, $us);
        }
        $tmp->Disconnect();
        return $arrCat;
    }

    public function actualizar($query, $param){
        $arrCat = array();
        $tmp = new Categoria();
        $this->updateRow($query, $param);	
        
        $tmp->Disconnect();        
        return $arrCat;

    }

    public function eliminar(){
        return $this->IdCategoria;
    }

    public static function buscarForId($id){
		if ($id > 0){
			$cat = new Categoria();
			$getrow = $us->getRow("SELECT * FROM Categoria WHERE IdCategoria =?", array($id));
			$cat->IdCategoria = $getrow['IdCategoria'];
			$cat->Categoria = $getrow['Categoria'];
			
			
			
			$cat->Disconnect();
			return $cat;
		}else{
			return NULL;
		}
		$this->Disconnect();
    }
    
    
    

}
?>
