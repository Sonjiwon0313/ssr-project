<body>

<?php


    session_start(); // 세션사용을 위한 세션 함수 작동

    if (!$_SESSION['number']) {
     //세션 number값이 조정되어있지 않은 경우
        $_SESSION['number'] = mt_rand(1,100); // 1부터 100 사이의 랜덤한 값 세션에 주기
    }

    if ($_GET['num']) { 
        if ($_GET['num'] > $_SESSION['number']) { // input에 들어간 값이 세션에 랜덤하게 정의된 값보다 클 경우
            echo "업";
        }
        if ($_GET['num'] < $_SESSION['number']) {// input에 들어간 값이 세션에 랜덤하게 정의된 값보다 작을 경우
            echo "다운";
        }
        if ($_GET['num'] == $_SESSION['number']) { // input에 들어간 값이 세션에 랜덤하게 정의된 값과 같을경우(맞출경우)
            echo "정답";
            unset($_SESSION['number']); //number 세션 등록 해지
        }
    }
    else {
        $_GET['num'] = 0;
    }



?>

<form action="updown2.php">
    <input name="num" value=0>
    <button type="submit">확인</button>
</form> 

</body>
