<?php
class Controller_Soldoff extends Controller_Rest
{
	/**
	 * 2-5：販売済物件一覧
	 */
	public function action_index()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => '販売済物件一覧',
				'body' => 'soldoff.tpl',
				'menu_status' => 'soldoff',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('layout/template', array_merge($common_settings, $data)));
	}
}
