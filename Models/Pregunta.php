<?php
require_once('conexion.php');

class Pregunta extends conexion{
	
	private $IdPreguntas;
	private $Pregunta ;
        private $Descripcion;
        private $Fecha;
        private $Imagen;
        private $Tema;
        private $Usuario;



        /* Setters and Getters*/
        
        public function getIdPreguntas() {
            return $this->IdPreguntas;
        }

        public function getPregunta() {
            return $this->Pregunta;
        }

        public function getDescripcion() {
            return $this->Descripcion;
        }

        public function getFecha() {
            return $this->Fecha;
        }

        public function getImagen() {
            return $this->Imagen;
        }

        public function getTema() {
            return $this->Tema;
        }

        public function getUsuario() {
            return $this->Usuario;
        }

        public function setIdPreguntas($IdPreguntas) {
            $this->IdPreguntas = $IdPreguntas;
        }

        public function setPregunta($Pregunta) {
            $this->Pregunta = $Pregunta;
        }

        public function setDescripcion($Descripcion) {
            $this->Descripcion = $Descripcion;
        }

        public function setFecha($Fecha) {
            $this->Fecha = $Fecha;
        }

        public function setImagen($Imagen) {
            $this->Imagen = $Imagen;
        }

        public function setTema($Tema) {
            $this->Tema = $Tema;
        }

        public function setUsuario($Usuario) {
            $this->Usuario = $Usuario;
        }

                                
         function __destruct() {
        $this->Disconnect();
    }

	public function __construct($preg=array()){
        parent::__construct();
		if(count($preg)>1){
			foreach ($preg as $campo=>$valor){
                $this->$campo = $valor;
			}
		}else {
			$this->Pregunta = "";
                        $this->Descripcion = "";
                        $this->Fecha = "";
                        $this->Imagen = "";
                        $this->Tema = "";
                        $this->Usuario = "";
			
			
		}
    }

    public function insertar(){
        $this->insertRow("INSERT INTO preguntas
            VALUES ('NULL', ?, ?, ?, ?, ?, ?)", array( 
                $this->Pregunta,
                $this->Descripcion,
                $this->Fecha,
                $this->Imagen,
                $this->Tema,
                $this->Usuario
                
               )
        );
		$this->Disconnect();
    }

    public function editar(){
		$arrArch = (array) $this;
		$this->updateRow("UPDATE preguntas SET  Pregunta = ?, Descripcion= ?, Fecha = ?, Imagen = ?, Tema_IdTema = ?, Usuarios_IdUsuarios = ? WHERE IdPreguntas = ?", array(
                $this->Pregunta,
                $this->Descripcion,
                $this->Fecha,
                $this->Imagen,
                $this->Tema,
                $this->Usuario,
            $this->IdPreguntas
		));
		$this->Disconnect();
    }
    public static function getAll(){
		return Archivo::buscar("SELECT * FROM preguntas",array());
    }
    
	public static function buscar($query, $param){
        $arrArch = array();
        $tmp = new Pregunta();
        $getrows = $tmp->getRows($query, $param);
        
        foreach ($getrows as $valor) {
            $preg = new Pregunta();
            $preg->IdPreguntas = $valor['IdPreguntas'];
            $preg->Pregunta = $valor['Pregunta'];
            $preg->Descripcion = $valor['Descripcion'];
            $preg->Fecha = $valor['Fecha'];
            $preg->Imagen = $valor['Imagen'];
            $preg->Tema = $valor['Tema_IdTema'];
            $preg->Descripcion = $valor['Descripcion'];
            
            array_push($arrArch, $us);
        }
        $tmp->Disconnect();
        return $arrArch;
    }

    public function actualizar($query, $param){
        $arrArch = array();
        $tmp = new Archivo();
        $this->updateRow($query, $param);	
        
        $tmp->Disconnect();        
        return $arrArch;

    }

    public function eliminar(){
        return $this->IdPreguntas;
    }

    public static function buscarForId($id){
		if ($id > 0){
			$preg = new Archivo();
			$getrow = $us->getRow("SELECT * FROM archivos WHERE IdPreguntas =?", array($id));
			$preg->IdPreguntas = $getrow['IdPreguntas'];
			$preg->Pregunta = $getrow['Pregunta'];
                        $preg->Descripcion = $getrow['Descripcion_IdDescripcion'];
			
			
			
			$preg->Disconnect();
			return $preg;
		}else{
			return NULL;
		}
		$this->Disconnect();
    }
    
    
    

}
?>
