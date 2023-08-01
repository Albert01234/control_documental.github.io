<?php 
class CobranzaModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    }
    public static function all()
    {
      $respuesta = DB::SQL("SELECT * FROM cobranza");
      return $respuesta;
    }
  
    public static function save($data)
    {
      $idsave = DB::insert('cobranza', $data);
      return $idsave;
    }
  
    public static function oneUser($idUser)
    {
      $respuesta = DB::SQL("SELECT u.id_usuario, r.id, r.nombre as rol, u.nombre as nombre_usuario, u.email, u.is_activo FROM usuarios u INNER JOIN roles r ON u.id_rol = r.id WHERE u.id_usuario = $idUser");
      return $respuesta;
    }
  
    public static function updateUser($data, $idUser)
    {
      $idupdate = DB::update('cobranza', $data, ['id' => $idUser]);
      return $idupdate;
    }
  
    public static function deleteUser($idUser)
    {
      $iddelete = DB::delete('cobranza', ['id' => $idUser]);
      return $iddelete;
    }
}
