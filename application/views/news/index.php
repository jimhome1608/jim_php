

<?php foreach ($news as $news_item): ?>
        <hr/>
        <h3><?php echo $news_item['title'] ?></h3>
        <div class="main">
                <?php echo $news_item['text'] ?>
        </div>
        
        <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>
<?php endforeach ?>