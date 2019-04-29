<?php
function dd($data) {
  die(var_dump($data));
}

function section($options) {
  $sections = $options['sections'] ?? [];
  $id = $options['id'] ?? '';
  $text = $options['title'] ?? '';
?>

<div class="ref-container">
  <h3 id="<?=$id?>"><a href="#<?=$id?>"><?=$text?></a></h3>
  <?php
    foreach ($sections as $section) {
      if ($section['type'] === 'h4') echo '<h4>'.$section['text'].'</h4>';
      if ($section['type'] === 'p') echo '<p>'.$section['text'].'</p>';
      if ($section['type'] === 'table') {
        echo '<table>';
        foreach ($section['rows'] as $tableRow) {
          echo '<tr>';
          foreach ($tableRow as $item) {
            echo '<td>';
            if ($item['type'] === 'a') {
                $link = $item['link'] ?? 'http://';
              echo '<a href="' . $link . '">' . $item['text'] . '</a>';
            } else if ($item['type'] === 'code') {
              echo '<pre><code>' . $item['text'] . '</code></pre>';
            }
            echo '</td>';
          }
          echo '</tr>';
        }
        echo '</table>';
      }
      if ($section['type'] !== 'h4' && $section['type'] !== 'table' && $section['type'] !== 'h3' && $section['type'] !== 'p') dd($section['type']);
    }
  ?>

</div>
<?php }

function data($id) {
  return (array) json_decode(file_get_contents(getcwd()."/source/data/" . $id . ".json"), true);
}