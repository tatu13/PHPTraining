cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
  alert('隠しコマンドを確認。管理者認証完了。');
  alert('ようこそ、管理者様。');
  window.location.href = "control.php";
});


cheet('g o o d b y e', function () {
　alert('さようなら！');
  $('body').animate({ opacity: "0"}, 3600);
  cheet('h e l l o', function () {
  　alert('こんにちは！');
    $('body').animate({ opacity: "1"}, 3600);
  });
});

cheet('c h i c k e n', function () {
　alert('チキン食べる？');
    $("#chicken").css({
        "background-image": 'url("original.gif")',
        "background-repeat": "no-repeat",
        "background-attachment": "fixed",
        "background-position": "left bottom",
        "transition": "1s",
        "opacity":"1"
    });
    cheet('i m f u l l', function () {
        $.when(
            alert('ごちそうさま。'),
            $('#chicken').animate({ opacity: "0"}, 1500)
        ).done(function(){
            setTimeout(function(){
                $("#chicken").css({
                    "background-image": '',
                    "background-repeat": "",
                    "background-attachment": "",
                    "background-position": "",
                    "transition": ""
                });
            },1000);
        });
    });
    // $("#chicken").css({
    //     "background-image": 'url("original.gif")',
    //     "background-repeat": "no-repeat",
    //     "background-attachment": "fixed",
    //     "background-position": "left bottom",
    //     "transition": "60s"
    // });
});
