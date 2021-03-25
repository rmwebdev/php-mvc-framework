<?php

class View
{
    protected $_head, $_body, $_siteTitle = SITE_TITLE, $_outputBuffer, $_layout = DEFAULT_LAYOUT;

    public function __construct()
    {
    }

    public function render($viewName)
    {
        $viewAry = explode('/', $viewName);
        $viewString = implode(DS, $viewAry);
        if (file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
            include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
            include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php');
        } else {
            die('The view \"' . $viewName . '\" does not exist.');
        }
    }

    public function content($type)
    {
        if ($type == 'head') {
            return $this->_head;
        } elseif ($type == 'body') {
            return $this->_body;
        } else {
            return false;
        }
    }

    /**
     * starts the output buffer for the head or body
     * @method start
     * @param  string $type can be head or body
     */
    public function start($type)
    {
        // if(empty($type)) die('you must define a type');
        $this->_outputBuffer = $type;
        ob_start();
    }
    /**
     * echos the output buffer in the layout
     * @method end
     * @return string rendered html for head or body
     */
    public function end()
    {
        if ($this->_outputBuffer == 'head') {
            $this->_head = ob_get_clean();
        } elseif ($this->_outputBuffer == 'body') {
            $this->_body = ob_get_clean();
        } else {
            die('You must first run the start method.');
        }
    }
    /**
     * Getter for the site title
     * @method siteTitle
     * @return string    site title set in the view object
     */
    public function siteTitle()
    {
        if ($this->_siteTitle == '') return SITE_TITLE;
        return $this->_siteTitle;
    }
    /**
     * Sets the page title
     * @method setSiteTitle
     * @param  string   $title used for the title
     */
    public function setSiteTitle($title)
    {
        $this->_siteTitle = $title;
    }
    /**
     * sets the layout to be loaded
     * @method setLayout
     * @param  string    $path name of layout
     */
    public function setLayout($path)
    {
        $this->_layout = $path;
    }
}
