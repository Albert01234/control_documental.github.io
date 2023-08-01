<?php 
class Control extends Controller
{

    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(CONTROL);
        parent::__construct();
    }

    public function index()
    {
        if (empty($_SESSION['permisosMod']['r'])) {
            header('Location:' . base_url . '/perfil');
        }

        $data['page_name'] = "Control";
        $data['function_js'] = "Control.js";
        $this->views->getView($this, 'index', $data);
    }
    public function all()
    {
        $arrJson = [];
        $controld = ControlModel::all();
        if (empty($controld)) {
            $arrJson = ['msg' => 'No se encontraron registros'];
        } else {

            $arrJson = $controld;
        }

        echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
    }

    public function nuevo()
    {
        $clientes = ControlModel::controlAll();
        $pedido=ControlModel::pedidoAll();
        $data['pedido'] = $pedido;

        $data['clientes'] = $clientes;
        $data['page_name'] = "Nueva Control";
        $data['function_js'] = "Control.js";
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
                    $val->name('Factura')->value(limpiar($_POST['factura']))->required();
                    $val->name('Fecha de Factura')->value(limpiar($_POST['fefactura']))->required();
                    $val->name('Alta')->value(limpiar($_POST['alta']))->required();
                    $val->name('Fecha de Alta')->value(limpiar($_POST['fealta']))->required();
                    $val->name('Fecha de Revision')->value(limpiar($_POST['ferevi']))->required();
                    $val->name('¿Quien lo ingreso a revsion?')->value(limpiar($_POST['quien']))->required();
                    $val->name('Contra recibo')->value(limpiar($_POST['contrareci']))->required();
                    $val->name('Unidad')->value(limpiar($_POST['Importecontra']))->required();
                    $val->name('Fecha de Probable de Pago')->value(limpiar($_POST['fepro']))->required();
                    $val->name('¿Ingreso a revsion?')->value(limpiar($_POST['ingreso']))->required();

                    if ($val->isSuccess()) {
                        //guardar
                        $data = [
                            'id_cobranza' => limpiar($_POST['selcli']),
                            'id_cobranza' => limpiar($_POST['selpe']),
                            'no_factura' => limpiar($_POST['factura']),
                            'fe_factura' => limpiar($_POST['fefactura']),
                            'no_alta' => limpiar($_POST['alta']),
                            'fe_alta' => limpiar($_POST['fealta']),
                            'fe_revision' => limpiar($_POST['ferevi']),
                            'quien_lo_ingreso' => limpiar($_POST['quien']),
                            'contrarecibo' => limpiar($_POST['contrareci']),
                            'monto_contra' => limpiar($_POST['Importecontra']),
                            'fe_prob_pago' => limpiar($_POST['fepro']),
                            'se_entrego_a_revi' => limpiar($_POST['ingreso']),

                        ];
                        $save = ControlModel::save($data);
                        Alertas::new(sprintf("Se ha guardado con exito %s", limpiar($_POST['factura'])), "success");
                        header('Location:' . base_url . '/control');
                    } else {
                        Alertas::new($val->getErrors(), 'danger');
                        header('Location:' . base_url . '/control/nuevo');
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