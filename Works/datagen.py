#!/usr/bin/env python
# @author : KPSN.Leo 

from random import randrange , choice
from string import ascii_lowercase as lc
from sys import maxint,argv
from time import ctime

tlds = ('163.com',
        '126.com',
        'qq.com',
        'gmail.com',
        'mit.edu',
        'yale.edu',
        'open.edu',
        'berkeley.edu',
        'skyplus.net',
        'neowin.net',
        '126.net',
        'gnu.org',
        'freebsd.org',
        'mail.org',
        'google.org',
        'defense.gov',
        'china.gov',
        'whitehouse.gov',
        'data.gov',
        'cuit.edu.cn',
        'hit.edu.cn',
        'uestc.edu.cn',
        'cuit.edu.cn',
        'eol.cn',
        'duxy.me',
        'standard.ml',
        'oca.ml',
        'nginx.ru',
        )

def puts_header(t):
	if t == 'csv':
		return 'time,email,domain,count\n'
	elif t == 'xml':
		return '<xml version="1.0">\n'+'<data>\n'
	else:
		return ''

def puts_footer(t):
	if t == 'xml':
		return '</data>'
	else:
		return ''

def parse_fmt(t):
	if t == 'json':
		return '{\n\t"time":"%s",\n\t"email":"%s@%s",\n\t"domain":"%s",\n\t"count":[ %d, %d, %d ]\n}\n'
	if t == 'jsonline':
		return '{"time":"%s","email":"%s@%s","domain":"%s","count":[ %d, %d, %d ]}\n'	
	if t == 'csv':
		return '%s,%s@%s,s,%d-%d-%d\n'
	
	if t == 'xml':
		return '\t<request>\n\t\t<time>%s</time>\n\t\t<email>%s@%s</email>\n\t\t<domain>%s</domain>\n\t\t<count>%d-%d-%d</count>\n\t</request>\n'
	if t == 'plain':
		return '%s::%s@%s,%s::%d-%d-%d\n'
def datagen(count,t = 'plain'):
    '''Generating counts of random data.'''
    #TODO: More function need to be added.
    fmt = parse_fmt(t)
    text = []
    text.append(puts_header(t))
    for i in xrange(randrange(count,count+5)):
            dtint = randrange(maxint)
            dtstr = ctime(dtint)
            llen = randrange(6,12)
            login = ''.join(choice(lc) for j in range(llen))
            dlen = randrange(llen,15)
            dom = choice(tlds)
            text.append( fmt % (dtstr, login,
            	dom ,dom, dtint, llen, dlen) )
    text.append(puts_footer(t))
    return ''.join(text)

#TODO: Finish the help document.
gen_usage = '''----
Usage: datagen.py [count] [[-j|--json]|[-x|--xml]|[-c|--csv]] 
    default([count]) = 10
Example:
    
    datagen.py >> temp.txt
    
By KPSN.Leo
http://kimleo.lofter.com/
----'''

if __name__ == '__main__':
    try:
    	gen_count = int(argv[1])
    except:
    	gen_count = 10
    if '-j' in argv or '--json' in argv:
       	print datagen(gen_count,'json'),
    elif '-c' in argv or '--csv' in argv:
    	print datagen(gen_count,'csv'),
    elif '-x' in argv or '--xml' in argv:
    	print datagen(gen_count,'xml'),
    elif '-l' in argv or '--jsonline' in argv:
   		print datagen(gen_count, 'jsonline'),
    else:
    	if len(argv) > 1:
    		print gen_usage
      	else:
      		print datagen(gen_count),
