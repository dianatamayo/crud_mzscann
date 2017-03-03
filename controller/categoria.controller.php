<?php
require_once("model/categoria.model.php");

Class CategoriaController {
	private $Cmodel;

	public function __CONSTRUCT()
	{
		$this->Cmodel = new CategoriaModel();
	}
	public function mainPage()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_categoria/main_categoria.php");
		require_once("views/include/footer.php");
	}
	public function viewCreate()
	{
		require_onc<?php

Class CategoriaModel {
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
	public function createCategoria($data){
            try {
                $sql = "INSERT INTO mzscann_categoria VALUES('',?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1]));

                $msn = "Categoria guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
    public function readCategoria(){
        try {
            $sql = "SELECT * FROM mzscann_categoria ORDER BY categ_codigo";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_BOTH);
            return $result;
        }catch (PDOException $e) {
            die($e->getMessage()."".$e->getLine()."".$e->getFile());
        }
    }
    public function readCategoriaByCode($field){
            try {
                $sql="SELECT * FROM mzscann_categoria WHERE categ_codigo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }
    public function updateCategoria($data){
            try {
                $sql="UPDATE mzscann_categoria SET categ_nombre = ?, categ_imagen = ? WHERE categ_codigo = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

    public function deleteCategoria($field){
            try {
                $sql = "DELETE FROM mzscann_categoria WHERE categ_codigo = ?";
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

?>e("views/include/header.php");
		require_once("views/modules/mod_categoria/inser_categoria.php");
		require_once("views/include/footer.php");
	}

	public function create(){
		    $data = $_POST["data"];
            $result = $this->Cmodel->createCategoria($data);
            header("Location: index.php?c=categoria&msn=$result");
	}
	public function read()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_categoria/read_categoria.php");
		require_once("views/include/footer.php");
	}

	public function update(){
		  $field = $_GET["rcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_categoria/update_categoria.php';
          require_once 'views/include/footer.php';

	}
	public function updateData(){
        	$data = $_POST["data"];
            $result = $this->Cmodel->updateCategoria($data);
            header("Location: index.php?c=categoria&msn=$result");
    }
    public function delete(){
            $data = $_GET["rcode"];
            $result = $this->Cmodel->deleteCategoria($data);
            header("Location: index.php?c=categoria&msn=$result");
        }
}

?>
