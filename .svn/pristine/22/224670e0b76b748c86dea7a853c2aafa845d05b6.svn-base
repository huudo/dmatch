//ajax処理をキャッシュしないように設定(キャッシュさせたい場合は外して下さい)
$.ajaxSetup({
	cache : false
});

$(function() {

	//検索フォームの「検索」ボタン
	$("body").on("click", ".searchController a.searchController__searchBtn",
			function() {
				event.preventDefault(); // 本来のPOSTを打ち消すおまじない
				// ajaxで別ページをロード
				// 各値を入れるオブジェクト
				var obj = new Object();
				var form = $(this).attr('data-set');

				// テキストの値を取得
				$('#' + form + ' input:text').each(function() {
					obj[this.name] = this.value;
				});

				// 隠し要素の値を取得
				$('#' + form + ' input:hidden').each(function() {
					obj[this.name] = this.value;
				});

				// チェックされた値を取得（チェックボックス・ラジオボタン）
				$('#' + form + ' input:checked').each(function() {
					obj[this.name] = this.value;
				});

				// チェックされた値を取得（チェックボックス・ラジオボタン）
				$('#' + form + ' select').each(function() {
					obj[this.name] = this.value;
				});

				var url = $('#' + form).attr('action');

				$.ajax({
					type : "POST",
					dataType : 'html',
					data : {
						'date' : obj,
					},
					url : url,
					success : function(response) {
						$(".resultArea").show().html(response);
					}
				});
				return false;
			});
});
