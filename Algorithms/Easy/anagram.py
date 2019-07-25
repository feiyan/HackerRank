#!/bin/python3

import math
import os
import random
import re
import sys
import collections

"""
@url: https://www.hackerrank.com/challenges/anagram
@desc: 没有找到可以用map和lambda的点
"""

# Complete the palindromeIndex function below.
def anagram(s):
    l = len(s)
    if l<2 or l%2 is not 0:
        return -1
    mid = int(l/2)
    dictLeft = collections.Counter(s[:mid])
    dictRight = collections.Counter(s[mid:])
    change = 0
    for i in range(97, 123):
        c = chr(i)
        change += abs(dictLeft.get(c, 0) - dictRight.get(c, 0))
    return int(change/2)
