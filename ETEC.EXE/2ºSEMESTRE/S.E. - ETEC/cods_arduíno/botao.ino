// C++ code
//

int pushButton = 7;
bool estado = 0;

void setup()
{
  pinMode(13, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(11, OUTPUT);
  pinMode(10, OUTPUT);
  pinMode(9, OUTPUT);
  pinMode(pushButton, INPUT_PULLUP);
}

void loop()
{  
  if(digitalRead(pushButton)==LOW) 
  {
  estado = !estado;
  /*for(int i = 1; i <=13; i++) {
  digitalWrite(i, HIGH);
  }
  delay(100);

  for(int i = 1; i <=13; i++) {
  digitalWrite(i, LOW);
  }
  delay(100);*/
  
  for(int i = 14; i >=2; i--) {
  digitalWrite(i, LOW);
  delay(100);
  digitalWrite(i - 1, HIGH);
  delay(100);
  }
  while(digitalRead(pushButton) == LOW);
  delay(100);
  }
  
  
  /*digitalWrite(13, HIGH);
  delay(1000);
  digitalWrite(13, LOW);
  delay(1000);*/
}