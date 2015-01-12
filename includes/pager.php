<?php
if ($totalPages <= 1) {
  return;
}
?>

<div class="pager">
  <?php if ($currentPage > 1): ?>
    <a href="<?php echo str_replace('{page}', $currentPage - 1, $baseUrl) ?>" class="pager_previous">Previous</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
  <?php endif ?>

  <?php for ($i = 1; $i <= $totalPages; $i++): ?>
    <?php if ($i == $currentPage): ?>
      <strong class="pager_active"><?php echo $i; ?></strong> 
    <?php else: ?>
      <a href="<?php echo str_replace('{page}', $i, $baseUrl) ?>"><?php echo $i; ?></a> 
    <?php endif ?>

  <?php endfor ?>

  <?php if ($currentPage < $totalPages): ?>
    &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?php echo str_replace('{page}', $currentPage + 1, $baseUrl) ?>" class="pager_next">Next</a>
  <?php endif ?>
</div>