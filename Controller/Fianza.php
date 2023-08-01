<?php 
class Fianza extends Controller
{

    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(FIANZA);
        parent::__construct();
    }

    public function index()
    {
        $data['page_name'] = "Fianza";
        $data['function_js'] = "Fianza.js";
        $this->views->getView($this, 'index', $data);
    }
    public function all()
    {
        $arrJson = [];
        $fianz = FianzaModel::all();

        if (empty($fianz)) {
            $arrJson = ['msg' => 'No se encontraron registros'];
        } else {
            $arrJson = $fianz;
        }

        echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
    }
    
    public function nuevo()
    {
        $clientes = FianzaModel::controlAll();
        $pedido=FianzaModel::pedidoAll();
        $data['pedido'] = $pedido;

        $data['clientes'] = $clientes;
        $data['page_name'] = "Nueva Fianza";
        $data['function_js'] = "Fianza.js";
        $this->views->getView($this, 'nuevo', $data);
    }

    public function store()
    {
        // debug($_POST);

        // guardar
        if ($_SERVER['REQUEST_METHOD'] =="POST") {
            if (empty($_POST['id'])) {

                try {
                    //code...
                    // validar
                    $val = new Validations();
                    $val->name('Contra Recibo Digital')->value(limpiar($_POST['contradigi']))->required();
                    $val->name('Estatus')->value(limpiar($_POST['estatus']))->required();
                    $val->name('Banco')->value(limpiar($_POST['banco']))->required();
                    $val->name('Fecha de Cobro')->value(limpiar($_POST['fecobro']))->required();
                    $val->name('Factoraje')->value(limpiar($_POST['factoraje']))->required();
                    $val->name('Cobro')->value(limpiar($_POST['cobro']))->required();
                    $val->name('Valor Factura')->value(limpiar($_POST['valorfac']))->required();
                    $val->name('sancion')->value(limpiar($_POST['sancion']))->required();
                    $val->name('Nota de Credito')->value(limpiar($_POST['notacredi']))->required();
                    $val->name('Importe')->value(limpiar($_POST['importe']))->required();
                    $val->name('Motivo')->value(limpiar($_POST['motivo']))->required();
                    $val->name('Saldo Final')->value(limpiar($_POST['salfi']))->required();

                    if ($val->isSuccess()) {
                        //guardar
                        $data = [
                            'id_cobranza' => limpiar($_POST['selcli']),
                            'id_cobranza' => limpiar($_POST['selpe']),
                            'recibo_digi' => limpiar($_POST['contradigi']),
                            'estatus' => limpiar($_POST['estatus']),
                            'banco' => limpiar($_POST['banco']),
                            'fe_cobro' => limpiar($_POST['fecobro']),
                            'factoraje' => limpiar($_POST['factoraje']),
                            'cobro' => limpiar($_POST['cobro']), 
                            'valor_factura' => limpiar($_POST['valorfac']),
                            'sancion'=> limpiar($_POST['sancion']),
                            'nota_credito' => limpiar($_POST['notacredi']),
                            'importe' => limpiar($_POST['importe']),
                            'motivo' => limpiar($_POST['motivo']),
                            'saldo_fi' => limpiar($_POST['salfi']),

                        ];
                        $save = FianzaModel::save($data);
                        Alertas::new(sprintf("Se ha guardado con exito %s", limpiar($_POST['estatus'])),"success");
                        header('Location:' . base_url . '/fianza');
                    } else {
                        Alertas::new($val->getErrors(), 'danger');
                        header('Location:' . base_url . '/fianza/nuevo');
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
}