<?php
/**
 * ブランク表示コントローラーのテンプレート
 *
 *
 * @copyright	Tomoyuki Negishi and ZubaPitaTech Y.K.
 * @author		Tomoyuki Negishi <tomoyu-n@zubapita.jp>
 * @license	http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @package	Min - Minimam INter framework for PHP
 * @version	0.1
 */
class AboutCtl extends AjaxCtl
{

	/**
	 * viewの初期化
	 *
	 * @return void
	 */
	public function __construct() {
		$_ = $this;
		parent::__construct();

		// viewの初期化
		$_->initView();
	}

	/**
	 * index アクション
	 */
	function index() {
		$_ = $this;


		// viewの表示
		$_->view->display($_->view_template);

	}

	/**
	 * プライバシーポリシー アクション
	 */
	function privacy() {
		$_ = $this;


		// viewの表示
		$_->view->display($_->view_template);

	}

	/**
	 * お問い合わせ
	 */
	function inquiry() {
		$_ = $this;


		// viewの表示
		$_->view->display($_->view_template);

	}

	/**
	 * スタッフ募集
	 */
	function recruit() {
		$_ = $this;


		// viewの表示
		$_->view->display($_->view_template);

	}

}

