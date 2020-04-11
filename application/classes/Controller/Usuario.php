<?php

class Controller_Usuario extends Controller_Site
{

    public function action_lista()
    {
        $this->icone = Kohana::message('icone', 'usuario.lista');
        $this->titulo = Kohana::message('usuario', 'usuario.plural');
        $this->action_template = View::factory('template/app');
        $this->conteudo = View::factory('usuario/lista')->set('usuarios', Model_Usuario::lista());
    }

    public function action_novo()
    {
        $this->icone = Kohana::message('icone', 'usuario.novo');
        $this->titulo = Kohana::message('botao', 'novo.masculino') . " " . Kohana::message('usuario', 'usuario.singular');
        $this->action_template = View::factory('template/app');
        $this->conteudo = View::factory('usuario/novo')->set('tipousuarios', Model_TipoUsuario::lista());
        if (HTTP_Request::POST == $this->request->method()) {
            if (Model_Usuario::salvar($this->request->post())) {
                echo "Salvo!";
            } else {
                    
            }
        }
    }
}

