<!DOCTYPE html>
<html lang="en">
<head>
    <title>EOF</title>
</head>
<body>
<?php
echo <<<EOF
<h1>HELLO</h1>
<p>Paragraph</p>
EOF;
$text="Nothing";
$str=<<<EOF
"abc"$text
"Hello"
EOF;
print $str;
?>
</body>
</html>
