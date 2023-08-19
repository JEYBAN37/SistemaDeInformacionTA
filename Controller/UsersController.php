<?php


class UsersController extends AppController
{
    //put your code here

    var $uses = array("User");
    var $helpers = array("Html", "Form");
    var $paginate = array("order" => "username", "limit" => 5);
    var $nivs = array("A" => "Administrador", "U" => "Investigador", "D" => "Digitador");



    /* function add($niv=null){
        if(isset($this->data)&&!empty($this->data)){
            $this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
            if($this->User->save($this->data)){
                $this->Session->setFlash("Usuario registrado exitosamente");
            } else {
                $this->Session->setFlash("Problema en el registro");
            }
            if($niv != null){
                $this->redirect("admin");
            } else {
                $this->redirect("admin");
            }
        } else {
            //if($niv != null){
                $this->set("nivs", $this->nivs);
            //}
        }
    }*/

    public function home()
    {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }



    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            //$this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'admin'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }



    function edit($id = null)
    {

        if (isset($this->data) && !empty($this->data)) {

            //$this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
            try {
                $this->User->save($this->data);
            } catch (\Exception $e) {
            }
            $this->redirect("admin");
            //return $this->redirect(array('action' => 'admin'));

        } else {

            $this->set("nivs", $this->nivs);

            $this->set("datos", $this->User->find("first", array("conditions" => array("User.id" => $id))));

            $this->Session->setFlash("ACTUALIZACION DE USUARIOS");
        }
    }




    function delete($id = null)
    {
        try {
            $this->User->delete($id);
        } catch (\Exception $e) {
        }
        $this->redirect("admin");
    }


    function login()
    {
        if ((isset($this->data)) && (!empty($this->data))) {
            $r = $this->User->find("first", array(
                "conditions" => array(
                    "username" => $this->data["User"]["username"],
                    "password" => md5($this->data["User"]["password"])
                )
            ));

            if (isset($r) && !empty($r)) {
                $this->Session->write("usr", $r["User"]["nombre"]);
                $this->Session->write("nvl", $r["User"]["nivel"]);
                $auxUser = array('username' => $r["User"]["username"], 'password' => $r["User"]["password"], 'group_id' => $r["User"]["group_id"]);
                $this->Auth->login($auxUser);
                //$this->redirect("bienvenida");
                if ($this->Session->read('Auth.User')) {
                    $this->Session->setFlash('Acceso exitoso, bienvenido', 'default', array('class' => 'alert alert-success'));
                    // return $this->redirect('controller' => 'orders', 'action' => 'thanks');
                    //$this->redirect("home");
                   return $this->redirect(
            array('controller' => 'verificaciones', 'action' => 'index'));
        

                }
            } else {
                $this->Session->setFlash('Por favor verifique sus credenciales', 'default', array('class' => 'alert alert-warning'));
                //$this->Session->setFlash("SIN ACCESO AL SISTEMA");                
            }
        } else {
            //$this->Session->setFlash("SIN ACCESO AL SISTEMA");
            // echo "<script> alert('SIN ACCESO AL SISTEMA'); </script>";
        }

        $this->layout = 'login';
    }


    function logout()
    {
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }



    function bienvenida()
    {
        $this->Session->setFlash("Bienvenid@s");
    }



    function salir()
    {
        $this->Session->destroy();
        $this->Auth->logout();
        $this->redirect("login");
    }



    function admin()
    {
        $r = $this->paginate("User");
        $this->set("usrs", $r);
        $this->set("nivs", $this->nivs);
        $this->Session->setFlash("ADMINISTRACION DE USUARIOS");
    }


    public function beforefilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function initDB()
    {
        $group = $this->User->Group;

        // Allow admins to everything
        $group->id = 1;
        //$this->Acl->allow($group, 'controllers');
        //$this->Acl->allow($group, 'controllers/users/delete');
        // $this->Acl->allow($group, 'controllers/actas/delete');
        //$this->Acl->deny($group, 'controllers/Productos/smsedit');

        // allow managers to posts and widgets
        $group->id = 2;
        //$this->Acl->deny($group, 'controllers');       
      
      /* $this->Acl->deny($group, 'controllers/Plsesiones/edit');
       $this->Acl->deny($group, 'controllers/Plsesiones/editanexo');
       $this->Acl->deny($group, 'controllers/Plsesiones/add');
       $this->Acl->deny($group, 'controllers/infoeventos/add');  
       $this->Acl->deny($group, 'controllers/infoeventos/edit');        
       $this->Acl->deny($group, 'controllers/Procesoregistros/add');
       $this->Acl->deny($group, 'controllers/Proactividades/edit');      
       $this->Acl->deny($group, 'controllers/Procesoregistros/edit');
       $this->Acl->deny($group, 'controllers/Proactividades/add');
       $this->Acl->deny($group, 'controllers/Actividades/add');
       $this->Acl->deny($group, 'controllers/infoeventos/index');   
       $this->Acl->deny($group, 'controllers/infoeventos/editanexo'); 
       $this->Acl->deny($group, 'controllers/infoeventos/add'); 
       $this->Acl->deny($group, 'controllers/infoeventos/edit');        
       $this->Acl->deny($group, 'controllers/SistematizacionProcesosViewTests/add');       
       $this->Acl->deny($group, 'controllers/Productos/add');
       $this->Acl->deny($group, 'controllers/Productos/edit');
       $this->Acl->deny($group, 'controllers/Productos/editpic');
       $this->Acl->deny($group, 'controllers/Productos/editanexo');
       $this->Acl->deny($group, 'controllers/Users/edit');
       $this->Acl->deny($group, 'controllers/Users/admin');
       $this->Acl->deny($group, 'controllers/Users/add');
       $this->Acl->deny($group, 'controllers/Plsmomentos/edit');
       $this->Acl->deny($group, 'controllers/Plsmomentos/add');
       $this->Acl->deny($group, 'controllers/Plsmomentos/delete');*/
       











        // allow users to only add and edit on posts and widgets
        $group->id = 3;
        //$this->Acl->deny($group, 'controllers');
      
















        // allow basic users to log out
        //$this->Acl->allow($group, 'controllers/users/logout');

        // we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }
}
