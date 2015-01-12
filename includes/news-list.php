<?php
    usort($newsList, 'sortNewsByDate');

    if (!isset($_GET['page']) || !is_numeric($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }

    if ($page < 1) {
        $page = 1;
    }


    $currentYear = false;
    $limit = 12;
    $offset = ($page - 1) * $limit;
    $total = count($newsList);
    $totalPages = ceil($total / $limit);

    $startIndex = $offset;
    $endIndex = $startIndex + $limit;

    if ($endIndex > $total) {
        $endIndex = $total;
    }

    for ($newsIndex = $startIndex; $newsIndex < $endIndex; $newsIndex++):
        $news = $newsList[$newsIndex];

        $dateInfo = parseKobaltDate($news['entry_date']);
        $newsUrl = 'page-news-detail.php?id=' . $news['entry_id'];
        ?>


 <!--       <?php if ($currentYear != $dateInfo['year']): ?> -->
 <!--       <h3><?php echo $dateInfo['year'] ?></h3> -->
 <!--       <?php endif ?> -->


    <div class="news-block">
        <a href="<?php echo $newsUrl ?>">
        <?php if (strlen($news['entry_thumbnail_img']) > 0): ?>
            <img src="images/json/News/<?php echo $news['entry_thumbnail_img'] ?>" alt="thumbnail" />
        <?php else: ?>
            <img src="images/pages/news/pages-news-archive-image.png" alt="thumbnail" />
        <?php endif ?>
        </a>
        <p><span><?php echo $news['entry_headline']; ?></span><br /><?php echo truncateText($news['entry_abstract'], 20); ?></p>
        <a href="page-news-detail.php?id=<?php echo $news['entry_id']; ?>">read more</a>
    </div>

    <?php
    $currentYear = $dateInfo['year'];
    endfor
    ?>

    <?php
    echo loadTemplateFile(APP_DIR . '/includes/pager.php', array(
        'totalPages' => $totalPages,
        'currentPage' => $page,
        'baseUrl' => $baseUrl
    ))
    ?>
