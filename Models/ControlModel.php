<?php 
class ControlModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public static function all()
    {
    $respuesta = DB::SQL("SELECT  c.no_factura, c.fe_factura, c.no_alta, c.fe_alta, c.fe_revision, c.quien_lo_ingreso, c.contrarecibo, c.monto_contra, c.fe_prob_pago, c.se_entrego_a_revi, co.cliente,co.pedido FROM control c INNER JOIN cobranza co on c.id_control=co.id");
    return $respuesta;
    }

    public static function controlAll()
    {
    $respuesta = DB::SQL("SELECT cliente FROM cobranza;");
    return $respuesta;
    }
    
    public static function pedidoAll()
    {
    $respuesta = DB::SQL("SELECT pedido FROM cobranza;");
    return $respuesta;
    }

    public static function save($data)
    {
    $idsave = DB::insert('control', $data);
    return $idsave;
    }

    public static function oneUser($idUser)
    {
    $respuesta = DB::SQL("SELECT u.id_control, r.id, r.nombre as rol, u.nombre as nombre_usuario, u.email, u.is_activo FROM usuarios u INNER JOIN roles r ON u.id_rol = r.id WHERE u.id_usuario = $idUser");
    return $respuesta;
    }

    public static function updateUser($data, $idUser)
    {
    $idupdate = DB::update('control', $data, ['id_control' => $idUser]);
    return $idupdate;
    }

    public static function deleteUser($idUser)
    {
    $iddelete = DB::delete('control', ['id_control' => $idUser]);
    return $iddelete;
    } 
    
}