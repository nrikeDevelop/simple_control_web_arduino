import serial, time
arduino = serial.Serial('/dev/ttyACM0', 9600)
arduino.write(str(0))


