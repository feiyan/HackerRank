#!/bin/python3

import math
import os
import random
import re
import sys

"""
@url: https://www.hackerrank.com/challenges/big-sorting
"""

# Complete the palindromeIndex function below.
def bigSorting(unsorted):
    unsorted.sort()
    unsorted.sort(key=int)
    return unsorted

"""
python2.7中cpython会将超过int范围的自动转未long
python3.6中cpython存储无限长度的int
"""