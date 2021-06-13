<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class General_model extends CI_Model {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	public function ProcGeneral($nombreProcedimiento, $parametros, $indice){

				$rpta = "";
		try {
				$query = $this->db->query("call ".$nombreProcedimiento." ('".$parametros."',".$indice.")");
				//$query = $this->db->query("call ProcUsuario ('rolando|123|12',11)");
				//return $query;
				$row = $query->result_array();
				$query->next_result(); 
				$query->free_result();
				$rpta = $row;
		} catch (Exception $e) {
				$rpta = $e->getMessage();
		}
		
		return $rpta;
	}
	public function ProcGeneral2($Procedimiento, $Parametros, $Indice) {
				$rpta = "";
		try {
				$query = $this->db->query("CALL " . $Procedimiento . "('" . $Parametros . "', " . $Indice . ")");
				$row = $query->result_array();
				$rpta = $row;
		} catch (Exception $e) {
				$rpta = $e->getMessage();
		}
		//
		return $rpta;
	}
	public function ProcAlmacenMovimientoTran($Procedimiento, $Parametros, $ParametrosDetalle, $Indice) {
		$ServidorBD = $this->db->hostname;
		$UsuarioBD = $this->db->username;
		$ClaveBD = $this->db->password;
		$BaseDatos = $this->db->database;
		$Fila = '';
		//
		$link = mysqli_connect($ServidorBD, $UsuarioBD, $ClaveBD, $BaseDatos);
		//
		mysqli_autocommit($link, FALSE);
		$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
		//
		$Query = "CALL " . $Procedimiento . " ('" . $Parametros . "', " . $Indice . ");"; 
		$InsertarAlmacenMovimiento = mysqli_query($link, $Query);
		//
		if (!$InsertarAlmacenMovimiento) {
			mysqli_rollback($link);
			$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error 2.' AS DesResultado;";
			$Respuesta = mysqli_query($link, $Query);
			$Resultado = mysqli_fetch_assoc($Respuesta);
			//
			return $Resultado;
		}
		//
		$Query = 'SELECT	LAST_INSERT_ID();'; 
		$InsertarAlmacenMovimiento = mysqli_query($link, $Query);
		$Resultado = mysqli_fetch_row($InsertarAlmacenMovimiento);
		// Obtiene maestro correlativo
		$CodAlmacenMovimiento = $Resultado[0];
		// Registra detalle
		$Fila;
		$Columna;
		$FilaArray;
		// Deserializa Detalle
		if ($ParametrosDetalle != '') {
			$ParametrosDetalleArray = explode('~', $ParametrosDetalle);
			foreach ($ParametrosDetalleArray as &$Fila) {
				//
				$FilaArray = explode('|', $Fila);
				$CodProducto = $FilaArray[0];
				$Cantidad = $FilaArray[1];
				//
				$Procedimiento = 'ProcAlmacenMovimientoDetalle';
				$Parametros = $CodAlmacenMovimiento . '|' . $CodProducto . '|' . $Cantidad. '|0';
				$Indice = 20;
				$Query = 'CALL ' . $Procedimiento . ' ("' . $Parametros . '", ' . $Indice . ')';
				$InsertarAlmacenMovimientoDetalle = mysqli_query($link, $Query);
				//
				$CodAlmacenMovimientoDetalle = 0;
				//
				if (!$InsertarAlmacenMovimientoDetalle) {
					mysqli_rollback($link);
					$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error detalle' AS DesResultado;";
					$Respuesta = mysqli_query($link, $Query);
					$Resultado = mysqli_fetch_assoc($Respuesta);
					//
					return $Resultado;
				}
				$Query = 'SELECT	LAST_INSERT_ID();'; 
				$InsertarAlmacenMovimientoDetalle = mysqli_query($link, $Query);
				$Resultado = mysqli_fetch_row($InsertarAlmacenMovimientoDetalle);
				// Obtiene maestro correlativo
				$CodAlmacenMovimientoDetalle = $Resultado[0];
				//
				if ($CodAlmacenMovimientoDetalle == 0) {
					mysqli_rollback($link);
					$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error detalle 2' AS DesResultado;";
					$Respuesta = mysqli_query($link, $Query);
					$Resultado = mysqli_fetch_assoc($Respuesta);
					//
					return $Resultado;
				}
			}
		}
		//
		$Query = 'SELECT 1 AS CodResultado, "Registró con exito!" AS DesResultado;';
		$Respuesta = mysqli_query($link, $Query);
		$Resultado = mysqli_fetch_assoc($Respuesta);
		//
		mysqli_commit($link);
		mysqli_close($link);
		return $Resultado;
	}


	public function ProcSQL($q){
		
						$rpta = "";
				try {
						$query = $this->db->query($q);
						//$query = $this->db->query("call ProcUsuario ('rolando|123|12',11)");
						//return $query;
						$row = $query->result_array();
						$rpta = $row;
				} catch (Exception $e) {
						$rpta = $e->getMessage();
				}
				return $rpta;
	}

	public function ProcActualizaUltimaVista($Vista) {
		$rpta = "";
		$CodUsuario = $_SESSION['codusuario'];
    $Parametros = $CodUsuario . '|' . $Vista;
		try {
			$query = $this->db->query("call ProcUsuario ('" . $Parametros . "', 31)");
		} catch (Exception $e) {
		}
		return $rpta;
	}
}