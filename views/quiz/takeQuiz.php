<h1>Find dit {Quiz navn} barometer</h1>
<form action="<?php echo URL;?>quiz/saveResult/" method="post">
<?php
foreach($this->takeQuiz as $key => $value) {
    echo '<fieldset id="'.$value['id'].'">';
    echo '<legend>'.$value['question'].'</legend>';
    echo '<input type="radio" value="1" name="'.$value['id'].'">Meget uenig<br>';
    echo '<input type="radio" value="2" name="'.$value['id'].'">Uenig<br>';
    echo '<input type="radio" value="3" name="'.$value['id'].'">Hverken enig eller uenig<br>';
    echo '<input type="radio" value="4" name="'.$value['id'].'">Enig<br>';
    echo '<input type="radio" value="5" name="'.$value['id'].'">Meget enig<br>';
    echo '<input type="radio" value="0" name="'.$value['id'].'">Ved ikke<br>';
    echo '</fieldset>';
    echo '<br>';
}
?>
<input type="submit">
</form>