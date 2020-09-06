<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<h1>Welcome to Application !</h1> <br>

<form action="PhpAlgorithmQuestion.php" method="post">
    Please Enter the Text : <input type="text" name="text">
    <input type="submit" value="Calculate The Similarity">
</form><br>


<?php

class StringUtil
{
    public function SimilarityApplication($word)
    {

        $lengthOfWord = strlen($word);
        $result = $lengthOfWord; // because first word has full similarity with his own, dont need to calculate this one
        $wordforPrefix = $word; // we need the clone of $word for prefix process

        for($i = 0; $i <= $lengthOfWord; $i++)
        {
            if(($similarity = ($this->similarityCalculator($wordforPrefix, $this->prefixCommon($word)))) > 0)
            {
                $result += $similarity;
            }

            $word = $this->prefixCommon($word);
        }

        echo('Result : ' . $result);

    }


    public function prefixCommon($word) //common prefix process (abab -> bab)
    {

        $length = strlen($word);

        if($length > 1)
        {
            return substr($word, 1);
        }

        return ""; // if length of the word is less than 1, sends empty string

    }


    public function similarityCalculator($word1, $word2) // Calculator of the similarity about two words
    {

        // Find the longest and shortest word
        if($word1 > $word2) {

            $lengthOfLongestWord = strlen($word1);
            $lengthOfShortestWord = strlen($word2);

        }
        else
        {

            $lengthOfLongestWord = strlen($word2);
            $lengthOfShortestWord = strlen($word1);

        }

        $resultSimilarity = 0;

        for($i = 0; $i < $lengthOfShortestWord; $i++)
        {
            if($word1[$i] == $word2[$i])
                $resultSimilarity++;
            else // If the similarity is false break the loop
                break;
        }

        return $resultSimilarity; //Result of the similarity between word1 and word2
    }

}


    $Process = new StringUtil();
    $Process ->SimilarityApplication($_POST["text"]);


?>

</body>
</html>
