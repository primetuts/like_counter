<div id="error"></div>
<div id="content" style="margin-top:10px; ">
    <?php
    print_r($likes);
    ?>  
    <?php  foreach($likes as $row): ?>
        <p>
            <span class="down_file">Click to download the <?= $row['name']?> source code:</span>
            <a href="http://www.tekytalk.com/downloads/<?= $row['file_name']?>.zip" class="file_name"><?= $row['file_name']?></a>
            <span class="project_id"><?= $row['id'] ?></span>    
            <button class="like">like</button>
            <span class="num_likes"><?php echo $row['likes'] = empty($row['likes']) ?  0 : $row['likes'];  ?></span> like this application.
    
        </p>
    <?php endforeach; ?>  
    
</div>
