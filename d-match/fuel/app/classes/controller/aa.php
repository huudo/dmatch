<?php
class Controller_Aa extends Controller_Rest
{
	/**
	 * 2-3：AA相場検索（条件指定）
	 * メニューからの遷移時
	 */
	public function get_index()
	{
		//  Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'AA相場検索',
				'body' => 'aa.tpl',
				'list_js' => array
				(
						'action.js',
				),
				'menu_status' => 'aa',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);
		return Response::forge(View_Smarty::forge('layout/template', array_merge($common_settings, $data)));
	}


	/**
	 * 2-3：AA相場検索（条件指定・結果表示）
	 * 別画面からの遷移時
	 */
	public function post_index()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'AA相場検索',
				'body' => 'aa.tpl',
				'result' => 'result_aa.tpl',
				'list_js' => array
				(
						'action.js',
				),
				'menu_status' => 'aa',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('layout/template', array_merge($common_settings, $data)));
	}



	/**
	 * 2-3：AA相場検索（結果表示）
	 * 結果のみを変更する時
	 */
	public function post_search()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'AA相場検索',
				'body' => 'result_aa.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);
		return Response::forge(View_Smarty::forge('./result/' . $common_settings['body'], array_merge($common_settings, $data)));
	}


	/**
	 * 2-2：検索履歴（モーダル）
	 */
	public function action_history()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => '検索履歴',
				'body' => 'history.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}


	/**
	 * 2-2：保存条件（モーダル）
	 */
	public function action_save()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => '保存条件',
				'body' => 'save.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}

	/**
	 * 2-3：保存条件（画像）
	 */
	public function action_carimg()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => '画像',
				'body' => 'carimg.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}
}
