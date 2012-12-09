#!/usr/bin/env python
# @Author: KPSN.Leo
# 

#Libraries
import Tkinter      #User Interface
import time         #Time Control
import winsound     #Play 'Beep' Sound
import thread       #For Simple Thread
import threading    #For 'SuperThread' Class & Thread Synchronization

_DEBUG_MODE = True  #Debug or not

#Thread Lock
lock = threading.RLock()

#Beeper Function
def beep(x):
    while x:
        #Adjust Every Argument & Try to Make the Most Fit One
        for i in range(1,5):
            winsound.Beep(4000,200)
        time.sleep(0.5)
        x -= 1

#Class for Check Every Alarm to Alert
class SuperThread(threading.Thread):
    def __init__(self,tname,alarm):
        threading.Thread.__init__(self,name = tname)
        self.name = tname
        self.alarm = alarm
    def run(self):
        superChecker(self.alarm)    #Call superChecker to Process

class AlarmItem:
    def __init__(self,time = time.time()):
        self.time = time
        self.status = 'actived'
        
    def activate(self):
        self.status = 'actived'
        
    def disable(self):
        self.status = 'disabled'
        
    def run(self):
        self.status = 'runned'
        if _DEBUG_MODE:
            print time.strftime('%y/%m/%d %H:%M:%S',time.localtime(time.time())),'I am running',self.showTime()
        #Beep!
        thread.start_new_thread(beep,(20,))     #20 for Debug,much more for Use 
        
    def modify(self,time):
        self.time = time
        
    def showTime(self):
        return time.strftime('%y/%m/%d %H:%M:%S',time.localtime(self.time))
    

class AlarmItemUI:
    def __init__(self,alarm,host):
        self.alarm = alarm
        self.shown = False
        self.host = host
        
    def show(self):
        if self.shown == False:
            self.label = Tkinter.Label(self.host.root,text = self.alarm.showTime())
            self.label.pack()
            self.delBtn = Tkinter.Button(self.host.root,text = 'Delete',command = self.delete)
            self.delBtn.pack()
            
    def delete(self):
        self.host.alarmList.remove(self)
        self.label.pack_forget()
        self.delBtn.pack_forget()
        
    def onRunning(self):
        pass
    
    def modifyButton(self):
        pass
    
class Alarm:
    def __init__(self):
        self.root = Tkinter.Tk()
        self.alarmList = []
        self.label = Tkinter.Label(self.root,text = 'Alert After * Minute(s):')
        self.label.pack()
        self.txtBx = Tkinter.Entry(self.root,text = '30',width = 15)
        self.txtBx.pack()
        self.addBtn = Tkinter.Button(self.root,text = 'Add New', command = self.newAlarm)
        self.addBtn.pack()
        if _DEBUG_MODE:
            self.debugConfig()
        #thread.start_new_thread(superChecker,(self,))
        alarmThread = SuperThread("Check",self)
        alarmThread.start()
        
    def addAlarm(self,time = time.time()):
        alarm = AlarmItemUI(AlarmItem(time),self)
        alarm.show()
        self.alarmList.append(alarm)
        
    def run(self):
        self.root.mainloop()
        
    def newAlarm(self):
        lock.acquire()
        self.addAlarm(time.time()+60*int(self.txtBx.get()))
        lock.release()
        
    def debugConfig(self):
        self.debugBtn = Tkinter.Button(self.root,text = 'Debug It', command = self.debugInfo)
        self.debugBtn.pack()
        
    def debugInfo(self):
        print self.alarmList
        for i in self.alarmList:
            print i.alarm.showTime(),i.alarm.status

    def term(self):
        pass


def superChecker(self):
    if _DEBUG_MODE:
        print 'Start new superChecker'

    #Main Check Loop
    while True:
        #Lock Resources
        lock.acquire()
        for i in self.alarmList:
            #About 30 Seconds Up~Down
            if time.time()-15 < i.alarm.time and i.alarm.time < time.time()+15 and i.alarm.status == 'actived':
                i.alarm.run()
            else:
                if _DEBUG_MODE and i.alarm.status == 'actived':
                    print 'Not reach',i.alarm.showTime()
                continue
        lock.release()  #Unlock
        time.sleep(2)   #Check Every 2 Seconds

#Start Run:
if __name__=='__main__':
    x = Alarm()
    x.run()

