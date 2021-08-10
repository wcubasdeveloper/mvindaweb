<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 

/**
 * User class.
 *
 * @extends CI_Controllercvvmm,,mn
 */
class  Registros extends CI_Controller {

  public function __construct() {

		parent::__construct();
	  $this->load->helper(array('url'));
	  $this->router->fetch_method();
    $this->load->model('general_model');
    $data = ['name' => 'generateToken','param' => ['user' => 'LATINOSAC', 'password' => '19032018@LATINO']];

    //include APPPATH . 'third_party/app/index.php';
    /*
		$this->load->helper(array('url'));
    $this->load->model('Unidad_model');
    $this->load->model('UnidadTrack_model');*/
	}
	
public function procGeneralWebHook(){

    $parametros = $this->input->get('parametros'); //cambiar por post
    $nombreProcedimiento = $this->input->get('nombreProcedimiento'); //cambiar por post
    $indice    = $this->input->get('indice'); // cambiar por post

    $resultado = $this->general_model->ProcGeneral($nombreProcedimiento, $parametros, $indice);
    echo json_encode($resultado);
    //echo $resultado;
  }
  
  public function procGeneral(){

    $parametros = $this->input->post('parametros'); //cambiar por post
    $nombreProcedimiento = $this->input->post('nombreProcedimiento'); //cambiar por post
    $indice    = $this->input->post('indice'); // cambiar por post

    $resultado = $this->general_model->ProcGeneral($nombreProcedimiento, $parametros, $indice);
    echo json_encode($resultado);
    //echo $resultado;
  }

  public function procRegistraPedido(){
    $paramCliente = $this->input->post('datoscliente'); //cambiar por post
    $paramDireccion = $this->input->post('datosdireccion'); //cambiar por post
    $paramPedido = $this->input->post('datospedido'); //cambiar por post
    $paramPedidoDetalle = $this->input->post('datosPedidoDetalle'); //cambiar por post
    //
    $nomcliente  =  $this->input->post('nomcli'); //cambiar por post
    $correocliente =  $this->input->post('correocli'); //cambiar por post
    $numcelularcli =  $this->input->post('numcelcli'); //cambiar por post

    $resultado = $this->general_model->ProcPedidoTran($paramCliente, $paramDireccion, $paramPedido, $paramPedidoDetalle);
    //
   

    $codigoResultado = (int)$resultado["CodResultado"];
    $codigoPedidoGenerado = "";
    $resultadoenviocorreo = false;
    //
    if($codigoResultado  == 1){ //si fue exitoso
     
      $codigoPedidoGenerado = $resultado["CodAuxiliar"];
      
      $resultadoenviocorreo = $this->enviarCorreoConfirmacion($nomcliente, $codigoPedidoGenerado, $correocliente,  $numcelularcli);
     
      if($resultadoenviocorreo){ //si se envio el correo correctamente
        $resultado["DesResultado"] .= ", y se envió un mensaje a ". $correocliente . ' confirmando el registro del pedido.';
      }else{
        $resultado["DesResultado"] .= ",<h2>no se pudo enviar el correo de confirmación a ". $correocliente . '  </h2> verifique si el correo es válido.';
      }      
    }
   
  
    echo json_encode($resultado);
  }

  public function enviarCorreoConfirmacion($nombrecliente, $codigoPedido, $correocliente, $numeroCelular)
  {
   

    $enviocorreo = false;

    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'mail.supremecluster.com',
      'smtp_port' => 25,
      'smtp_user' => 'sistema@mvinda.com', // change it to yours
      'smtp_pass' => 'Mvinda123@123', // change it to yours
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'wordwrap' => TRUE
    );
    //


    $message = "hola";
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('sistema@mvinda.com'); // change it to yours
    $this->email->to($correocliente);// change it to yours
    $this->email->subject('[Mvinda S.A.C] Confirmación del pedido '.$codigoPedido);
    // $this->email->message($message);
    $data["nombrecliente"]  = $nombrecliente;
    $data["codigopedido"]  = $codigoPedido;
    $data["celular"]  = $numeroCelular;

   
  
    $this->email->message($this->load->view('/Registros/emailconfirmapedido',$data, true));


    if($this->email->send())
    {
    // echo 'Email sent.';
      $enviocorreo = true;
    }
    else
    {
      $enviocorreo = false;
    //  show_error($this->email->print_debugger());
    }

    return $enviocorreo;
  }





  public function producto($Titulo){
    $this->load->library('session');
    if(empty($this->session->userdata('username'))){
        redirect('user/login');
    }
    $datos["nomusuario"] = $this->session->userdata('username');
    $datos["categorias"] = $this->general_model->ProcSQL("SELECT * FROM `TbProductoCategoria`;");
    //
    $Data['Titulo'] = $Titulo;
    $Controlador = $this->router->fetch_class();
    $Accion = $this->router->fetch_method();
    //
    $Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    $this->load->view('/layout_principal', $Data);
    $this->load->view('/' . $Vista,$datos);
    $this->load->view('/footer');
  }
  public function persona($Titulo){
    $this->load->library('session');
    if(empty($this->session->userdata('username'))){
        redirect('user/login');
    }
    $datos["nomusuario"] = $this->session->userdata('username');
    //
    $Data['Titulo'] = $Titulo;
    $Controlador = $this->router->fetch_class();
    $Accion = $this->router->fetch_method();
    //
    $Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    $this->load->view('/layout_principal', $Data);
    $this->load->view('/' . $Vista,$datos);
    $this->load->view('/footer');
  }
  
  
  public function cliente($Titulo){
    $this->load->library('session');
    if(empty($this->session->userdata('username'))){
        redirect('user/login');
    }
    $datos["nomusuario"] = $this->session->userdata('username');
    //
    $Data['Titulo'] = $Titulo;
    $Controlador = $this->router->fetch_class();
    $Accion = $this->router->fetch_method();
    //
    $Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    $this->load->view('/layout_principal', $Data);
    $this->load->view('/Registros/cliente',$datos);
    $this->load->view('/footer');
  }

  public function actualizarDataGlobal(){
    $this->load->library('session');
  
    $nombreTienda   = $this->input->post('nombreTienda');
    $nombreAlmacen  = $this->input->post('nombreAlmacen');    
    $this->session->set_userdata('NombreTienda', $nombreTienda);
    $this->session->set_userdata('NombreAlmacen', $nombreAlmacen);
    
  }
  

   public function limpiarDataCaja(){

    $this->load->library('session');
    $this->session->set_userdata('NombreTienda', '');
    $this->session->set_userdata('NombreAlmacen', '');
  }

  public function subirImagenBannerUno(){

    echo $_FILES["file"]['name'];
    
    $nombreSlider = $this->input->post('nombreslider');
    $config['upload_path'] = "./assets/images/banners";
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
  
    }
  }

  public function SubirImagenProducto(){

    $CodProducto = $this->input->post('CodProducto');

    $config['upload_path'] = "./assets/images";
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    // $config['allowed_types'] = 'jpeg';
    $config['encrypt_name'] = False;
    $config['overwrite'] = True;
    $config['file_name'] = $CodProducto;//.$data['upload_data']["file_type"];
    $this->load->library('upload', $config);
    //
    $NombreGuardarBD = '';
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
      // if ($data['file_ext'] == '')
      $NombreGuardarBD = $CodProducto . $data['file_ext'];
      // echo '$NombreGuardarBD: ' . $NombreGuardarBD;
      // $title= $this->input->post('title');
      // $image= $data['upload_data']['file_name'];

      //$result= $this->upload_model->save_upload($title,$image);
      //echo json_decode($result);
      // echo json_decode("Imagen cargado correctamente");
      //echo "Imagen cargado correctamente";
    }
    $Procedimiento = 'ProcProducto';
    $Parametros = $CodProducto . '|' . $NombreGuardarBD;
    $Indice = 31;

    $Resultado = $this->general_model->ProcGeneral($Procedimiento, $Parametros, $Indice);
    echo json_encode($Resultado);
  }
  public function Proveedor($Titulo){
    $this->load->library('session');
    if(empty($this->session->userdata('username'))){
        redirect('user/login');
    }
    $datos["nomusuario"] = $this->session->userdata('username');
    //
    $Data['Titulo'] = $Titulo;
    $Controlador = $this->router->fetch_class();
    $Accion = $this->router->fetch_method();
    //
    $Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    $this->load->view('/layout_principal', $Data);
    $this->load->view('/' . $Vista,$datos);
    $this->load->view('/footer');
  }
  public function Usuario($Titulo){
    $this->load->library('session');
    if(empty($this->session->userdata('username'))){
        redirect('user/login');
    }
    $datos["nomusuario"] = $this->session->userdata('username');
    //
    $Data['Titulo'] = $Titulo;
    $Controlador = $this->router->fetch_class();
    $Accion = $this->router->fetch_method();
    //
    $Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    $this->load->view('/layout_principal', $Data);
    $this->load->view('/' . $Vista,$datos);
    $this->load->view('/footeradmin');
  }
  public function Categoria($Titulo){
    var_dump("HOLIIIIII");
    exit();
    $this->load->library('session');
    if(empty($this->session->userdata('username'))){
        redirect('user/login');
    }
    $datos["nomusuario"] = $this->session->userdata('username');
    //
    $Data['Titulo'] = $Titulo;
    $Controlador = $this->router->fetch_class();
    $Accion = $this->router->fetch_method();
    //
    $Vista = $Controlador . '/' . $Accion;
    // Actualiza Ultima Vista
    $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
    //
    $this->load->view('/layout_principal', $Data);
    $this->load->view('/' . $Vista,$datos);
    $this->load->view('/footer');
  }
  
    public function Slider($Titulo){
 
      $this->load->library('session');
      // if(empty($this->session->userdata('username'))){
      //     redirect('user/login');
      // }

      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }


      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);

      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }
  
    public function Pedido($Titulo){
 
      $this->load->library('session');
      // if(empty($this->session->userdata('username'))){
      //     redirect('user/login');
      // }

      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }


      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);

      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }

    public function MuestraCategorias($Titulo){
 
       $this->load->library('session');
      // if(empty($this->session->userdata('username'))){
      //     redirect('user/login');
      // }

      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }


      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);

      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }

    public function NuevosProductos($Titulo){
 
      $this->load->library('session');
      // if(empty($this->session->userdata('username'))){
      //     redirect('user/login');
      //}
      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }

      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);

      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }


    public function Ofertas($Titulo){
 
      $this->load->library('session');

      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }

      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);

      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }

    public function Configuracion($Titulo){
 
      $this->load->library('session');

      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }

      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);

      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }


    public function TipoCambio($Titulo){
 
      $this->load->library('session');

      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }

      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
      //
      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }

    public function TrabajaConNosotros($Titulo){
 
      $this->load->library('session');
      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }

      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
      //
      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }

    public function Soporte($Titulo){
 
      $this->load->library('session');
      $nombreusuario = $_SESSION['username'];
      /***** desarrollo *****/
      if(empty($nombreusuario)){
        redirect('user/login');
      }

      $datos["nomusuario"] = $nombreusuario;
      //
      $Data['Titulo'] = $Titulo;
      $Controlador = $this->router->fetch_class();
      $Accion = $this->router->fetch_method();
      //
      $Vista = $Controlador . '/' . $Accion;
      //
      $this->general_model->ProcActualizaUltimaVista($Vista . '/' . $Titulo);
      //
      $this->load->view('/layout_principal', $Data);
      $this->load->view('/' . $Vista,$datos);
      $this->load->view('/footeradmin');
    }


    public function Prueba(){
      $this->load->view('/Registros/Prueba');
    }

}