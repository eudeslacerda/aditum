<?php

class Model_TipoUsuario extends ORM implements Model_Generic
{

    protected $_primary_key = 'id';

    protected $_table_collumns = array(
        'id' => NULL,
        'tipo' => NULL
    );

    private $model = 'TipoUsuario';

    protected $_has_many = array(
        'usuarios' => array(
            'model' => 'Usuario',
            'foreign_key' => 'tipousuario_id'
        )
    );

    /**
     * Método usado para salvar e atualizar a tabela TipoUsuario
     *
     * @param mixed $valores
     * @return int
     */
    public static function salvar($valores)
    {
        try {
            $usuario = (isset($valores['id'])) ? ORM::factory('TipoUsuario', $valores['id']) : ORM::factory('TipoUsuario');
            $usuario->values($valores)->create();
            return $usuario->id;
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método busca um TipoUsuario por meio do código
     *
     * @param int $codigo
     * @return mixed
     */
    public static function buscarPorCodigo($codigo)
    {
        try {
            return ORM::factory('TipoUsuario', $codigo)->find()->as_array();
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método apaga um TipoUsuario por meio do código.
     *
     * @param int $codigo
     */
    public static function apagar($codigo)
    {
        try {
            ORM::factory('TipoUsuario', $codigo)->delete();
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }
    
    /**
     * Método retorna todo os tipos de usuário
     * 
     * @return Database_Result
     */
    public static function lista(){
        try {
            return ORM::factory('TipoUsuario')->find_all();
        } catch (ORM_Validation_Exception $e) {
            echo $e->getMessage();
        }
    }
}

