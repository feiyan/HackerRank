#!/bin/python3

import math
import os
import random
import re
import sys

"""
@url: https://www.hackerrank.com/challenges/making-anagrams
@desc: 可以用map和lambda
"""

# Complete the palindromeIndex function below.
def makingAnagrams(s1, s2):
    return sum(list(map(lambda x: abs(s1.count(x) - s2.count(x)), [chr(n) for n in range(97, 123)])))
