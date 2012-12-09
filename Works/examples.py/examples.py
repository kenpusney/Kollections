#!/usr/bin/env python
# --Author:KPSN.Leo

#############################
#最简单的语句：
print 'Hello' #=> Hello

#计算器使用练习：
3+5     #=> 8
2*4     #=> 8

3/2     #=> 1
3./2    #=> 1.5

#好吧，现在是变量：
a = 5   #整数
type(a) #=> <type 'int'>
b = 'Hello' #字符串，Python中字符串可以用单引号或者双引号隔开。
type(b) #=> <type 'str'>

#Python里面，变量不用特别声明，用的时候直接拿过来用就好。
#所以，如果下面继续对b赋别的值，就会得到其他的效果了：
b = 1.5 #浮点型数据
type(b) #=> <type 'float'>

c = 'Hello'
#求字符串的长度
len(c)  #=> 5
#求字符串的类型
c.isalpha() #=> True    #是不是由字母组成
c.isdigit() #=> False   #是不是由数字组成
d = '1234'
d.isdigit() #=> True
#更神奇的玩法：
c*3     #=> 'HelloHelloHello'   #*3，相当于重复3次。
int(d)  #=> 1234
float(d)    #=> 1234.0
str(b)  #=> '1.5'

#############################
#分片操作
c = "Hello"
c[0]    #=> 'H'
c[1]    #=> 'e'
c[-1]   #=> 'o'
c[1:4]  #=> 'ell'
c[1:]   #=> 'ello'

#控制语句：
if 1 == 1 :
    print "Yes"
elif 1 == 0 :
    print "SO?"
else:
    print "Nop!"

i = 6
while i:
    print i
    i -= 1

for i in range(1,10):
    print i

for i in "Hello":
    print i

###########################
#列表与字典
x = [1,2,3,4,5,6,7,8,9]
y = range(1,10)     #range函数返回的就是一个范围内的数
x == y  #=> True

#列表与字符串有一些相似的操作：
x[0]
x[1]
x[-1]
x[1:3]
x[3:]

#字典跟列表的最大的区别就是，字典可以用字符串来进行索引
d = {'x':1,'y':5,'iwanttosay':'i love you, girl.'}
d['x']      #=> 1
d['y']      #=> 5
d['iwanttosay']     #=> 'i love you, girl.'

d['z'] = 18     #可以直接添加元素，也可以以这种方式修改元素。
d['z']      #=> 18
d           #=> {'y': 5, 'x': 1, 'z': 18, 'iwanttosay': 'i love you, girl.'}
d.has_key('x')      #=> True
d.keys()    #=> ['y', 'x', 'z', 'iwanttosay']
d.values()  #=> [5, 1, 18, 'i love you, girl.']
d.get('x')  #=> 1   #等同于d['x']

