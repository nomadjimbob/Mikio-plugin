<?php
/**
 * Mikio Syntax Plugin: Badge
 *
 * Syntax:  <BADGE [primary|secondary|success|danger|warning|info|light|dark] [pill]></BADGE>
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     James Collins <james.collins@outlook.com.au>
 */
 
if (!defined('DOKU_INC')) die();
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(dirname(__FILE__).'/core.php');
 
class syntax_plugin_mikioplugin_badge extends syntax_plugin_mikioplugin_core {
    public $tag                 = 'badge';
    public $defaults            = array('type' => 'primary');
    public $options             = array(
        'type' => array('primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'),
        'pill'
    );
    
    
    public function render_lexer_enter(Doku_Renderer $renderer, $data) {
        $classes = $this->buildClassString($data, array('type', 'pill'), 'badge-');

        $renderer->doc .= '<span class="badge ' . $classes . '">';
    }


    public function render_lexer_exit(Doku_Renderer $renderer, $data) {
        $renderer->doc .= '</span>'; 
    }
}
?>