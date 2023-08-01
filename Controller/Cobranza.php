<?php 
class Cobranza extends Controller
{

    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(COBRANZA);
        parent::__construct();
    }

    public function index()
    {
        
        if (empty($_SESSION['permisosMod']['r'])) {
            header('Location:' . base_url . '/perfil');
        }

        $data['page_name'] = "Cobranza";
        $data['function_js'] = "Cobranza.js";
        $this->views->getView($this, 'index', $data);
    }

    public function all()
    {
        $arrJson = [];
        $cobran = CobranzaModel::all();

        if (empty($cobran)) {
            $arrJson = ['msg' => 'No se encontraron registros'];
        } else {

            $arrJson = $cobran;
        }

        echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
    }

    public function nuevo()
    {
        $data['page_name'] = "Nueva Cobranza";
        $data['function_js'] = "Cobranza.js";
        $this->views->getView($this, 'nuevo', $data);
    }

    public function store()
    {
        // debug($_POST);

        // guardar
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['id'])) {

                try {
                    //code...
                    // validar
                    $val = new Validations();
                    $val->name('cliente')->value(limpiar($_POST['cliente']))->required();
                    $val->name('pedido')->value(limpiar($_POST['pedido']))->required();
                    $val->name('Fecha de Elaboracion de Pedido')->value(limpiar($_POST['elaboracion']))->required();
                    $val->name('Fecha de Entrega Limite de Pedido ')->value(limpiar($_POST['entrega']))->required();
                    $val->name('Numero de Partida ')->value(limpiar($_POST['partida']))->required();
                    $val->name('Descripción del Producto ')->value(limpiar($_POST['descripcion']))->required();
                    $val->name('Cantidad de Entrega')->value(limpiar($_POST['cantidad']))->required();
                    $val->name('Unidad')->value(limpiar($_POST['unidad']))->required();
                    $val->name('Precio Unitario')->value(limpiar($_POST['precio']))->required();
                    $val->name('subtotal')->value(limpiar($_POST['subtotal']))->required();
                    $val->name('impuesto')->value(limpiar($_POST['impuesto']))->required();
                    $val->name('total')->value(limpiar($_POST['total']))->required();
                    $val->name('Numero de Fianza')->value(limpiar($_POST['fianza']))->required();
                  
                    $val->name('Importe')->value(limpiar($_POST['importe']))->required();
                    $val->name('Motivo de la Fianza')->value(limpiar($_POST['motivo']))->required();
                    $val->name('Remision SAE')->value(limpiar($_POST['remision']))->required();
                    $val->name('Fecha de Entrega del Producto')->value(limpiar($_POST['feentrega']))->required();

                    if ($val->isSuccess()) {
                        //guardar
                        $data = [
                            'cliente' => limpiar($_POST['cliente']),
                            'pedido' => limpiar($_POST['pedido']),
                            'elaboracion' => limpiar($_POST['elaboracion']),
                            'entrega' => limpiar($_POST['entrega']),
                            'partida' => limpiar($_POST['partida']),
                            'descripcion' => limpiar($_POST['descripcion']),
                            'cantidad' => limpiar($_POST['cantidad']),
                            'unidad' => limpiar($_POST['unidad']),
                            'precio' => limpiar($_POST['precio']),
                            'subtotal' => limpiar($_POST['subtotal']),
                            'impuesto' => limpiar($_POST['impuesto']),
                            'total' => limpiar($_POST['total']),
                            'fianza' => limpiar($_POST['fianza']),
                            'FeFianza' => limpiar($_POST['fefianza']),
                            'importe' => limpiar($_POST['importe']),
                            'motivo' => limpiar($_POST['motivo']),
                            'remision' => limpiar($_POST['remision']),
                            'FeEntrega' => limpiar($_POST['feentrega']),
                        ];
                        $save = CobranzaModel::save($data);
                        Alertas::new(sprintf("Se ha guardado con exito %s", limpiar($_POST['cliente'])), "success");
                        header('Location:' . base_url . '/cobranza');
                    } else {
                        Alertas::new($val->getErrors(), 'danger');
                        header('Location:' . base_url . '/cobranza/nuevo');
                    }
                } catch (PDOException $e) {
                    Alertas::new($e->getMessage(), 'danger');
                }
            } else {
                // actualizar
                try {
                    //code...
                    // validar
                    $val = new Validations();
                    $val->name('nombre de usuario')->value(limpiar($_POST['nombre']))->required();
                    $val->name('correo del usuario')->value(limpiar($_POST['correo']))->pattern('email')->required();


                    if ($val->isSuccess()) {
                        //actualizar
                        $data = [
                            'nombre' => limpiar($_POST['nombre']),
                            'email' => limpiar($_POST['correo']),
                            'id_rol' => limpiar($_POST['selRol']),
                            'is_activo' => limpiar($_POST['selStatus']),
                        ];
                        $save = UsuariosModel::updateUser($data, $_POST['id']);
                        Alertas::new(sprintf("Se ha actualizado el usuario %s", limpiar($_POST['nombre'])), "success");
                        header('Location:' . base_url . '/usuarios');
                    } else {
                        Alertas::new($val->getErrors(), 'danger');
                        header('Location:' . base_url . '/usuarios/editar/' . $_POST['id']);
                    }
                } catch (PDOException $e) {
                    Alertas::new($e->getMessage(), 'danger');
                }
            }
        }
    }

    public function editar($id)
    {
        $idusuario = limpiar($id);
        if ($idusuario > 0) {
            $roles = UsuariosModel::rolesAll();
            $usuario = UsuariosModel::oneUser($idusuario);
        }

        $data['roles'] = to_obj($roles);
        $data['usuario'] = to_obj($usuario[0]);
        $data['page_name'] = "Editar Usuario";
        $data['function_js'] = "Usuarios.js";
        $this->views->getView($this, 'editar', $data);
    }

    public function destroy()
    {
        $id = intval($_POST['id']);

        $user = UsuariosModel::oneUser($id);

        if (empty($user)) {
            Alertas::new("No se encontró el usuario", "danger");
            header('Location:' . base_url . '/usuarios');
        }

        UsuariosModel::deleteUser($id);
        echo json_encode(['msg' => 'Se ha eliminado el usuario '], JSON_UNESCAPED_UNICODE);
    }
}