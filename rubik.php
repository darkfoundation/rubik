<?php
function init() {
    $im=imagecreate(745, 360);
    $red=imagecolorallocate($im, 255, 0, 0); $blue=imagecolorallocate($im, 0, 0, 255);
    $green=imagecolorallocate($im, 0, 128, 0); $white=imagecolorallocate($im, 255, 255, 255);
    $yellow=imagecolorallocate($im, 255, 255, 0); $orange=imagecolorallocate($im, 255, 128, 0);
    $up=array($white, $white, $white, $white, $white, $white, $white, $white, $white);
    $down=array($yellow, $yellow, $yellow, $yellow, $yellow, $yellow, $yellow, $yellow, $yellow);
    $left=array($red, $red, $red, $red, $red, $red, $red, $red, $red);
    $right=array($orange, $orange, $orange, $orange, $orange, $orange, $orange, $orange, $orange);
    $front=array($blue, $blue, $blue, $blue, $blue, $blue, $blue, $blue, $blue);
    $back=array($green, $green, $green, $green, $green, $green, $green, $green, $green);
    $cube=array($up, $down, $left, $right, $front, $back, $im);
    return $cube;
}

function draw($cube) {
    $im=$cube[6]; imagefill($im, 0, 0, imagecolorallocate($im, 0, 0, 0));
    $gray=imagecolorallocate($im, 100, 100, 100); $num=imagecolorallocate($im, 255, 255, 255);
    $up=$cube[0]; $down=$cube[1]; $left=$cube[2]; $right=$cube[3]; $front=$cube[4]; $back=$cube[5];
    imagefilledpolygon($im, [25, 75, 75, 55, 125, 75, 75, 95], 4, $up[0]);
    imagefilledpolygon($im, [80, 53, 130, 33, 180, 53, 130, 73], 4, $up[1]);
    imagefilledpolygon($im, [135, 31, 185, 11, 235, 31, 185, 51], 4, $up[2]);
    imagefilledpolygon($im, [80, 97, 130, 77, 180, 97, 130, 117], 4, $up[3]);
    imagefilledpolygon($im, [135, 75, 185, 55, 235, 75, 185, 95], 4, $up[4]);
    imagefilledpolygon($im, [190, 53, 240, 33, 290, 53, 240, 73], 4, $up[5]);
    imagefilledpolygon($im, [135, 119, 185, 99, 235, 119, 185, 139], 4, $up[6]);
    imagefilledpolygon($im, [190, 97, 240, 77, 290, 97, 240, 117], 4, $up[7]);
    imagefilledpolygon($im, [245, 75, 295, 55, 345, 75, 295, 95], 4, $up[8]);
    imagefilledpolygon($im, [22, 78, 72, 98, 72, 163, 22, 143], 4, $left[0]);
    imagefilledpolygon($im, [77, 100, 127, 120, 127, 185, 77, 165], 4, $left[1]);
    imagefilledpolygon($im, [132, 122, 182, 142, 182, 207, 132, 187], 4, $left[2]);
    imagefilledpolygon($im, [22, 147, 72, 167, 72, 232, 22, 212], 4, $left[3]);
    imagefilledpolygon($im, [77, 169, 127, 189, 127, 254, 77, 234], 4, $left[4]);
    imagefilledpolygon($im, [132, 191, 182, 211, 182, 276, 132, 256], 4, $left[5]);
    imagefilledpolygon($im, [22, 216, 72, 236, 72, 301, 22, 281], 4, $left[6]);
    imagefilledpolygon($im, [77, 238, 127, 258, 127, 323, 77, 303], 4, $left[7]);
    imagefilledpolygon($im, [132, 260, 182, 280, 182, 345, 132, 325], 4, $left[8]);
    imagefilledpolygon($im, [187, 142, 237, 122, 237, 187, 187, 207], 4, $front[0]);
    imagefilledpolygon($im, [242, 120, 292, 100, 292, 165, 242, 185], 4, $front[1]);
    imagefilledpolygon($im, [297, 98, 347, 78, 347, 143, 297, 163], 4, $front[2]);
    imagefilledpolygon($im, [187, 211, 237, 191, 237, 256, 187, 276], 4, $front[3]);
    imagefilledpolygon($im, [242, 189, 292, 169, 292, 234, 242, 254], 4, $front[4]);
    imagefilledpolygon($im, [297, 167, 347, 147, 347, 212, 297, 232], 4, $front[5]);
    imagefilledpolygon($im, [187, 280, 237, 260, 237, 325, 187, 345], 4, $front[6]);
    imagefilledpolygon($im, [242, 258, 292, 238, 292, 303, 242, 323], 4, $front[7]);
    imagefilledpolygon($im, [297, 236, 347, 216, 347, 281, 297, 301], 4, $front[8]);
    imagefilledpolygon($im, [398, 281, 448, 261, 498, 281, 448, 301], 4, $down[0]);
    imagefilledpolygon($im, [453, 259, 503, 239, 553, 259, 503, 279], 4, $down[1]);
    imagefilledpolygon($im, [508, 237, 558, 217, 608, 237, 558, 257], 4, $down[2]);
    imagefilledpolygon($im, [453, 303, 503, 283, 553, 303, 503, 323], 4, $down[3]);
    imagefilledpolygon($im, [508, 281, 558, 261, 608, 281, 558, 301], 4, $down[4]);
    imagefilledpolygon($im, [563, 259, 613, 239, 663, 259, 613, 279], 4, $down[5]);
    imagefilledpolygon($im, [508, 325, 558, 305, 608, 325, 558, 345], 4, $down[6]);
    imagefilledpolygon($im, [563, 303, 613, 283, 663, 303, 613, 323], 4, $down[7]);
    imagefilledpolygon($im, [618, 281, 668, 261, 718, 281, 668, 301], 4, $down[8]);
    imagefilledpolygon($im, [395, 75, 445, 55, 445, 120, 395, 140], 4, $right[0]);
    imagefilledpolygon($im, [450, 53, 500, 33, 500, 98, 450, 118], 4, $right[1]);
    imagefilledpolygon($im, [505, 31, 555, 11, 555, 76, 505, 96], 4, $right[2]);
    imagefilledpolygon($im, [395, 144, 445, 124, 445, 189, 395, 209], 4, $right[3]);
    imagefilledpolygon($im, [450, 122, 500, 102, 500, 167, 450, 187], 4, $right[4]);
    imagefilledpolygon($im, [505, 100, 555, 80, 555, 145, 505, 165], 4, $right[5]);
    imagefilledpolygon($im, [395, 213, 445, 193, 445, 258, 395, 278], 4, $right[6]);
    imagefilledpolygon($im, [450, 191, 500, 171, 500, 236, 450, 256], 4, $right[7]);
    imagefilledpolygon($im, [505, 169, 555, 149, 555, 214, 505, 234], 4, $right[8]);
    imagefilledpolygon($im, [560, 11, 610, 31, 610, 96, 560, 76], 4, $back[0]);
    imagefilledpolygon($im, [615, 33, 665, 53, 665, 118, 615, 98], 4, $back[1]);
    imagefilledpolygon($im, [670, 55, 720, 75, 720, 140, 670, 120], 4, $back[2]);
    imagefilledpolygon($im, [560, 80, 610, 100, 610, 165, 560, 145], 4, $back[3]);
    imagefilledpolygon($im, [615, 102, 665, 122, 665, 187, 615, 167], 4, $back[4]);
    imagefilledpolygon($im, [670, 124, 720, 144, 720, 209, 670, 189], 4, $back[5]);
    imagefilledpolygon($im, [560, 149, 610, 169, 610, 234, 560, 214], 4, $back[6]);
    imagefilledpolygon($im, [615, 171, 665, 191, 665, 256, 615, 236], 4, $back[7]);
    imagefilledpolygon($im, [670, 193, 720, 213, 720, 278, 670, 258], 4, $back[8]);
    imagefilledellipse($im, 185, 75, 30, 30, $gray);
    imagestring($im, 5, 182, 68, 'U', $num);
    imagefilledellipse($im, 102, 211, 30, 30, $gray);
    imagestring($im, 5, 99, 204, 'L', $num);
    imagefilledellipse($im, 268, 211, 30, 30, $gray);
    imagestring($im, 5,265, 204, 'F', $num);
    imagefilledellipse($im, 475, 144, 30, 30, $gray);
    imagestring($im, 5, 472, 137, 'R', $num);
    imagefilledellipse($im, 640, 144, 30, 30, $gray);
    imagestring($im, 5, 637, 137, 'B', $num);
    imagefilledellipse($im, 558, 281, 30, 30, $gray);
    imagestring($im, 5, 555, 274, 'D', $num);
    return $im;
}

function u($cube) {
    $up=&$cube[0]; $down=&$cube[1]; $left=&$cube[2]; $right=&$cube[3]; $front=&$cube[4]; $back=&$cube[5];
    $temp=$up[0]; $up[0]=$up[6]; $up[6]=$up[8]; $up[8]=$up[2]; $up[2]=$temp;
    $temp=$up[1]; $up[1]=$up[3]; $up[3]=$up[7]; $up[7]=$up[5]; $up[5]=$temp;
    $temp=$left[0]; $left[0]=$front[0]; $front[0]=$right[0]; $right[0]=$back[0]; $back[0]=$temp;
    $temp=$left[1]; $left[1]=$front[1]; $front[1]=$right[1]; $right[1]=$back[1]; $back[1]=$temp;
    $temp=$left[2]; $left[2]=$front[2]; $front[2]=$right[2]; $right[2]=$back[2]; $back[2]=$temp;
    return $cube;
}

function d($cube) {
    $up=&$cube[0]; $down=&$cube[1]; $left=&$cube[2]; $right=&$cube[3]; $front=&$cube[4]; $back=&$cube[5];
    $temp=$down[0]; $down[0]=$down[6]; $down[6]=$down[8]; $down[8]=$down[2]; $down[2]=$temp;
    $temp=$down[1]; $down[1]=$down[3]; $down[3]=$down[7]; $down[7]=$down[5]; $down[5]=$temp;
    $temp=$front[6]; $front[6]=$left[6]; $left[6]=$back[6]; $back[6]=$right[6]; $right[6]=$temp;
    $temp=$front[8]; $front[8]=$left[8]; $left[8]=$back[8]; $back[8]=$right[8]; $right[8]=$temp;
    $temp=$front[7]; $front[7]=$left[7]; $left[7]=$back[7]; $back[7]=$right[7]; $right[7]=$temp;
    return $cube;
}

function l($cube) {
    $up=&$cube[0]; $down=&$cube[1]; $left=&$cube[2]; $right=&$cube[3]; $front=&$cube[4]; $back=&$cube[5];
    $temp=$left[0]; $left[0]=$left[6]; $left[6]=$left[8]; $left[8]=$left[2]; $left[2]=$temp;
    $temp=$left[1]; $left[1]=$left[3]; $left[3]=$left[7]; $left[7]=$left[5]; $left[5]=$temp;
    $temp=$front[0]; $front[0]=$up[0]; $up[0]=$back[8]; $back[8]=$down[6]; $down[6]=$temp;
    $temp=$front[3]; $front[3]=$up[3]; $up[3]=$back[5]; $back[5]=$down[7]; $down[7]=$temp;
    $temp=$front[6]; $front[6]=$up[6]; $up[6]=$back[2]; $back[2]=$down[8]; $down[8]=$temp;
    return $cube;
}

function r($cube) {
    $up=&$cube[0]; $down=&$cube[1]; $left=&$cube[2]; $right=&$cube[3]; $front=&$cube[4]; $back=&$cube[5];
    $temp=$right[0]; $right[0]=$right[6]; $right[6]=$right[8]; $right[8]=$right[2]; $right[2]=$temp;
    $temp=$right[1]; $right[1]=$right[3]; $right[3]=$right[7]; $right[7]=$right[5]; $right[5]=$temp;

    $temp=$front[8]; $front[8]=$down[2]; $down[2]=$back[0]; $back[0]=$up[8]; $up[8]=$temp;
    $temp=$front[5]; $front[5]=$down[1]; $down[1]=$back[3]; $back[3]=$up[5]; $up[5]=$temp;
    $temp=$front[2]; $front[2]=$down[0]; $down[0]=$back[6]; $back[6]=$up[2]; $up[2]=$temp;
    return $cube;
}

function f($cube) {
    $up=&$cube[0]; $down=&$cube[1]; $left=&$cube[2]; $right=&$cube[3]; $front=&$cube[4]; $back=&$cube[5];
    $temp=$front[0]; $front[0]=$front[6]; $front[6]=$front[8]; $front[8]=$front[2]; $front[2]=$temp;
    $temp=$front[1]; $front[1]=$front[3]; $front[3]=$front[7]; $front[7]=$front[5]; $front[5]=$temp;
    $temp=$up[8]; $up[8]=$left[2]; $left[2]=$down[6]; $down[6]=$right[6]; $right[6]=$temp;
    $temp=$up[7]; $up[7]=$left[5]; $left[5]=$down[3]; $down[3]=$right[3]; $right[3]=$temp;
    $temp=$up[6]; $up[6]=$left[8]; $left[8]=$down[0]; $down[0]=$right[0]; $right[0]=$temp;
    return $cube;
}

function b($cube) {
    $up=&$cube[0]; $down=&$cube[1]; $left=&$cube[2]; $right=&$cube[3]; $front=&$cube[4]; $back=&$cube[5];
    $temp=$back[0]; $back[0]=$back[6]; $back[6]=$back[8]; $back[8]=$back[2]; $back[2]=$temp;
    $temp=$back[1]; $back[1]=$back[3]; $back[3]=$back[7]; $back[7]=$back[5]; $back[5]=$temp;
    $temp=$up[0];$up[0]=$right[2]; $right[2]=$down[2]; $down[2]=$left[6]; $left[6]=$temp;
    $temp=$up[1];$up[1]=$right[5]; $right[5]=$down[5]; $down[5]=$left[3]; $left[3]=$temp;
    $temp=$up[2];$up[2]=$right[8]; $right[8]=$down[8]; $down[8]=$left[0]; $left[0]=$temp;
    return $cube;
}

$c=init(); if (!isset($_GET['turns'])) {
    $i=draw($c); header("Content-type: image/gif");
    imagegif($i); imagedestroy($i); die;
}
preg_match_all('[u|d|l|r|f|b|2|-]', strtolower($_GET['turns']), $t);
$list=''; $prev='';
foreach($t[0] as $turn) {
    if ($turn!='2' && $turn!='-') {
        $list.=$turn; $prev=$turn;
    } else {
        if ($prev!='') {
            if ($turn=='2') { $list.=$prev; $prev=''; }
            elseif ($turn=='-') { $list.=$prev.$prev; $prev=''; }
        }
    }
}
if ($list=='') {
    $i=draw($c); header("Content-type: image/gif");
    imagegif($i); imagedestroy($i); die;
}
foreach(str_split($list) as $turn) {
    switch ($turn) {
        case 'u':
            $c=u($c);
        break;
        case 'd':
            $c=d($c);
        break;
        case 'f':
            $c=f($c);
        break;
        case 'b':
            $c=b($c);
        break;
        case 'l':
            $c=l($c);
        break;
        case 'r':
            $c=r($c);
        break; 
    }
}
$i=draw($c);
header("Content-type: image/gif");
imagegif($i); imagedestroy($i);