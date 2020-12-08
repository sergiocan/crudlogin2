<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
	public function run()
	{
		$nombre = "Sergio";
		$ape_pat ="Cantero";
		$correo = "sergiocantero06@gmail.com";
		$usuario = "admin";
		$password = password_hash("123", PASSWORD_DEFAULT);

		$data = [
						'nombre' => $nombre,
						'apellido_paterno' => $ape_pat,
						'email' => $correo,
                        'usuario' => $usuario,
                        'password'  => $password
                ];

                // Using Query Builder
        $this->db->table('t_usuarios')->insert($data);
	}
}
