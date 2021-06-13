<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 *
 * @extends CI_Controllercvvmm,,mn
 */
class  XbestServicio extends CI_Controller {
    public function __construct() {
      parent::__construct();
      $this->load->helper(array('url'));
      $this->load->model('general_model');
    }


   
    public function getProductosByLike(){
        $nombre = $this->input->post('nombreproducto');
        $host = "http://abexacloud.com/ApiXbest/api/getProductosByLike";
        $user_name = 'ABEXA';
        $password = '4B3XA2021';
        
        $options = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-type: application/json" . PHP_EOL
                       . "Accept: application/json" . PHP_EOL
                       . "Authorization: Basic " . base64_encode("$user_name:$password"),
            'content' => '{ "parametro" : "'.$nombre.'" }'
            )
        );
        $context  = stream_context_create($options);
        $json_response = file_get_contents($host, false, $context);
        //$response = json_decode($json_response, true);
        //header('Content-Type: application/json');
        echo $json_response;     
    }


    public function getProductosById(){
        $codproductos = $this->input->post('codproductos');
        $host = "http://abexacloud.com/ApiXbest/api/GetProductosPorCodigo";
        $user_name = 'ABEXA';
        $password = '4B3XA2021';
        
        $options = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-type: application/json" . PHP_EOL
                       . "Accept: application/json" . PHP_EOL
                       . "Authorization: Basic " . base64_encode("$user_name:$password"),
            'content' => '{ "parametro" : "'.$codproductos.'" }'
            )
        );
        $context  = stream_context_create($options);
        $json_response = file_get_contents($host, false, $context);
        //$response = json_decode($json_response, true);
        //header('Content-Type: application/json');
        echo $json_response;     
    }

    public function getProductosMasVendidos(){
        $codproductos = "";
        $host = "http://abexacloud.com/ApiXbest/api/GetProductosMasVendidos";
        $user_name = 'ABEXA';
        $password = '4B3XA2021';
        
        $options = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-type: application/json" . PHP_EOL
                       . "Accept: application/json" . PHP_EOL
                       . "Authorization: Basic " . base64_encode("$user_name:$password"),
            'content' => '{ "parametro" : "'.$codproductos.'" }'
            )
        );
        $context  = stream_context_create($options);
        $json_response = file_get_contents($host, false, $context);
        //$response = json_decode($json_response, true);
        //header('Content-Type: application/json');
        echo $json_response;     
    }


    public function getProductosByCategoria(){
        $codCategoria = $this->input->post('codcategoria');
        $host = "http://abexacloud.com/ApiXbest/api/GetProductosActivos";
        $user_name = 'ABEXA';
        $password = '4B3XA2021';
        
        $options = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-type: application/json" . PHP_EOL
                       . "Accept: application/json" . PHP_EOL
                       . "Authorization: Basic " . base64_encode("$user_name:$password"),
            'content' => '{ "parametro" : "'.$codCategoria.'" }'
            )
        );
        $context  = stream_context_create($options);
        $json_response = file_get_contents($host, false, $context);
        //$response = json_decode($json_response, true);
        //header('Content-Type: application/json');
        echo $json_response;

        
        //var_dump($json_response);
        exit();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,"http://abexacloud.com/ApiXbest/api/GetCategorias?parametro=1");
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_USERPWD, "ABEXA" . ":" . "4B3XA2021");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array()));
       // curl_setopt($curl, CURLOPT_POSTFIELDS, "rucEmpresa=".$ruc);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl); //viene un array

        var_dump($respuesta);
        //$respuesta = json_decode($respuesta, true); //convierte array normal
        // var_dump($respuesta);
        // return $respuesta;
        echo $respuesta;
    }

    public function getCategorias(){

        $host = "http://abexacloud.com/ApiXbest/api/GetCategorias";
        $user_name = 'ABEXA';
        $password = '4B3XA2021';
        
        $options = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-type: application/json" . PHP_EOL
                       . "Accept: application/json" . PHP_EOL
                       . "Authorization: Basic " . base64_encode("$user_name:$password"),
            'content' => '{ "parametro" : "1" }'
            )
        );
        $context  = stream_context_create($options);
        $json_response = file_get_contents($host, false, $context);
        //$response = json_decode($json_response, true);
        //header('Content-Type: application/json');
        echo $json_response;

        
        //var_dump($json_response);
        exit();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,"http://abexacloud.com/ApiXbest/api/GetCategorias?parametro=1");
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_USERPWD, "ABEXA" . ":" . "4B3XA2021");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array()));
       // curl_setopt($curl, CURLOPT_POSTFIELDS, "rucEmpresa=".$ruc);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl); //viene un array

        var_dump($respuesta);
        //$respuesta = json_decode($respuesta, true); //convierte array normal
        // var_dump($respuesta);
        // return $respuesta;
        echo $respuesta;
    }

    public function getProductos(){
        //$codCategoria = "0"
        $codCategoria = $_POST["codcategoria"];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,"http://abexacloud.com/XbestPruebaPublicada/ServicesPrueba/GetProductosActivos?codCategoria=".$codCategoria);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array()));
       // curl_setopt($curl, CURLOPT_POSTFIELDS, "rucEmpresa=".$ruc);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl); //viene un array
        //$respuesta = json_decode($respuesta, true); //convierte array normal
        // var_dump($respuesta);
        // return $respuesta;
        echo $respuesta;
    }
    
}