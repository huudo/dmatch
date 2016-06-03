<?php
class Controller_Grade extends Controller_Rest
{
	/**
	 * 2-4：グレード検索
	 */
	public function action_index()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'グレード検索',
				'body' => 'grade.tpl',
				'menu_status' => 'grade',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('layout/template', array_merge($common_settings, $data)));
	}
}
