#include <WiFi101.h>
#include <ArduinoHttpClient.h>

char SSID[] = "labs";
char PASS_WIFI[] = "1nv3nt@r2023_IPLEIRIA";
char URL[] = "iot.dei.estg.ipleiria.pt";
int PORTO = 80;
WiFiClient clienteWifi;
HttpClient clienteHTTP = HttpClient(clienteWifi, URL, PORTO);

void setup() {
    pinMode(LED_BUILTIN, OUTPUT);
  Serial.begin(115200);
  while (!Serial);
  WiFi.begin(SSID, PASS_WIFI);
  while (WiFi.status() != WL_CONNECTED){
    Serial.println(".");
    delay(500);
  }
  Serial.print("Endereço IP: ");
  Serial.println(WiFi.localIP());
  Serial.print("Máscara de rede: ");
  Serial.println(WiFi.subnetMask());
  Serial.print("Endereço IP do Default Gateway: ");
  Serial.println(WiFi.gatewayIP());
  Serial.print("Potência de Sinal: ");
  Serial.println(WiFi.RSSI());
}

void loop() {
    if(clienteHTTP.responseStatusCode()==200)
    {
        // put your main code here, to run repeatedly:
    clienteHTTP.get("/api/api.php?temperatura=20");
    String response=clienteHTTP.responseBody();
    Serial.print(response);
        if(response.toInt()>=30)
        {
            digitalWrite(LED_BUILTIN, HIGH);
        }
        else
        {
            digitalWrite(LED_BUILTIN, LOW);
        }
    delay(5000);
    }
    else
    {
        Serial.print("error");
    }
  
}