<?php
session_start();
//データベースなどの設定
require_once('./core/setup.php');

////////////////////////////////////////
//sql文のphpを記入
/////////////////////////////////////
require_once('./core/test/mysql_select.php');

////////////////////////////////////////
//mysqlの切断
/////////////////////////////////////
require_once('./core/mysqldown.php');

////////////////////////////////////////
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
////////////////////////////////////
require_once("./view/public.php");


//////////////////////////////////////////
//head内の文章入力場所
//////////////////////////////////////////

//ファイルの階層を記入
$level = './';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/index.css" type="text/css" />
';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = '';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '';

html_header();
html_nav();
?>
<!--ここからコンテンツ-->
<article>
  <?= $user_first_name ?>
</article>
<!--ここまででコンテンツ-->
<?php html_footer(); ?>
</div>	<!--wrap終了-->
</body>
</html>
