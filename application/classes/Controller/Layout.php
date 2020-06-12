<?php
abstract class Controller_Layout extends Controller_Template{
    /**
     * @var  string|View  Page template, wrapper for action content.
     */
    public $template = 'template';
    
    /**
     * Recebe a view a ser carregada
     * @var string
     */
    public $page;
    
    public $appname;
    
    public $footer;
    
    public $menu;
    
    public $layout;
    
    public $icone;
    
    public $titulo;
    
    public $conteudo;
    
    public $barraBotao;
    
    public $barraLista;
    
    public $acao;
    
    /**
     * @var  string|View  Action content template.
     */
    public $action_template;
    /**
     * Init View for action template and bind as 'action_content' in layout template.
     * @return  void
     */    
    public function init_action_template()
    {        
        if ( ! $this->action_template)
        {
            // Auto set name of action template based on current controller and action.
            $this->action_template = [
                $this->request->controller(),
                $this->request->action()
            ];
            if ($this->request->directory())
            {
                array_unshift($this->action_template, $this->request->directory());
            }
            $this->action_template = implode(DIRECTORY_SEPARATOR, $this->action_template);
        }
        // Create View for action template.
        $this->action_template = new View($this->action_template);
        // Wrap action template in layout.
        $this->template->bind('main_content', $this->action_template);
    }
    /**
     * Automatically executed before the controller action.
     * @return  void
     */
    public function before()
    {
        parent::before();
        
        $this->appname = Kohana::message('app','app.name');
        $this->footer = Kohana::message('app','app.footer');
        $this->menu = View::factory('template/menu');
        $this->barraBotao = View::factory('template/barrabotao');
        $this->barraLista = View::factory('template/barralista');
        $this->acao = View::factory('template/acao');
        
        View::bind_global('page', $this->page);
        View::bind_global('appname', $this->appname);
        View::bind_global('footer', $this->footer);
        View::bind_global('menu', $this->menu);
        View::bind_global('layout', $this->layout);
        View::bind_global('icone', $this->icone);
        View::bind_global('titulo', $this->titulo);
        View::bind_global('conteudo', $this->conteudo);
        View::bind_global('barraBotao', $this->barraBotao);
        View::bind_global('barraLista', $this->barraLista);
        View::bind_global('acao', $this->acao);
        
        // Set action template after parent code.
        if ($this->auto_render)
        {
            $this->init_action_template();
        }
    }
}

