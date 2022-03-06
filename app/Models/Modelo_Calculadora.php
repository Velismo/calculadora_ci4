<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo_Calculadora extends Model
{
    public function calculo($digito1, $digito2, $operador){
        switch($operador) {
            case '+':
                return $resultado= $digito1+$digito2;
                break;
            case '-':
                return $resultado= $digito1-$digito2;
                break;
            case '*':
                return $resultado= $digito1*$digito2;
                break;
            case '/':
                return $resultado= $digito1/$digito2;
                break;
            default:
                return '';
        }
    }
}