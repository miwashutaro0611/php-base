<?php

//sql文
$SQL = "
SELECT select_name
FROM table_name

";
// プリペアドステートメントを作成します
if ($stmt = mysqli_prepare($Link,$SQL)) {

//マーカにパラメータをバインドします
  // mysqli_stmt_bind_param($stmt, "s", $friendid);

//クエリを実行します
 mysqli_stmt_execute($stmt);

//結果変数をバインドします
 mysqli_stmt_bind_result($stmt,$koumoku);

//クライアントのバッファに結果セットを保存
 mysqli_stmt_store_result($stmt);

// 値を取得します(繰り返し)
// while(mysqli_stmt_fetch($stmt)){
//   $TEST[] = $friend_first_name;
// }
// 値を取得します(一つのみ)
while(mysqli_stmt_fetch($stmt));
//ステートメントを閉じます
 mysqli_stmt_close($stmt);
}
?>
