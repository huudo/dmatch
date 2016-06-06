<?php
class Controller_Top extends Controller_Rest
{
	/**
	 * 2-1：仕入物件サーチ
	 */
	public function action_index()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => '仕入物件サーチ',
				'body' => 'top.tpl',
				'menu_status' => 'top',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('layout/template', array_merge($common_settings, $data)));
	}
}
