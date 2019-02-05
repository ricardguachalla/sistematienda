<?php
    class Login extends CI_Controller{

        function index(){

            /*cargar vista del login*/
            $this->load->view("login/formularios");
        }

        function verificar(){
            // codigo para incluir una libreria
            $this->load->library("form_validation");
            $this->form_validation->set_message("required","El campo{field} es obligatorio");
            $this->form_validation->set_message("min_length","se requiere el {field} minimo  tres caracteres"); // para copiar es alt sahif y la flecha
            $this->form_validation->set_message("max_length","se requiere el {field} maximo  diez caracteres");
            //establecemos el mensaje
            // en este caso no se configura se establece reglas
            $this->form_validation->set_rules("nick","Usuario","required|min_length[3]|max_length[10]");
            //no se inicializa la libreria se ejecuta y su validacion

            $this->form_validation->set_rules("contra","contrasena","required|min_length[4]");

            if($this->form_validation->run()==FALSE){ // si no se cumple

                //cargar la vista login formulario
                $this->load->view("login/formularios");
            }else{

                //echo "ingrese";
                $nick=$this->input->post("nick");
                $contra=$this->input->post("contra");
                // cargar al modelo usuario
                $this->load->model("Usuario_model");
                $r=$this->Usuario_model->validar($nick,$contra);
                if($r->num_rows()==1){

                    $datos=$r->row();
                    $datossesion=array("nombre"=>$datos->nombre,
                                        "apellido"=>$datos->paterno."".$datos->materno,
                                        "nivel"=>$datos->nivel,
                                        "acceso"=>1
                                      );
                    $this->session->set_userdata($datossesion);
                    redirect("inicio");
                }else{

                $this->load->view("login/formularios");
                }


            }

        }

        function salir(){
            $variables=array("nombre","apellidos","nivel","acceso");
            $this->session->unset->userdata($variables);
            $this->session->session_destroy();
            redirect("login");
        }
    }

?>