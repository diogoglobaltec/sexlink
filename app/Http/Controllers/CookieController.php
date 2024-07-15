<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{


    /**
     * Cria um novo Cookie
     *
     * @return void
     */
    public function _setCookie(){
        Cookie::queue('cookie_name', 'My Laravel Cookie', 3);

        Cookie::queue('other_cookie', 'Other Laravel Cookie', 3);
    }

    /**
     * Verifica se um Cookie existe e retorna o seu valor
     *
     * @return void
     */
    public function _getCookie()
    {
        if (Cookie::has('cookie_name')) {

            $cookieValue = Cookie::get('cookie_name');

            return response()->json($cookieValue);
        }

        return response()->json('Cookie not exists');
    }

    /**
     * Remove um Cookie
     *
     * @return void
     */
    public function _deleteCookie()
    {
        Cookie::queue(Cookie::forget('cookie_name'));
    }


}
