#!/bin/python3

import math
import os
import random
import re
import sys

"""
@url: https://www.hackerrank.com/challenges/two-strings/
@desc: search from S1 will take too much time
"""

# Complete the palindromeIndex function below.
def twoStrings(s1, s2):
    for i in range(97,122):
        c = chr(i)
        if c in s1 and c in s2:
            return "YES"
    return "NO"
