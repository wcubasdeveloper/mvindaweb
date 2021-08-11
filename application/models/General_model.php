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



	public function ProcPedidoTran($datoscliente, $datosdireccion, $datosPedido,  $datosPedidoDetalle) {

		$ServidorBD = $this->db->hostname;
		$UsuarioBD = $this->db->username;
		$ClaveBD = $this->db->password;
		$BaseDatos = $this->db->database;
		$Fila = '';
		//
		$link = mysqli_connect($ServidorBD, $UsuarioBD, $ClaveBD, $BaseDatos);
		mysqli_autocommit($link, FALSE);
		$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
		$Indice = 10; //para el registro del cliente
		//registra cliente
		$Query = "CALL " . "MvindaProcPedido" . " ('" . $datoscliente . "', " . $Indice . ");";
		$insertarCliente = mysqli_query($link, $Query);

		if(!$insertarCliente){
			mysqli_rollback($link);
			$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error al registrar " . $Query . "'  AS DesResultado;";
			$Respuesta = mysqli_query($link, $Query);
			// var_dump("result");
			// var_dump($Respuesta);
			$Resultado = mysqli_fetch_assoc($Respuesta);
			//
			return $Resultado;
		}

		$Query = 'SELECT	LAST_INSERT_ID();';
		$insertarCliente = mysqli_query($link, $Query);
		$Resultado = mysqli_fetch_row($insertarCliente);

		$CodClienteInserto = $Resultado[0]; //codigo del cliente registrado

		//registro de la dirección
		$Indice = 11;
		$Query = "CALL " . "MvindaProcPedido" . " ('" . $datosdireccion . "', " . $Indice . ");";
		$insertarDireccion = mysqli_query($link, $Query);

		if(!$insertarDireccion){
			mysqli_rollback($link);
			$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error al registrar " . $Query . "'  AS DesResultado;";
			$Respuesta = mysqli_query($link, $Query);
			// var_dump("result");
			// var_dump($Respuesta);
			$Resultado = mysqli_fetch_assoc($Respuesta);
			return $Resultado;
		}

		$Query = 'SELECT	LAST_INSERT_ID();';
		$insertarDireccion = mysqli_query($link, $Query);
		$Resultado = mysqli_fetch_row($insertarDireccion);
		$codDireccionEnvio =  $Resultado[0];//codigo de la dirección registrada
		//

		//insertando el PEDIDO
		$datosPedido = $CodClienteInserto."|". $codDireccionEnvio."|".$datosPedido;
		$Indice = 12;
		$Query = "CALL " . "MvindaProcPedido" . " ('" . $datosPedido . "', " . $Indice . ");";
		$insertarPedido = mysqli_query($link, $Query);

		//
		if(!$insertarPedido){
			mysqli_rollback($link);
			$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error al registrar " . $Query . "'  AS DesResultado;";
			$Respuesta = mysqli_query($link, $Query);
			// var_dump("result");
			// var_dump($Respuesta);
			$Resultado = mysqli_fetch_assoc($Respuesta);
			return $Resultado;
		}

		$Query = 'SELECT	LAST_INSERT_ID();';
		$insertarPedido = mysqli_query($link, $Query);
		$Resultado = mysqli_fetch_row($insertarPedido);
		$codPedido =  $Resultado[0];//codigo de la dirección registrada

		//registrando el detalle del pedido
		$arrDetalleProducto = "";
		$Fila;
		$Columna;
		$FilaArray;


		// Deserializa Detalle
		if (!$datosPedidoDetalle == '') {
			$ParametrosDetalleArray = explode('~', $datosPedidoDetalle);
			foreach ($ParametrosDetalleArray as &$Fila) {

				// SET intIdPed = Split(Parametros, '|', 1);
				// SET intIdProducto = Split(Parametros, '|', 2);

				// SET decPrecioProductoDolar = Split(Parametros, '|', 3);
				// SET decPrecioProductoSoles = Split(Parametros, '|', 4);
				// SET intCantidadDetPed = Split(Parametros, '|', 5);
				// SET varMarca = Split(Parametros, '|', 6);
				// SET varDescripcionProducto = Split(Parametros, '|', 7);

				$FilaArray = explode('|', $Fila);
				$idProducto = $FilaArray[0];
				$cantidad = $FilaArray[1];
				$preciodolares = $FilaArray[2];
				$preciosoles = $FilaArray[3];
				$nombreProducto = $FilaArray[4];
				$marca = $FilaArray[5];
				$descripcion = $FilaArray[6];
				//
				$ParametroDetalle = $codPedido . '|' . $idProducto. '|' . $preciodolares. '|' .$preciosoles.'|'. $cantidad .'|'. $marca . '|' .$descripcion. '|' . $nombreProducto;
				$Indice = 13;
				$Query = 'CALL ' . 'MvindaProcPedido' . ' ("' . $ParametroDetalle . '", ' . $Indice . ')';
				$InsertarPedidoDetalle = mysqli_query($link, $Query);
				//
				if (!$InsertarPedidoDetalle) {
					mysqli_rollback($link);
					$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error detalle " . $codPedido . "' AS DesResultado;";
					$Respuesta = mysqli_query($link, $Query);
					$Resultado = mysqli_fetch_assoc($Respuesta);
					//
					return $Resultado;
				}
				//
				$Query = 'SELECT	LAST_INSERT_ID();';
				$InsertarPedidoDetalle = mysqli_query($link, $Query);
				$Resultado = mysqli_fetch_row($InsertarPedidoDetalle);
				// Obtiene maestro correlativo
				$CodPedidoDetalle = $Resultado[0];

				if ($CodPedidoDetalle == 0) {
					mysqli_rollback($link);
					$Query = "SELECT 0 AS CodResultado, 'Ocurrió un error detalle 2' AS DesResultado;";
					$Respuesta = mysqli_query($link, $Query);
					$Resultado = mysqli_fetch_assoc($Respuesta);
					//
					return $Resultado;
				}
			}
			//
			$Query = 'SELECT 1 AS CodResultado, "Su pedido fué registrado correctamente con el código : <h2>P' . $codPedido . '</h2>" AS DesResultado, ' . $codPedido . ' AS CodAuxiliar;';
			$Respuesta = mysqli_query($link, $Query);
			$Resultado = mysqli_fetch_assoc($Respuesta);
			//
			mysqli_commit($link);
			mysqli_close($link);
			return $Resultado;
		}

		return $Resultado;
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
						$query->free_result();
						$query->next_result();
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