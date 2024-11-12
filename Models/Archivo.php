<?php
require_once('db_abstract_class.php');
require_once('./Tema.php.php');
require_once('./usuario.php.php');

class Archivo extends db_abstract_class{
        private $IdArchivos;
        private $LinkArchivo;
        private $Fecha;	
        private $Tema ="";
        private $Usuario="";
	
        
	/* Setters and Getters*/
        public function getId() {
            return $this->id;
        }

        public function getFecha() {
            return $this->fecha;
        }

        public function getNombreJuego() {
            return $this->nombreJuego;
        }

        public function getHoraPrestamo() {
            return $this->horaPrestamo;
        }

        public function getHoraSalida() {
            return $this->horaSalida;
        }

        private function setId($id) {
            $this->id = $id;
            return $this;
        }

        private function setFecha($fecha) {
            $this->fecha = $fecha;
            return $this;
        }

        private function setNombreJuego($nombreJuego) {
            $this->nombreJuego = $nombreJuego;
            return $this;
        }

        private function setHoraPrestamo($horaPrestamo) {
            $this->horaPrestamo = $horaPrestamo;
            return $this;
        }

        private function setHoraSalida($horaSalida) {
            $this->horaSalida = $horaSalida;
            return $this;
        }
         public function getEquipo() {
            return $this->equipo;
        }

        public function setEquipo($equipo_idEquipo) {
            $this->equipo = $equipo_idEquipo;
        }
        public function getUsuario() {
            return $this->usuarios;
        }

        public function setUsuario($usuarios_idusuarios) {
            $this->usuarios = $usuarios_idusuarios;
        }

        
        
    function __destruct() {
        $this->Disconnect();
    }

	public function __construct($user_data=array()){
        parent::__construct();
		if(count($user_data)>1){
			foreach ($user_data as $campo=>$valor){
                $this->$campo = $valor;
			}
		
    }else{
                        $this->fecha = "";
			$this->nombreJuego = "";
			$this->horaPrestamo= "";
			$this->horaSalida = "";
                        $this->equipo = "";
                        $this->usuarios ="";
		       
        
    }
        }

    public function insertar(){
        $arrPrestamo = (array) $this;
        $this->insertRow("INSERT INTO prestamo
            VALUES ('NULL', ?, ?, ?, ?, ?, ?)", array(  
                $this->fecha,
                $this->nombreJuego,
                $this->horaPrestamo,
                $this->horaSalida,
                $this->equipo,
                $this->usuarios,
                
                
                
            )
        );
        $this->Disconnect();
    }

    public function editar(){
		$arrPrestamo = (array) $this;
		$this->updateRow("UPDATE prestamo SET fecha = ?, nombreJuego = ?, horaPrestamo = ?, horaSalida = ?, equipo_idEquipo = ?, usuarios_idusuarios = ? WHERE idprestamo = ?", array(
                
                $this->fecha,
                $this->nombreJuego,
                $this->horaPrestamo,
                $this->horaSalida,
                $this->equipo,
                $this->usuarios,
                 $this->id,   
             ));
		$this->Disconnect();
    }

     public function eliminar(){
        $arrPrestamo = (array) $this;
        $this->deleteRow("DELETE from prestamo where idprestamo =?", array( 
               $this->id,    
            )
        );
        $this->Disconnect();
    }

    public static function buscarForId($id){
		if ($id > 0){
			$pres = new prestamo();
			$getrow = $pres->getRow("SELECT * FROM prestamo WHERE idprestamo =?", array($id));
			$pres->id = $getrow['idprestamo'];
			$pres->fecha = $getrow['fecha'];
			$pres->nombreJuego = $getrow['nombreJuego'];
                        $pres->horaPrestamo = $getrow['horaPrestamo'];
			$pres->horaSalida = $getrow['horaSalida'];
                        $pres->equipo = equipo::buscarForId($getrow['equipo_idEquipo']); 
                        $pres->usuarios = usuarios::buscarForId($getrow['usuarios_idusuarios']);
			
			
			
			$pres->Disconnect();
			return $pres;
		}else{
			return NULL;
		}
		$this->Disconnect();
    }
	
    public static function getAll(){
		return prestamo::buscar("SELECT * FROM prestamo");
    }
	
	public static function buscar($query){
        $arrPrestamo = array();
        $vive1 = new prestamo();
        $getrows = $vive1->getRows($query);
        
        foreach ($getrows as $valor) {
            $pres = new prestamo ();
            $pres->id = $valor['idprestamo'];
            $pres->fecha= $valor['fecha'];
            $pres->nombreJuego= $valor['nombreJuego'];
            $pres->horaPrestamo = $valor['horaPrestamo'];
            $pres->horaSalida = $valor['horaSalida'];
            
            $pres->equipo = equipo::buscarForId($valor['equipo_idEquipo']); 
            $pres->usuarios = usuarios::buscarForId($valor['usuarios_idusuarios']);
            
            array_push($arrPrestamo, $pres);
        }
        $vive1->Disconnect();
        return $arrPrestamo;
    }

    protected function actualizar($query, $param) {
        
    }

}
?>