<?php
class Controller_Setting extends Controller_Rest
{
	/**
	 * 2-6：設定
	 */
	public function action_index()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => '設定',
				'body' => 'setting.tpl',
				'menu_status' => 'setting',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('layout/template', array_merge($common_settings, $data)));
	}
}
