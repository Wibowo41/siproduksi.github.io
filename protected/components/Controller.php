<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public function get_rnd_iv($iv_len)
        {
        $iv = '';
        while ($iv_len-- > 0) {
        $iv .= chr(mt_rand() & 0xff);
        }
        return $iv;
        }
        
        public function base64_encrypt($plain_text, $password, $iv_len = 16)
        {
        $plain_text .= "\x13";
        $n = strlen($plain_text);
        if ($n % 16) $plain_text .= str_repeat("\0", 16 - ($n % 16));
        $i = 0;
        $enc_text = $this->get_rnd_iv($iv_len);
        $iv = substr($password ^ $enc_text, 0, 512);
        while ($i < $n) {
        $block = substr($plain_text, $i, 16) ^ pack('H*', md5($iv));
        $enc_text .= $block;
        $iv = substr($block . $iv, 0, 512) ^ $password;
        $i += 16;
        }
        $hasil=base64_encode($enc_text);
        return str_replace('+', '@', $hasil);
        }
        
        function base64_decrypt($enc_text, $password, $iv_len = 16)
        {
        $enc_text = str_replace('@', '+', $enc_text);
        $enc_text = base64_decode($enc_text);
        $n = strlen($enc_text);
        $i = $iv_len;
        $plain_text = '';
        $iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
        while ($i < $n) {
        $block = substr($enc_text, $i, 16);
        $plain_text .= $block ^ pack('H*', md5($iv));
        $iv = substr($block . $iv, 0, 512) ^ $password;
        $i += 16;
        }
        return preg_replace('/\\x13\\x00*$/', '', $plain_text);
        }
        
        public function key()
        {
        $key = 'm4d4jaya2020';
        return $key;
        }
}