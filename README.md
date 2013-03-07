ATM Machine Problem
=================================================
Language: PHP
====
You have to write logic to withdraw money from ATM Machine. Consider a hypothetical ATM machine which gives you notes of 10, 20, 50, 100, 500 & 1000 in denomination. If I enter 5,550 Rs. It should give me 5 notes of 1000, 1 note of 500 and 1 note of 50. ATM machines cannot store coins. So, if input amount is something like 1978 then machine should print “Invalid Amount”.
====
Case 1:
Input: 2340
Output:
2 x 1000 = 2000
3 x 100 = 300
2 x 20 = 40
Total = 2340
Case 2:
Input: 7878
Output: “Invalid Amount”
Case 3:
Input: 5680
Output:
5 x 1000 = 5000
1 x 500 = 500
1 x 100 = 100
1 x 50 = 50
1 x 20 = 20
1 x 10 = 10
Total = 5680
Evaluation Criteria:
1. Completion of the logic
2. Time taken to develop
3. Efficiency of logic (Memory and Time)
4. Coding structure(Use Classes, Associative arrays provided in PHP 5.3)
