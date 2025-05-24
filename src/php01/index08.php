<?php
$people = array(
    'Taro' => '25歳men',
    'Jiro' => '20歳men',
    'hanako' => '16歳women'
);

foreach ($people as $person => $name){
    print $person . "(" . $name . ")" . '<br />';
}


$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
