<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @extends CI_Controllercvvmm,,mn
 */
class Web extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->helper(array('url'));
      $this->load->model('general_model');
      $data = ['name' => 'generateToken','param' => ['user' => 'LATINOSAC', 'password' => '19032018@LATINO']];
}

  public function Inicio(){
    //productos mas visitados
    // $strProductosMasVisitados = "";
    // $resultado = $this->general_model->ProcGeneral('ProcProducto', '', 33);

    // foreach($resultado as $item)
    // {
    //   $strProductosMasVisitados =  $strProductosMasVisitados.$item["idProducto"].',';
    // }

    //
    //$dataProductosMasVendidos = $this->getDatosProductos($strProductosMasVisitados);
    //$getImagenSlider = $this->general_model->ProcSQL("call ProcSlider('',10);"); 
    //$datos["productosmasvendidos"] = $dataProductosMasVendidos;
    //$datos["imgslider"] = $getImagenSlider;

    $getImagenSlider = $this->general_model->ProcSQL("call ProcSlider('',10);"); 
    $datos["imgslider"] = $getImagenSlider;
    $datos["termbusqueda"] = "";
    // var_dump($datos["imgslider"]);
    // exit();
    $this->load->view('/_layoumvindaweb');
    $this->load->view('/_headermvinweb',$datos);
    //$this->load->view('Web/Inicio', $datos);
    $this->load->view('Web/Inicio', $datos);
    $this->load->view('/_footermvindaweb');
  }

  public function BusquedaProducto(){
    $terminobusqueda =  $_GET["termbusqueda"];
    // $getImagenSlider = $this->general_model->ProcSQL("call ProcSlider('',10);"); 
    // $datos["imgslider"] = $getImagenSlider;
    //
    $datos["termbusqueda"] = $terminobusqueda;
    $this->load->view('/_layoumvindaweb');
    $this->load->view('/_headermvinweb', $datos);
    // $this->load->view('Web/Inicio', $datos);
    $this->load->view('Web/BusquedaProducto');
    $this->load->view('/_footermvindaweb');
  }

  public function ProductosByCategoria(){
    $serializadocategoria =  $_GET["c"];
    $porcionesdata = explode("|", $serializadocategoria);

    $codcategoriaproducto = $porcionesdata[0];
    $nombrecategoria  = $porcionesdata[1];
    $terminobusqueda =  '';
    //
    $datos["termbusqueda"] = '';
    $datos["codcategoria"] = $codcategoriaproducto;
    $datos["nomcategoria"] = $nombrecategoria;

    $this->load->view('/_layoumvindaweb');
    $this->load->view('/_headermvinweb', $datos);
    // $this->load->view('Web/Inicio', $datos);
    $this->load->view('Web/ProductosByCategoria',$datos);
    $this->load->view('/_footermvindaweb');
  }

  public function TerminarPedido(){
    // $codcategoriaproducto =  $_GET["c"];

    $terminobusqueda =  '';
    //
    $datos["termbusqueda"] = '';

    $this->load->view('/_layoumvindaweb');
    $this->load->view('/_headermvinweb', $datos);
    // $this->load->view('Web/Inicio', $datos);
    $this->load->view('Web/TerminarPedido');
    $this->load->view('/_footermvindaweb');
  }


  public function DetalleProducto(){
    $codigoproducto =  $_GET["codigoProducto"];
    $datos["termbusqueda"] = "";
    $datos["codproducto"] = $codigoproducto;

    $this->load->view('/_layoumvindaweb');
    $this->load->view('/_headermvinweb', $datos);
    // $this->load->view('Web/Inicio', $datos);
    $this->load->view('/Web/DetalleProducto', $datos);
    $this->load->view('/_footermvindaweb');
  }

  public function ResumenPedido(){
    // $codigoproducto =  $_GET["codigoProducto"];
    $datos["termbusqueda"] = "";
    // $datos["codproducto"] = $codigoproducto;

    $this->load->view('/_layoumvindaweb');
    $this->load->view('/_headermvinweb', $datos);
    $this->load->view('/Web/ResumenPedido');
    $this->load->view('/_footermvindaweb');
  }


  public function getDatosProductos($strCodProductos){
	
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"http://abexacloud.com/XbestPruebaPublicada/ServicesPrueba/GetProductosPorCodigo?cadenaProductos=".$strCodProductos);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array()));
   // curl_setopt($curl, CURLOPT_POSTFIELDS, "rucEmpresa=".$ruc);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl); //viene un array
    $respuesta = json_decode($respuesta, true); //convierte array normal
    $respuesta = $respuesta["dt0"];
    // var_dump($respuesta);
    return $respuesta;
    //echo $respuesta;
}
  public function Contactenos(){
    $this->load->view('/layout_mvinda_index');
    $this->load->view('Web/Contactenos');
    $this->load->view('/footer');
  }
  
  
    public function enviarEmail(){
      $nombres  =   $_GET["nombres"];
      $asunto   =   $_GET["asunto"];
      $mensaje  =   $_GET["mensaje"];
//    $nombres  = "William Cubas Alegria";
 //   $asunto   = "Solicitud pedido"; 
  //  $mensaje  = "Me es grato dirigirme a usted para saludarlo y a la vez hacerle llegar nuestras más sinceras felicitaciones por su reciente nombramiento como Gerente Corporativo de Gestión Institucional.";
    //
    $horaactual = date('d/m/Y H:i',strtotime('-5 hours'));
    $correoPara   = "stwtml@gmail.com"; //aqui tiene que estar el correo de contacto de la web 
    $asuntoCorreo = $asunto." [MVINDA.COM]"; 

    $contenidoMensajeHTML = '<p><img style="width:300px;" src="http://mvinda.com/images/Logo.png" /></p>';
    $contenidoMensajeHTML .= "<p>Mensaje enviado por <strong>".$nombres." </strong> el dia ".$horaactual."</p>";
    $contenidoMensajeHTML .= "<p><strong>Asunto : </strong> ".$asunto."</p>";
    $contenidoMensajeHTML .= "<p><strong>Mensaje : </strong></p>";
    $contenidoMensajeHTML .= "<p>".$mensaje."</p>";
    $codRespuesta = "0";
    try {
      $this->enviarCorreoIndividual($correoPara, $asuntoCorreo, $contenidoMensajeHTML);
      $codRespuesta = "1";
//      echo "Exito";
    } catch (Exception $e) {
//      echo "ERROR->".$e->getMessage();
      $codRespuesta = "0";
    }
    
    return $codRespuesta;
  }

  public function enviarCorreoIndividual($emailPara, $asunto, $contenidoMsj){

    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'mail.supremecluster.com',
        'smtp_port' => 25,
        'smtp_user' => 'sistema@mvinda.com',
        'smtp_pass' => 'Wc123@123',
        'mailtype'  => 'html', 
        'charset'   => 'utf-8'
    );
    //
    $this->load->library('email',$config);
    $this->email->from('sistema@mvinda.com', 'William');
    $this->email->to($emailPara);
    //$this->email->cc('another@another-example.com');
    //$this->email->bcc('them@their-example.com');
    //
    $this->email->subject($asunto);
    $this->email->message($contenidoMsj);
    $this->email->send();
  }

  public function Producto(){
  
    //
    $codProducto = $_GET["codProducto"];
    $producto =  $this->getInfoProducto($codProducto);
    $urlImagen = ( $producto["UrlImagen"] == null) ? "http://www.its-print.co.uk/global/images/PublicShop/ProductSearch/prodgr_default_300.png" : "http://www.abexacloud.com/XBest/Adjunto/imagenproducto/20602732402/".$producto["UrlImagen"];
    //$abrevMoneda = ( $producto["CodMoneda"] == 1 ? 'S/.'  : '$');
    $producto["UrlImagen"] = $urlImagen;
    $datos["datoProducto"] = $producto;
    $codCategoriaProducto = $producto["CodCategoriaProducto"];
    //
    $parametros = $codProducto.'|'.$codCategoriaProducto;
    $this->general_model->ProcGeneral('ProcProducto', $parametros, 32); //registra 
    $listaProductosRelacionados =  $this->general_model->ProcGeneral('ProcProducto', $codCategoriaProducto, 34); //getListaCategoria 
    $strProductosRelacionados = "";
    foreach($listaProductosRelacionados as $item)
    {
      $strProductosRelacionados =  $strProductosRelacionados.$item["idProducto"].',';
    }
    $productosRelacionados = $this->getDatosProductos($strProductosRelacionados);
    //$datos["listaCategoria"] = $listaCategorias;
    //var_dump($productosRelacionados);
    //exit();
    $datos["productosrelacionadoscat"] = $productosRelacionados;
    $this->load->view('/layout_mvinda_index');
    $this->load->view('/Web/Producto',$datos);
    $this->load->view('/footer');
  }

  public function getInfoProducto($codigo){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"http://abexacloud.com/XbestPruebaPublicada/ServicesPrueba/GetProductosPorCodigo?cadenaProductos=".$codigo);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array()));
   // curl_setopt($curl, CURLOPT_POSTFIELDS, "rucEmpresa=".$ruc);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl); //viene un array
    $respuesta = json_decode($respuesta, true); //convierte array normal
    $dataProducto = $respuesta["dt0"][0]; 
    //var_dump($dataProducto);
    return $dataProducto;
    //echo $respuesta;
  }
  
    public function SubirImagenSlider(){
    $this->load->library('session');
    $nombreUsuario = $this->session->userdata('username');
    $nombreSlider = $this->input->post('nombreslider');
    $config['upload_path'] = "./assets/images/slider";
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    // $config['allowed_types'] = 'jpeg';
    $config['encrypt_name'] = False;
    $config['overwrite'] = True;
    $imgFile = explode(".", $_FILES["file"]['name']);
    $nombreImagen = "img_".time().'.'.$imgFile[1];
    $config['file_name'] = $nombreImagen;//$CodProducto;//.$data['upload_data']["file_type"];    
    $this->load->library('upload', $config);

    if($this->upload->do_upload("file")){
      // $data = array('upload_data' => $this->upload->data());
      $data = $this->upload->data();
      /*
            Array
      (
              [file_name]     => mypic.jpg
              [file_type]     => image/jpeg
              [file_path]     => /path/to/your/upload/
              [full_path]     => /path/to/your/upload/jpg.jpg
              [raw_name]      => mypic
              [orig_name]     => mypic.jpg
              [client_name]   => mypic.jpg
              [file_ext]      => .jpg
              [file_size]     => 22.2
              [is_image]      => 1
              [image_width]   => 800
              [image_height]  => 600
              [image_type]    => jpeg
              [image_size_str] => width="800" height="200"
      )
      */
      // echo '$NombreGuardarBD: ' . $NombreGuardarBD;
      // $title= $this->input->post('title');
      // $image= $data['upload_data']['file_name'];

      //$result= $this->upload_model->save_upload($title,$image);
      //echo json_decode($result);
      // echo json_decode("Imagen cargado correctamente");
      //echo "Imagen cargado correctamente";
    }

    $Procedimiento = 'ProcSlider';
    $Parametros = $nombreSlider . '|' . $nombreImagen . '|' . $nombreUsuario;
    $Indice = 20;
    $Resultado = $this->general_model->ProcGeneral($Procedimiento, $Parametros, $Indice);
    echo json_encode($Resultado);
  }


  public function getProductobyCategoria(){
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