<?php
//html_entities()
//This function is used to convert special character into entity quotes.
//it can convert every possible speacial charchter, no limitation.

//Example 1

// $str1 = "I am 'myself' <b>Manish kumar</b>";
// echo $str1 . "<br>";

// echo htmlentities($str1);
// echo htmlentities($str1, ENT_COMPAT); //THIS function is decode only double quotes.

// echo htmlentities($str1, ENT_QUOTES);// This function is decode single and double both quotes.

// echo htmlentities($str1, ENT_NOQUOTES); //This function is decoding every special character except quotes(single and double).


// echo "<br><br><hr>";


//html_entity_decode -- > This function is used to replace the decode.

//Example 2

$str2 = 'My name is "<b>MANISH KUMAR</b>" and I am from "<b>bokaro</b>"';

// echo $str2;

// echo "<br><br><hr>";

// echo htmlentities($str2);
// echo htmlentities($str2, ENT_COMPAT);
// echo htmlentities($str2, ENT_QUOTES);
// echo htmlentities($str2, ENT_NOQUOTES);

//now we use html_entity_decode

$newstr = htmlentities($str2);

echo html_entity_decode($newstr);

echo "<br><br><hr>";

//htmlspecialchars
//This function has limitation for decoding, it only decode < , > , " , ' , &

//Example 3


$str3 = 'My name is "rakesh" <b>and</b> I am from "<b>delhi</b>"';

// echo htmlspecialchars($str3) . "<br>";
// echo htmlspecialchars($str3, ENT_COMPAT);
// echo htmlspecialchars($str3, ENT_QUOTES);
echo htmlspecialchars($str3, ENT_NOQUOTES);



echo "<br><br><hr>";

//we can also find the decode special charcter 
echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";




?>