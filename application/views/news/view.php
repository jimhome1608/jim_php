<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
echo '<br>'.base_url('/index.php/news');
?>
<p><a href="<?php echo base_url('/index.php/news'); ?>"><< Back to News</a></p>
