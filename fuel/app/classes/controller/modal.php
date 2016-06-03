<?php
class Controller_Modal extends Controller_Rest
{
	/**
	 * XXX：メーカー・車種・型式選択
	 */
	public function action_cartype()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'メーカー・車種・型式指定',
				'body' => 'cartype.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}

	/**
	 * XXX：モデル・グレード
	 */
	public function action_model()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'モデル・グレード指定',
				'body' => 'model.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}


	/**
	 * XXX：エリア（エリア）
	 */
	public function action_area()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'エリア（エリア）',
				'body' => 'area.tpl',
				
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}

	/**
	 * XXX：エリア（都道府県）
	 */
	public function action_prefs()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'エリア（都道府県）',
				'body' => 'prefs.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}


	/**
	 * XXX：エリア（会場）
	 */
	public function action_venue()
	{
		// Smarty共通テンプレート変数
		$common_settings = array
		(
				'title' => 'エリア（会場）',
				'body' => 'venue.tpl',
		);

		// Smarty個別テンプレート変数
		$data = array
		(
				'',
		);

		return Response::forge(View_Smarty::forge('modal/'.$common_settings['body'], array_merge($common_settings, $data)));
	}
}
