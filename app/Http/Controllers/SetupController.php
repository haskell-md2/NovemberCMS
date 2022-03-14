<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetupController extends Controller
{
    //
    public function __invoke(Request $req)
    {
        config(['database.connections.mysql.username' => $req->db_user]);

        self::envUpdate('DB_HOST', $req->db_path);
        self::envUpdate('DB_PORT', $req->db_port);
        self::envUpdate('DB_DATABASE', $req->db_name);
        self::envUpdate('DB_USERNAME', $req->db_user);
        self::envUpdate('DB_PASSWORD', $req->db_pas);

        try {
            DB::connection()->getPdo();
            Artisan::call('migrate');
            return redirect('/admin');
        }catch (\Exception $exception){
            return redirect("setup")->withErrors(['err' => 1]);
        }


        return($req->db_user ."готово");
    }

    public static function envUpdate($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {

            file_put_contents($path, str_replace(
                $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
            ));
        }
    }
}
