<?php
$arr = [
    ['dina', 35],
    ['rudi', 37, 'klaten', 'jawa tengah'],
    ['dina', 35],
];

foreach ($arr as $val) {
    echo "nama " . $val[0] . "<br>";
    echo "umur " . $val[0] . "<br>";
    // echo "nama " . $val[2]. "<br>"; ERROR 

}
echo "<br> ini cara kedua <br>";
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo "Nama " . $arr[$i][$j] . "<br>";
    }
}
