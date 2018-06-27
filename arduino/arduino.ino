/*
 Fade
 
 This example shows how to fade an LED on pin 9
 using the analogWrite() function.
 
 This example code is in the public domain.
 */

int led = 13;           // the pin that the LED is attached to
int brightness = 0;    // how bright the LED is
int fadeAmount = 5;    // how many points to fade the LED by

// the setup routine runs once when you press reset:
void setup()  { 
  // declare pin 9 to be an output:
  pinMode(led, OUTPUT);
  Serial.begin(9600);
} 

// the loop routine runs over and over again forever:
void loop()  { 

if(Serial.available() > 0 ){
  char var = Serial.read();
  Serial.print(var);
  
  switch(var){
    case '0':
      digitalWrite(led,0);
    break;
    case '1':
      digitalWrite(led,1);
    break;
   }
  }
 }

