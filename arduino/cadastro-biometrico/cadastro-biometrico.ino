#include &amp;amp;lt;Adafruit_Fingerprint.h&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;

// On Leonardo/Micro or others with hardware serial, use those! #0 is green wire, #1 is white
// uncomment this line:
// #define mySerial Serial1

// For UNO and others without hardware serial, we must use software serial...
// pin #2 is IN from sensor (GREEN wire)
// pin #3 is OUT from arduino (WHITE wire)
// comment these two lines if using hardware serial
#include &amp;amp;lt;SoftwareSerial.h&amp;amp;gt;
SoftwareSerial mySerial(2, 3);

Adafruit_Fingerprint finger = Adafruit_Fingerprint(&amp;amp;amp;mySerial);

uint8_t id;

void setup()
{
Serial.begin(9600);
while (!Serial); // For Yun/Leo/Micro/Zero/...
delay(100);
Serial.println("\n\nAdafruit Fingerprint sensor enrollment");

// set the data rate for the sensor serial port
finger.begin(57600);

if (finger.verifyPassword()) {
Serial.println("Sensor Biometrico Encontrado!");
} else {
Serial.println("Sensor Biometrico Não Encontrado :(");
while (1) { delay(1); }
}
}

uint8_t readnumber(void) {
uint8_t num = 0;

while (num == 0) {
while (! Serial.available());
num = Serial.parseInt();
}
return num;
}

void loop() // run over and over again
{
Serial.println("Ready to enroll a fingerprint!");
Serial.println("Por favor escolha o ID do usuario seguido de # (Pode ser um numero entre 1 e 127) ...");
id = readnumber();
if (id == 0) {// ID #0 not allowed, try again!
return;
}
Serial.print("Gravando ID #");
Serial.println(id);

while (! getFingerprintEnroll() );
}

uint8_t getFingerprintEnroll() {

int p = -1;
Serial.print("Esperando dedo para gravacao"); Serial.println(id);
while (p != FINGERPRINT_OK) {
p = finger.getImage();
switch (p) {
case FINGERPRINT_OK:
Serial.println("Imagem Capturada");
break;
case FINGERPRINT_NOFINGER:
Serial.println(".");
break;
case FINGERPRINT_PACKETRECIEVEERR:
Serial.println("Erro de Comunicacao");
break;
case FINGERPRINT_IMAGEFAIL:
Serial.println("Erro de Imagem");
break;
default:
Serial.println("Erro Desconhecido");
break;
}
}

// OK success!

p = finger.image2Tz(1);
switch (p) {
case FINGERPRINT_OK:
Serial.println("Imagem Convertida");
break;
case FINGERPRINT_IMAGEMESS:
Serial.println("Imagen confusa");
return p;
case FINGERPRINT_PACKETRECIEVEERR:
Serial.println("Erro de Comunicacao");
return p;
case FINGERPRINT_FEATUREFAIL:
Serial.println("Não foi possível encontrar recursos de impressão digital");
return p;
case FINGERPRINT_INVALIDIMAGE:
Serial.println("Não foi possível encontrar recursos de impressão digital");
return p;
default:
Serial.println("Erro Desconhecido");
return p;
}

Serial.println("Remova o Dedo");
delay(2000);
p = 0;
while (p != FINGERPRINT_NOFINGER) {
p = finger.getImage();
}
Serial.print("ID "); Serial.println(id);
p = -1;
Serial.println("Coloque o mesmo dedo novamente");
while (p != FINGERPRINT_OK) {
p = finger.getImage();
switch (p) {
case FINGERPRINT_OK:
Serial.println("Imagem Capturada");
break;
case FINGERPRINT_NOFINGER:
Serial.print(".");
break;
case FINGERPRINT_PACKETRECIEVEERR:
Serial.println("Erro de Comunicacao");
break;
case FINGERPRINT_IMAGEFAIL:
Serial.println("Erro de Imagem");
break;
default:
Serial.println("Erro Desconhecido");
break;
}
}

// OK success!

p = finger.image2Tz(2);
switch (p) {
case FINGERPRINT_OK:
Serial.println("Imagem convertida");
break;
case FINGERPRINT_IMAGEMESS:
Serial.println("Imagem confusa");
return p;
case FINGERPRINT_PACKETRECIEVEERR:
Serial.println("Erro de Comunicacao");
return p;
case FINGERPRINT_FEATUREFAIL:
Serial.println("Não foi possível encontrar recursos de impressão digital");
return p;
case FINGERPRINT_INVALIDIMAGE:
Serial.println("Não foi possível encontrar recursos de impressão digital");
return p;
default:
Serial.println("Unknown error");
return p;
}

// OK converted!
Serial.print("Criando Modelo para #"); Serial.println(id);

p = finger.createModel();
if (p == FINGERPRINT_OK) {
Serial.println("Impressoes combinadas!");
} else if (p == FINGERPRINT_PACKETRECIEVEERR) {
Serial.println("Erro de comunicacao");
return p;
} else if (p == FINGERPRINT_ENROLLMISMATCH) {
Serial.println("Biometrias nao conferem");
return p;
} else {
Serial.println("Erro Desconhecido");
return p;
}

Serial.print("ID "); Serial.println(id);
p = finger.storeModel(id);
if (p == FINGERPRINT_OK) {
Serial.println("Armazenado!");
} else if (p == FINGERPRINT_PACKETRECIEVEERR) {
Serial.println("Erro de Comunicacao");
return p;
} else if (p == FINGERPRINT_BADLOCATION) {
Serial.println("Não pode armazenar neste local");
return p;
} else if (p == FINGERPRINT_FLASHERR) {
Serial.println("Erro de Escrita em Flash");
return p;
} else {
Serial.println("Erro Desconhecido");
return p;
}
}
