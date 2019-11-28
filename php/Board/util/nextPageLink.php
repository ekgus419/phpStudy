<?php
//전체 레코드 수 구하기
$sql = "SELECT count(boardID) FROM board";
$result = $dbConnect->query($sql);

$boardTotalCount = $result->fetch_array(MYSQLI_ASSOC);
$boardTotalCount = $boardTotalCount['count(boardID)'];

//총 페이지 수
$totalPage = ceil($boardTotalCount / $numView);

//처음 페이지 이동 링크
echo "<a href='../Board/list.php?page=1'>처음</a>&nbsp;";

//이전 페이지 이동 링크
if($page != 1){
    $previousPage = $page - 1;
        echo "<a href='../Board/list.php?page={$previousPage}'>이전</a>";
    }

//현재 페이지의 앞 뒤 페이지 수 표시수
$pageTerm = 5;

//처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
$startPage = $page - $pageTerm;
//음수일 경우 처리5
if($startPage < 1){
    $startPage = 1;
}

//처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
$lastPage = $page + $pageTerm;

//마지막페이지의 수보다 클 경우 처리
if($lastPage >= $totalPage){
    $lastPage = $totalPage;
}

for($i = $startPage; $i <= $lastPage; $i++){
    $nowPageColor = 'unset';
    if($i == $page){
        $nowPageColor = 'hotpink';
    }
    echo "&nbsp<a href='../Board/list.php?page={$i}'";
    echo "style='color:{$nowPageColor}'>{$i}</a>&nbsp";
}

//다음 페이지 이동 링크
if($page != $totalPage){
    $nextPage = $page + 1;
    echo "<a href='../Board/list.php?page={$nextPage}'>다음</a>";
}

//마지막 페이지 이동 링크
echo "&nbsp;<a href='../Board/list.php?page={$totalPage}'>끝</a>";
?>