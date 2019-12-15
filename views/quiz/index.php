<h1>Mine test</h1>
<br>
<h2>Vælg en test</h2>
<table>
<?php
    foreach($this->quizList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['name'] . '</td>';
        echo '<td><a href="'.URL.'quiz/takeQuiz/'.$value['id'].'">Tag nu</a></td>';
        echo '</tr>';
    }
?>
</table>
<br>