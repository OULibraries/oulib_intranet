<?php

/**
 * @file
 * Default simple view template to display a group of summary lines.
 *
 * This wraps items in a span if set to inline, or a div if not.
 *
 * @ingroup views_templates
 */
?>
<?php
$total = 0;
$letters = range ('A', 'Z');
foreach($rows as $id => $row){
  $existing_letters[] = $row->link;
  $urls[$row->link] = $row->url;
  $counts[$row->link] = $row->count;
  $total += $row->count;
}
//add ALL at end
$letters[] = "Clear";
$existing_letters[] = "Clear";
$urlPieces = explode("/", $row->url);
$urlPieces[count($urlPieces)-1] = "all";
$urls['Clear'] = implode("/", $urlPieces);
$counts['Clear'] = $total;

print '<div class="views-summary views-summary-unformatted">';
foreach($letters as $letter){
  if(in_array($letter, $existing_letters)){
    $nav[] = '<span class="result"><a href=' . $urls[$letter] . '>' . $letter . '</a></span>';
  }
  else {
    $nav[] = '<span class="no-result">' . $letter . '</span>';
  }
}
print implode(' | ', $nav);
print '</div>';




?>