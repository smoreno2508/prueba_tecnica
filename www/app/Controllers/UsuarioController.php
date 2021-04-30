<?php

namespace App\Controllers;

use CodeIgniter\controller;
use App\Models\UsuarioModel;

class UsuarioController extends Controller
{

    // se crea la función index para aterrizar la pagina y se manda por parametros los datos de los usuarios creados . el header y footer creados para modularizar
    public function index()
    {
        $usuario = new UsuarioModel();
        $datos = [
            'usuarios' => $usuario->paginate(10),
            'pager' => $usuario->pager,
            'header'=> view('template/header'),
            'footer'=> view('template/footer')
        ];

        return view('usuarios/index', $datos);
    }

    public function agregarRender($nombre, $email){

        $usuario = new UsuarioModel();
        $fecha = date('Y-m-d');
        $datos = [
            'nombre'         => $nombre,
            'email'          => $email,
            'fecha_registro' => $fecha
        ];
        
        // ocupamos la libreria validate para validar los campos email y nombre antes de ingresar por el lado del servidor
        $validacion = $this->validate([
            'nombre' => 'required|min_length[3]',
            'email'  => 'required|valid_email'
        ]);

        // si pasa la validación entonces procede a insertar los datos tomados por post
        // crea una variable de session con with llamada agregar que después se ocupa para sweet alert y nos redirige a la raiz 
        if( $validacion ){
            $usuario->insert($datos);
            return redirect()->to(base_url('/'))->with('agregar', 'Usuario agregado correctamente');
        }
    }
    // la nueva funcionalidad de ci4 es poder realizar las operaciones que antes se realizaban en el modelo en el controllador 
    // solo es necesario usar el modelo con la palabra reservada use 
    public function agregar()
    {     
        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');

        $this->agregarRender($nombre, $email);
        return redirect()->to(base_url('/'));
    }
    
    // se hizo un nuevo metodo distinto al modal para probar /nuevo
    public function nuevo(){

        if($_POST){
            $nombre = $this->request->getPost('nombre');
            $email = $this->request->getPost('email');
            $this->agregarRender($nombre, $email);
            return redirect()->to(base_url('/'));
        }

        $datos = [
            'header'=> view('template/header'),
            'footer'=> view('template/footer')
        ];

        return view('usuarios/nuevo', $datos);
    }
}
