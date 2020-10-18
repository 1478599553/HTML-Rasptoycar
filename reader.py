import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
go = 1
GPIO.setwarnings(False)
while go == 1:
    with open('way.txt') as file_obj:
         content = file_obj.read()
         content = int(content)
         
         if (content == 1):
             GPIO.setmode(GPIO.BCM)
             print('ok,go ahead')
             GPIO.setup(21,GPIO.OUT)
             GPIO.output(21, GPIO.HIGH)
             #time.sleep(2)
             GPIO.cleanup(26)
             GPIO.cleanup(19)
             GPIO.cleanup(13)
             
         else:
             print('not 1')
             if (content == 2):
                 GPIO.setmode(GPIO.BCM)
                 print('ok,go left')
                 GPIO.setup(26,GPIO.OUT)
                 GPIO.output(26, GPIO.HIGH)
                 #time.sleep(2)
                 GPIO.cleanup(21)
                 GPIO.cleanup(13)
                 GPIO.cleanup(19)
             else:
                if (content == 3):
                     GPIO.setmode(GPIO.BCM)
                     print('ok,go right')
                     GPIO.setup(19,GPIO.OUT)
                     GPIO.output(19, GPIO.HIGH)
                     #time.sleep(2)
                     GPIO.cleanup(21)
                     GPIO.cleanup(26)
                     GPIO.cleanup(13)
                else:
                    if (content == 4):
                         GPIO.setmode(GPIO.BCM)
                         print('ok,go back')
                         GPIO.setup(13,GPIO.OUT)
                         GPIO.output(13, GPIO.HIGH)
                         #time.sleep(2)
                         GPIO.cleanup(21)
                         GPIO.cleanup(26)
                         GPIO.cleanup(19)
                    
                 
     
