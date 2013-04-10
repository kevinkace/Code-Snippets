Code-Snippets - v1.3.3
=======================

A collection of coding examples from my personal studies, interview questions, etc...



PHP
===

1. DictionaryCheck
   A class to find which words in input dictionary are able to be made with input letters.
   Ex. 
   words: apple, carrot, banana, kiwi, orange
   letters: abrctpelpana
   longest words: apple

2. PalindromeCheck
   A class to check if a phrase is a palindrome.
   Ex.
   phrase: Taco cat ==> TRUE
   phrase: burrito dog ==> FALSE



JS
==

1. InfoLink
   A jQuery plugin to informatively decorate links by extension and domain.



VERSION EXPLANATION
===================

v1.2.3
1 = Major updates; new lang, new front end
2 = New class
3 = Update to existing code, config



REVISION HISTORY
================

1.3.3
Renamed title in this readme.
Corrected email in PalindromeCheck.
Added jQuery 1.9.1 cause who wants all the benefits of a CDN? 
Created a InfoLink to informatively decorate links, as well as the CSS and images to suit.

1.2.2
Replaced GetSubstring method with substr SPL function in PalindromeCheck.

1.2.1
Cleaned up the autoloader, php.ini, PalindromeCheck class, and output in the index files. Renamed dir 'htdocs' to 'www'.

1.2.0
New PHP class PalindromeCheck.
Updated the readme with version history and version explanation.

1.0
Initial commit.
Includes the PHP auto loader, PHP DictionaryCheck class, some test files and this readme.