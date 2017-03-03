<?php
require_once("model/rol.model.php");

Class RolController {
	private $Rmodel;

	public function __CONSTRUCT()
	{
		$this->Rmodel = new RolModel();
	}
	public function mainPage()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_rol/main_rol.php");
		require_once("views/include/footer.php");
	}
	public function viewCreate()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_rol/inser_rol.php");
		require_once("views/include/footer.php");
	}

	public function create(){
		    $data = $_POST["data"];
            $result = $this->Rmodel->createRol($data);
            header("Location: index.php?c=rol&msn=$result");
	}
	public function read()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_rol/read_rol.php");
		require_once("views/include/footer.php");
	}

	public function update(){
		  $field = $_GET["rcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_rol/update_rol.php';
          require_once 'views/include/footer.php';

	}
	public function updateData(){
        	$data = $_POST["data"];<?php

Class RolModel {
	private $pdo;

	function __CONSTRUCT()
	{
		try {
			$this->pdo = DataBase::connect();
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOExepcion $e){
			die($e->getMessage()."".$e->getLine()."".$e->getFile());
		}
	}
	public function createRol($data){
            try {
                $sql = "INSERT INTO mzscann_roles VALUES('',?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Rol guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
    public function readRol(){
        try {
            $sql = "SELECT * FROM mzscann_roles ORDER BY rol_codigo";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_BOTH);
            return $result;
        }catch (PDOException $e) {
            die($e->getMessage()."".$e->getLine()."".$e->getFile());
        }
    }
    public function readRolByCode($field){
            try {
                $sql="SELECT * FROM mzscann_roles WHERE rol_codigo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }
    public function updateRol($data){
            try {
                $sql="UPDATE mzscann_roles SET rol_nombre = ? rol_descripcion = ?  rol_fech_creacion = ? WHERE rol_codigo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

    public function deleteRol($field){
            try {
                $sql = "DELETE FROM mzscann_roles WHERE rol_codigo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Eliminado correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

    public function __DESTRUCT(){

            DataBase::disconnect();
        }
}

?>
            $result = $this->Rmodel->updateRol($data);
            header("Location: index.php?c=rol&msn=$result");
    }
    public function delete(){
            $data = $_GET["rcode"];
            $result = $this->Rmodel->deleteRol($data);
            header("Location: index.php?c=rol&msn=$result");
        }
}

?>
