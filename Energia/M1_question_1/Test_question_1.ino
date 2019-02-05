#define LED1 2
#define LED2 34
#define LED3 35
#define LED4 36
#define LED5 37 
#define POT 28

void setup()  { 
  Serial.begin(9600);
  Serial.println("Yo");
  pinMode(LED1, OUTPUT);
  pinMode(LED2, OUTPUT);
  pinMode(LED3, OUTPUT);
  pinMode(LED4, OUTPUT);
  pinMode(LED5, OUTPUT);
} 

void loop()  { 
  int potentiometre = analogRead(POT);
  Serial.print("Valeur du convertisseur : ");
  Serial.println(potentiometre);
  Serial.print("Tension en volt correspondante : ");
  Serial.println(potentiometre*3.3/4096);

  if (potentiometre>4096*4/5)
  {
    digitalWrite(LED5, HIGH);
    delay(100);
    digitalWrite(LED5, LOW);
  }
  else if (potentiometre<4096*4/5 && potentiometre>4096*3/5)
  {
    digitalWrite(LED4, HIGH);
    delay(100);
    digitalWrite(LED4, LOW);
  }
  else if (potentiometre<4096*4/5 && potentiometre>4096*2/5)
  {
    digitalWrite(LED3, HIGH);
    delay(100);
    digitalWrite(LED3, LOW);
  }
  else if (potentiometre<4096*4/5 && potentiometre>4096*1/5)
  {
    digitalWrite(LED2, HIGH);
    delay(100);
    digitalWrite(LED2, LOW);
  }
  else if (potentiometre<4096/5)
  {
    digitalWrite(LED1, HIGH);
    delay(100);
    digitalWrite(LED1, LOW);
  }                            
}
