<?php 
class FianzaModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    } 

  public static function all()
  {
    $respuesta = DB::SQL("SELECT co.cliente, co.pedido, f.recibo_digi,f.estatus,f.banco,f.fe_cobro,f.factoraje,f.cobro,f.valor_factura,f.sancion,f.nota_credito,f.importe,f.motivo,f.saldo_fi FROM fianza f INNER JOIN cobranza co on f.id_fianza=co.id;");
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
    $idsave = DB::insert('fianza',$data);
    return $idsave;
  }

  public static function oneUser($idUser)
  {
    $respuesta = DB::SQL("SELECT u.id_usuario, r.id, r.nombre as rol, u.nombre as nombre_usuario, u.email, u.is_activo FROM usuarios u INNER JOIN roles r ON u.id_rol = r.id WHERE u.id_usuario = $idUser");
    return $respuesta;
  }

  public static function updateUser($data, $idUser)
  {
    $idupdate = DB::update('usuarios', $data, ['id_usuario'=> $idUser]);
    return $idupdate;
  }

  public static function deleteUser($idUser)
  {
    $iddelete = DB::delete('usuarios', ['id_usuario' => $idUser]);
    return $iddelete;
  }
}

