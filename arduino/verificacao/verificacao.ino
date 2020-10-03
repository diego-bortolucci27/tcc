// Programa para teste de funcionamento do Leitor Biometrico
// Traduzido e adaptado por Usinainfo

#include &amp;amp;lt;Adafruit_Fingerprint.h&amp;amp;gt;
#include &amp;amp;lt;SoftwareSerial.h&amp;amp;gt;
#include &amp;amp;lt;Wire.h&amp;amp;gt;
#include &amp;amp;lt;LiquidCrystal_I2C.h&amp;amp;gt;

LiquidCrystal_I2C lcd(0x27,20,4);

int getFingerprintIDez();

SoftwareSerial mySerial(2, 3);
Adafruit_Fingerprint finger = Adafruit_Fingerprint(&amp;amp;amp;mySerial);

void setup()
{
lcd.init();
lcd.backlight();
lcd.setCursor(0,0);
lcd.print("Liberar Acesso?");
lcd.setCursor(1,1);
lcd.print("Insira o Dedo!");
pinMode(11, OUTPUT);
pinMode(12, OUTPUT);
finger.begin(57600);

}

void loop()
{
getFingerprintIDez();
digitalWrite(12, HIGH);
digitalWrite(11, HIGH);
delay(50);
}

uint8_t getFingerprintID() {
uint8_t p = finger.getImage();
switch (p) {
case FINGERPRINT_OK:

break;
case FINGERPRINT_NOFINGER:

return p;
case FINGERPRINT_PACKETRECIEVEERR:
return p;
case FINGERPRINT_IMAGEFAIL:

return p;
default:

return p;
}

p = finger.image2Tz();
switch (p) {
case FINGERPRINT_OK:

break;
case FINGERPRINT_IMAGEMESS:

return p;
case FINGERPRINT_PACKETRECIEVEERR:

return p;
case FINGERPRINT_FEATUREFAIL:

return p;
case FINGERPRINT_INVALIDIMAGE:

return p;
default:

return p;
}

p = finger.fingerFastSearch();
if (p == FINGERPRINT_OK) {

} else if (p == FINGERPRINT_PACKETRECIEVEERR) {

return p;
} else if (p == FINGERPRINT_NOTFOUND) {

return p;
} else {

return p;
}

}

int getFingerprintIDez() {
uint8_t p = finger.getImage();
if (p != FINGERPRINT_OK) return -1;

p = finger.image2Tz();
if (p != FINGERPRINT_OK) return -1;

p = finger.fingerFastSearch();
if (p != FINGERPRINT_OK) return -1;

digitalWrite(11, LOW);
digitalWrite(12, HIGH);
lcd.setCursor(0,0);
lcd.print("Acesso Liberado!");
lcd.setCursor(0,1);
lcd.print("Acesso Liberado!");
delay(500);
digitalWrite(12, LOW);
delay(500);
digitalWrite(11, HIGH);
lcd.clear();
lcd.print("Liberar Acesso?");
lcd.setCursor(1,1);
lcd.print("Insira o Dedo!");
return finger.fingerID;
}
