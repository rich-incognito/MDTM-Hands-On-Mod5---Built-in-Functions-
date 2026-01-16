<!-- 
 INCOGNITO, Rich Cristoff C.
 WD - 201
 6DWEB
 January 15, 2026
 -->

<?php 

// a. For Changing the Case of Character, Use HOLY ANGEL UNIVERSITY as string or whatever you prefer.

$Case = "HOLY angel University";

// b. For Counting Characters and Words, Use You FIRST and LAST NAME as string or whatever you prefer.

$Count = "Rich Incognito";

// c. For Removing and Replacing Characters, you decide for the string

$Remove_Replace = "   Barcelona   ";

// d. For Other 9 or more Built-in Functions, you decide what to explore and strings to work on. Those very advanced but useful are better.

$Explore_Text = "Lionel Messi";


?>

<!DOCTYPE html>
<html>
  <head>
    <title>(INCOGNITO) Built-in Functions</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">

      <h2>Changing the Case of Characters</h2>
      <h3>Given: HOLY angel University</h3>

      <table>
        <tr>
          <th>Function</th>
          <th>Result</th>
        </tr>
        <tr>
          <td>Lowercase (strtolower)</td>
          <td><?= strtolower($Case); ?></td>
        </tr>
        <tr>
          <td>Uppercase  (strtoupper)</td>
          <td><?= strtoupper($Case); ?></td>
        </tr>
        <tr>
          <td>Capitalize (ucwords)</td>
          <td><?= ucwords($Case); ?></td>
        </tr>

      </table>

<!-- Table 2 -->
<h2>Counting Characters and Words</h2>
<h3>Given: Rich Incognito</h3>

<table>
  <tr>
    <th>Function</th>
    <th>Result</th>
  </tr>
  <tr>
    <td>Number of Characters (strlen)</td>
    <td><?= strlen($Count); ?></td>
  </tr>
  <tr>
    <td>Number of Words (str_word_count)</td>
    <td><?= str_word_count($Count); ?></td>
  </tr>

</table>

<!-- Table 3 -->
 <h2>Removing and Replacing Characters</h2>
<h3>Given:   Barcelona   </h3>

<table>
  <tr>
    <th>Function</th>
    <th>Result</th>
  </tr>
  <tr>
    <td>Remove whitespaces from left (ltrim)</td>
    <td><?= ltrim($Remove_Replace); ?></td>
  </tr>
  <tr>
    <td>Remove whitespaces from right (rtrim)</td>
    <td><?= rtrim($Remove_Replace); ?></td>
  </tr>
    <tr>
    <td>Remove whitespace from left and right. (trim)</td>
    <td><?= trim($Remove_Replace); ?></td>
  </tr>
    <tr>
    <td>String replace (str_replace)</td>
    <td><?= str_replace("Barcelona", "Real Madrid", $Remove_Replace); ?></td>
  </tr>
    <tr>
    <td>String ireplace (str_ireplace)</td>
    <td><?= str_ireplace("BARCELONA", "Real Madrid", $Remove_Replace); ?></td>
  </tr>
    <tr>
    <td>String Repeat (str_repeat)</td>
    <td><?= str_repeat($Remove_Replace, 2); ?></td>
  </tr>

</table>

<!-- Table 4 -->
 <h2>Other Built-in Functions</h2>
<h4>Given Text: <?= $Explore_Text?></h4>
<table>
  <tr>
    <th>Function</th>
    <th>Result</th>
  </tr>
  <tr> <!-- 1 -->
    <td>1. Returns position of first match for substring (case-sensitive) (strpos)</td>
    <td><?= strpos($Explore_Text, "Me"); ?></td>
  </tr>
  <tr> <!-- 2 -->
    <td>2. Returns position of last match for substring (case-sensitive). (strrpos)</td>
    <td><?= strrpos($Explore_Text, "s"); ?></td>
  </tr>
  <tr> <!-- 3 -->
    <td>3. Reverses a String. (strrev)</td>
    <td><?= strrev($Explore_Text); ?></td>
  </tr> 
  <tr> <!-- 4 -->
    <td>4. Returns text from first occurrences of a substring (including the substring) to the end of the string (case-sensitive). (strstr)</td>
    <td><?= strstr($Explore_Text, "Li"); ?></td>
  </tr>
  <tr> <!-- 5 --> 
    <td>5. Case-insensitive version of strpos(). (stripos)</td>
    <td><?= stripos($Explore_Text, "meSSi"); ?></td>
  </tr> 
  <tr> <!-- 6 -->
    <td>6. Last position (case-insensitive) (strripos)</td>
    <td><?= strripos($Explore_Text, "L"); ?></td>
  </tr> 
  <tr> <!-- 7 -->
    <td>7. Extracts a part of a string. (substr)</td>
    <td><?= substr($Explore_Text, 0, 4); ?></td>
  </tr> 
  <tr> <!-- 8 -->
    <td>8. Checks is a substring is found in a string, returns true/false. (str_contains)</td>
    <td><?= str_contains($Explore_Text, "Mess")? "Yes": "No"; ?></td>
  </tr> 
  <tr> <!-- 9 -->
    <td>9.  	Checks if string ends with substring, returns true/false. (str_ends_with)</td>
    <td><?= str_ends_with($Explore_Text, "o")? "Yes": "No"; ?></td>
  </tr> 

</table>

</div>
</body>
</html>

