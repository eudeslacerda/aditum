<?php

interface Model_Generic
{
    public static function salvar($entradas);
    public static function buscarPorCodigo($codigo);
    public static function apagar($entradas);
    public static function lista();
        
}

