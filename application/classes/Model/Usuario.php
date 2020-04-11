<?php

class Model_Usuario extends ORM implements Model_Generic
{

    protected $_primary_key = 'id';

    protected $_table_collumns = array(
        'id' => NULL,
        'email' => NULL,
        'nomeusuario' => NULL,
        'senha' => NULL,
        'acessos' => NULL,
        'status' => NULL,
        'tipousuario_id' => NULL
    );

    protected $_belong_to = array(
        'tipousuario' => array(
            'model' => 'TipoUsuario',
            'foreign_key' => 'tipousuario_id'
        )
    );

    /**
     * Método usado para salvar e atualizar a tabela Usuário
     *
     * @param mixed $valores
     * @return int
     */
    public static function salvar($valores)
    {
        try {
            $usuario = (isset($valores['id'])) ? ORM::factory('Usuario', $valores['id']) : ORM::factory('Usuario');
            $usuario->values($valores)->save();
            return $usuario->id;
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método busca um Usuário por meio do código
     *
     * @param int $codigo
     * @return mixed
     */
    public static function buscarPorCodigo($codigo)
    {
        try {
            return ORM::factory('Usuario', $codigo)->find()->as_array();
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método apaga um Usuário por meio do código.
     *
     * @param int $codigo
     */
    public static function apagar($codigo)
    {
        try {
            ORM::factory('Usuario', $codigo)->delete();
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método retorna uma lista com todos os usuários
     *
     * @return Database_Result
     */
    public static function lista()
    {
        try {
            return ORM::factory('Usuario')->find_all();
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }
}

