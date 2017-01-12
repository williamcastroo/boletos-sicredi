<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositorios\RepositorioBoletos as RepositorioBoletos;

class BoletoController extends Controller
{

    /**
     * @var mixed $repositorioBoletos Instancia do repositorio com a logica operacional
     */
    protected $repositorioBoletos;

    /**
     * Construtor recebendo instancia do Repositorio de Boletos
     */
    function __construct(RepositorioBoletos $repositorio)
    {
        $this->repositorioBoletos = $repositorio;
    }


    /**
     * Rota para teste da geracao do pdf
     */
    public function testeBoletoPDF()
    {
        return $this->repositorioBoletos->testeBoletoPDF();
    }

    /**
     * Rota para teste da geracao do html
     */
    public function testeBoletoHTML()
    {
        return $this->repositorioBoletos->testeBoletoHTML();
    }

    /**
     * Rota para teste da geracao da remessa
     */
    public function testeBoletoRemessa()
    {
        return $this->repositorioBoletos->testeBoletoRemessa();
    }

}