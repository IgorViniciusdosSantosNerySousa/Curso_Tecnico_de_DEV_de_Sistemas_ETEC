// C++ code
//
void setup()
{
  pinMode(13, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(11, OUTPUT);
  pinMode(10, OUTPUT);
  pinMode(9, OUTPUT);
  pinMode(8, OUTPUT);
  pinMode(7, OUTPUT);
  pinMode(6, OUTPUT);
}

void loop()
{
  for(int i = 1; i <=13; i++) {
    digitalWrite(i, HIGH);
}
delay(500);

  for(int i = 1; i <=13; i++) {
  digitalWrite(i, LOW);
}
delay(500);
  
  for(int i = 14; i >=2; i--) {
  digitalWrite(i, LOW);
  delay(200);
  digitalWrite(i - 1, HIGH);
  delay(500);
}
  for(int i = 13; i>=3; i -=2) {
    digitalWrite(i, HIGH);
}
delay(500);
  
  for(int i = 13; i>=3; i -=2) {
  digitalWrite(i, LOW);
}
delay(500);
  
  for(int i = 12; i>=2; i -=2) {
  digitalWrite(i, HIGH);
}
delay(500);
  
  for(int i = 12; i>=2; i -=2) {
    digitalWrite(i, LOW);
}
delay(500);
  
  
}//VOID

