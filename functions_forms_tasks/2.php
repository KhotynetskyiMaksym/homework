<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
</head>
<?php
function TheLongestWords ($post, $num){
    $text = $post;
    $separ = [',',':','.','?','!'];
    $text = str_replace($separ, ' ', $text);
    $text = explode(' ', $text);
        for ($i = 0; $i < $num; $i++){
            $TheLongestWords[$i] = $text[0];
        }
            foreach ($text as $word) {
                switch ($word){
                case (mb_strlen($TheLongestWords[0], 'UTF-8') < mb_strlen($word, 'UTF-8')) :
                       $TheLongestWords[0] = $word;
                       break;
                case (mb_strlen($TheLongestWords[1], 'UTF-8') < mb_strlen($word, 'UTF-8')) :
                       $TheLongestWords[1] = $word;
                       break;
                case (mb_strlen($TheLongestWords[2], 'UTF-8') < mb_strlen($word, 'UTF-8')) :
                       $TheLongestWords[2] = $word;
                       break;
                default: break;
                }
            }
            return $TheLongestWords;
}
?>
    <body>
    <form action="" method="POST">
        <p>Введите текст</p>
        <textarea name="text"  cols="30" rows="10"></textarea><br>
        <input type="submit" name="send" value="send">
    </form>
    <?php
    if (isset($_POST['text']) && isset($_POST['send']) && !empty($_POST['text'])){
        $a = trim($_POST['text']);
        $longest_words = TheLongestWords($a, 3);
                    if (sizeof($longest_words) != false){
                echo "Три самых длинных слова в тексте: ";
                 foreach ($longest_words as $items) {
                     echo " ".$items;
                }
            }
    }
    ?>
</body>
</html>