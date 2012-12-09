#!/usr/bin/python
# @author: KPSN.Leo

example_data = [
        '18200391523',
        '13678124270',
        '18380446410',
        '18610080307',
        '478963130',
        '543545236',
        '2273866930',
        '852198937',
        '12333445566',
        #TODO: New Approach: String-analysis.
        'TechDept',
        'Neighbour',
        'I love Physics',
        'NumAnalyse',
        'YangHui',
        'LiuQing',
    ]


class Analyse:
    def __init__(self,seq):
        if type(seq) == type(long()) or type(seq) == type(int()) :
            seq = str(seq)
        self.seq = [ i for i in seq]
        self.elems = []
        self.elemcount()
    
    def elemcount(self):
        if self.elems == []:
            elems = []
            for i in self.seq:
                if not i in elems:
                    elems.append(i)
            self.elems = elems
            self.elems.sort()
        return ord(self.elems[-1])-ord(self.elems[0])
    
    def calculus(self):
        count = [ self.seq.count(i) for i in self.elems ]
        return sum(map(lambda x,y:self.elems.index(x)*y,self.elems,count))
    def same(self):
        seq = self.seq
        flag = 0
        same = []
        for m in range(len(seq)):
            if flag:
                flag -= 1
                continue
            for n in range(m+1,len(seq)):
                if(seq[m] == seq[n]):
                    flag += 1
                else:
                    break
            if flag:
                same.append((seq[m],flag+1),)

        #super-sum:
        return sum([ x[1]*5 for x in same])
    def neighbor(self):
        seq = self.seq
        flag = 0
        neighbor = []
        #TODO: Merge two code-blocks below.
        #increase
        for m in range(len(seq)):
            if flag:
                flag -= 1
                continue
            for n in range(m+1,len(seq)):
                if(ord(seq[n-1])+1 == ord(seq[n])):
                    flag+=1
                else:
                    break
            if flag:
                neighbor.append((seq[m],flag+1),)
        #decrease
        for m in range(len(seq)):
            if flag:
                flag -= 1
                continue
            for n in range(m+1,len(seq)):
                if(ord(seq[n-1])-1 == ord(seq[n])):
                    flag+=1
                else:
                    break
            if flag:
                neighbor.append((seq[m],flag+1),)
        #super-sum
        return sum([ x[1]*3 for x in neighbor])
    
    def show(self):
        print ''.join(self.seq)+':'
        elemcount = self.elemcount()
        calc = self.calculus()
        print self.elems
        print elemcount,'+',calc,'-',self.same(),'-',self.neighbor(),'=',self.analyse()
    def analyse(self):
        elemcount = self.elemcount()
        calc = self.calculus()
        same = self.same()
        neighbor = self.neighbor()
        analy = elemcount+calc-same-neighbor
        return analy
        


if __name__ == '__main__':
    x = []
    for i in example_data:
        x.append(Analyse(i))
    x.sort(lambda m,n:cmp(m.analyse(),n.analyse()))
    for i in x:
        i.show()

