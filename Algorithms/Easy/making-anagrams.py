#!/bin/python3

import math
import os
import random
import re
import sys
import string, time

"""
@url: https://www.hackerrank.com/challenges/making-anagrams
@desc: 可以用map和lambda
"""

# Complete the palindromeIndex function below.
def makingAnagrams(s1, s2):
    return sum(list(map(lambda x: abs(s1.count(x) - s2.count(x)), [chr(n) for n in range(97, 123)])))

def makingAnagrams2(s1, s2):
    return sum(list(map(lambda x: abs(s1.count(x) - s2.count(x)), map(chr, range(97, 123)))))

def makingAnagrams3(s1, s2):
    return sum(list(map(lambda x: abs(s1.count(x) - s2.count(x)), string.ascii_lowercase)))

"""
do some test
10000万长度的字符串，时间不到0.01秒
"""
class Test:

    path = ''

    def __init__(self):
        self.path = '/tmp/anagrams/'
    

    def makingAnagrams(self, s1, s2):
        return sum(list(map(lambda x: abs(s1.count(x) - s2.count(x)), [chr(n) for n in range(97, 123)])))
    
    
    def run(self):
        i = 0
        file = self.path + 'strings.txt'
        fp = open(file, mode='r', encoding="utf8")
        for line in fp.readlines():
            i += 1
            strs = line.rstrip().split("\t")
            s1 = strs[0]
            s2 = strs[1]
            start = time.time()
            result = self.makingAnagrams(s1, s2)
            end = time.time()
            logData = [i, len(s1), time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()), end-start]
            self.addLog(logData)


    def createData(self, total):
        file = self.path + 'strings.txt'
        fp = open(file, mode='w+', encoding="utf8")
        for i in range(0, total):
            num = random.randint(100, 100000)
            s1 = "".join(random.choices(string.ascii_lowercase, k=num))
            s2 = "".join(random.choices(string.ascii_lowercase, k=num))
            fp.write(s1+"\t"+s2+"\n")
        fp.close()
    

    def addLog(self, logData):
        file = self.path + 'log.txt'
        fp = open(file, mode='a')
        fp.write("\t".join(map(str, logData))+"\n")
        fp.close()

t = Test()

#create 1K lines
#t.createData(10000)

t.run()
