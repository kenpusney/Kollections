#!/usr/bin/env python
# --Author:KPSN.Leo

#############################
#��򵥵���䣺
print 'Hello' #=> Hello

#������ʹ����ϰ��
3+5     #=> 8
2*4     #=> 8

3/2     #=> 1
3./2    #=> 1.5

#�ðɣ������Ǳ�����
a = 5   #����
type(a) #=> <type 'int'>
b = 'Hello' #�ַ�����Python���ַ��������õ����Ż���˫���Ÿ�����
type(b) #=> <type 'str'>

#Python���棬���������ر��������õ�ʱ��ֱ���ù����þͺá�
#���ԣ�������������b�����ֵ���ͻ�õ�������Ч���ˣ�
b = 1.5 #����������
type(b) #=> <type 'float'>

c = 'Hello'
#���ַ����ĳ���
len(c)  #=> 5
#���ַ���������
c.isalpha() #=> True    #�ǲ�������ĸ���
c.isdigit() #=> False   #�ǲ������������
d = '1234'
d.isdigit() #=> True
#��������淨��
c*3     #=> 'HelloHelloHello'   #*3���൱���ظ�3�Ρ�
int(d)  #=> 1234
float(d)    #=> 1234.0
str(b)  #=> '1.5'

#############################
#��Ƭ����
c = "Hello"
c[0]    #=> 'H'
c[1]    #=> 'e'
c[-1]   #=> 'o'
c[1:4]  #=> 'ell'
c[1:]   #=> 'ello'

#������䣺
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
#�б����ֵ�
x = [1,2,3,4,5,6,7,8,9]
y = range(1,10)     #range�������صľ���һ����Χ�ڵ���
x == y  #=> True

#�б����ַ�����һЩ���ƵĲ�����
x[0]
x[1]
x[-1]
x[1:3]
x[3:]

#�ֵ���б������������ǣ��ֵ�������ַ�������������
d = {'x':1,'y':5,'iwanttosay':'i love you, girl.'}
d['x']      #=> 1
d['y']      #=> 5
d['iwanttosay']     #=> 'i love you, girl.'

d['z'] = 18     #����ֱ�����Ԫ�أ�Ҳ���������ַ�ʽ�޸�Ԫ�ء�
d['z']      #=> 18
d           #=> {'y': 5, 'x': 1, 'z': 18, 'iwanttosay': 'i love you, girl.'}
d.has_key('x')      #=> True
d.keys()    #=> ['y', 'x', 'z', 'iwanttosay']
d.values()  #=> [5, 1, 18, 'i love you, girl.']
d.get('x')  #=> 1   #��ͬ��d['x']

