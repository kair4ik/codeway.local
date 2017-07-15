<?php
/* @var $this yii\web\View */
/* @var $url_image string */

?>
<h1>main/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>



<?php
echo $url_image."<br>";

$string = 'cup';
$name = 'coffee';
$str = 'This is a $string with my $name in it.<br>';
echo $str. "\n";
eval("\$str1 = \"$str\";");
echo $str1. "\n";


function foo() {
    echo "In foo()<br />\n";
}

$func = 'foo';
$func();        // Вызывает функцию foo()



class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // Вызываем метод Bar()
    }

    function Bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // Обращаемся к $foo->Variable()
?>