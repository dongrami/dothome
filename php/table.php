<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <header class="w3-container w3-teal">
    <h2>테이블만들기</h2>
    <h5>생성할 테이블의 행과 열을 입력해 주세요.</h5>
    </header>
    <section>
    <form name="table_form" action="table_res.php" method="GET">
    <table class="w3-table w3-bordered w3-hoverable">
    <tr>
    <td style="width:20%">행 갯수</td>
    <td>
    <select class="w3-select" name="row">
    <? for($i=1; $i<=10; $i++){?>
    <option value="<? echo $i;?>"><? echo $i; ?></option><? } ?>
    </select>
    </td>
    </tr>
    <tr>
    <td style="width:20%">열 갯수</td>
    <td>
    <select class="w3-select" name="col">
    <? for($i=1; $i<=10; $i++){?>
    <option value="<? echo $i;?>"><? echo $i; ?></option><? } ?>
    </select>
    </td>
    </tr>
    </table>
    <div class="w3-center w3-margin">
        <button type="submit" class="w3-button w3-teal">확인</button>
    </div>
    </form>
    </section>
</body>
</html>