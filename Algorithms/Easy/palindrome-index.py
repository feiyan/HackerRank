#!/bin/python3

import math
import os
import random
import re
import sys

"""
@url: https://www.hackerrank.com/challenges/palindrome-index/
"""

# Complete the palindromeIndex function below.
def palindromeIndex(s):
    i = 0
    j = len(s)-1
    while i<=j:
        if s[i] is not s[j]:
            left = s[i+1:j+1]
            print(left)
            x = 0
            y = len(left)-1
            while x<=y:
                if left[x] is not left[y]:
                    right = s[i:j]
                    print(right)
                    x = 0
                    y = len(right)-1
                    while x<=y :
                        if right[x] is not right[y]:
                            return -2
                        x += 1
                        y -= 1
                    return j
                x += 1
                y -= 1
            return i
        i += 1
        j -= 1
    return -1