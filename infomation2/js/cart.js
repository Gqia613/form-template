// var xhr = new XMLHttpRequest();

// var xhr = new XMLHttpRequest();

// xhr.open('POST', 'top.php');
// xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
// xhr.send();

// xhr.onreadystatechange = function () {

//   if (xhr.readyState === 4 && xhr.status === 200) {

//     //データを取得した後の処理を書く
//   }
// }


// $.ajax({
//   url: 'cart.php',
//   type: 'POST',

//   //通信状態に問題がないかどうか
//   success: function (data) {

//     //データ取得処理を書く

//   },
//   //通信エラーになった場合の処理
//   error: function (err) {

//     //エラー処理を書く

//   }
// });

var postdata = {
  "address": "東京都",
  "name": "山田"
}
$.post({
  //ここでデータの送信先URLを指定します。
  "cart.php?",
  postdata,
  //処理
  function (data) {}
});
