# PHP_Codes

This is an algorithm question solution for the example below.

For two strings A and B, we define the similarity of the strings to be the length of the longest<br>
prefix common to both strings. For example, the similarity of strings "abc" and "abd" is 2,<br>
while the similarity of strings "aaa" and "aaab" is 3.<br>
Calculate the sum of similarities of a string S with each of it's suffixes.<br>
Input Format<br>
The first line contains the number of test cases t.<br>
Each of the next t lines contains a string to process .<br>
Output Format<br>
Output t lines, each containing the answer for the corresponding test case.<br><br><br>

Sample Input<br>
ababaa<br>
aa<br>
Sample Output<br>
11<br>
3<br><br>
Explanation<br>
For the first case, the suffixes of the string are "ababaa", "babaa", "abaa", "baa", "aa" and<br>
"a". The similarities of these strings with the string "ababaa" are 6,0,3,0,1, & 1 respectively.<br>
Thus, the answer is 6 + 0 + 3 + 0 + 1 + 1 = 11.<br>
For the second case, the answer is 2 + 1 = 3.<br>
