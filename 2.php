<?php
$arr = [
  'News1' =>'https://habr.com/ru/post/561702/',
  'News2' =>'https://habr.com/ru/company/ruvds/blog/563394/',
  'News3' =>'https://habr.com/ru/company/macloud/blog/561664/',
  'News4' =>'https://habr.com/ru/post/561702/',
];
echo '<ul>';
foreach ($arr as $key => $item) {
    echo "<li><a href=$item>$key</a></li>";
}
echo '</ul>';