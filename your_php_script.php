<?php
if (isset($_GET['snumb'])) {
    $snumb = $_GET['snumb'];
    $enumb = $_GET['enumb'];
    $prevt = $_GET['prevt'];
    
    echo '<div id="passportImages">';

    for ($i = $snumb; $i <= $enumb; $i++) {
        echo '<div class="passport-img-container">';
        echo '<img class="passport-img" src="https://firars.futa.edu.ng/app/uploads/documents/'.$prevt.'/' . $i . '.jpg" alt="'. $prevt . $i . '">';
        
        // Add a caption underneath each image
        echo '<div class="caption">'. $i . '</div>';
        
        echo '</div>';
    }

    echo '</div>';
}
?>
