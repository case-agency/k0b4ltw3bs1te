<div class="job-role">
    <?php foreach ($jobs as $job) { ?>
        <p><a href="<?= str_replace("/", "", $job["link"]); ?>">
           <span><?= $job["date_published"]; ?></span><br /><?= $job["position"]; ?>, <?= $job["company_name"]; ?> - <?= $job["location"]; ?>
        </a></p>
    <?php } ?>
</div>