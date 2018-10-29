## Lab. 1 Ethical Hacking - Reconocimiento, footprinting, scanning.

                                                                                     Santiago Octubre 2018

-- Objetivos:

    - Practicar las diferentes fases de un test de vulnerabilidad.
    - Aplicar las metodologias para Reconocimiento, footprinting, scanning, reporting
    - Utilizar la herramienta NMAP principalmente u otras que estime conveniente.
    - Buscar una solucion para no ser detectado al momento de reunir informacion de manera activa.**

-- Desafio: ingresar a los sistemas del cliente y realizar una evaluacion de seguridad de sus servicios de Red.


-- Desarrollo

1.- Instalar el set de herramientas y sistemas que utilizara para lograr los objetivos, se sugiere Linux Box (Kali o cualquier Linux con paquete nmap instalado y/o herramientas que ud prefiera)

2.- Scannear la red y descubrir la(s) direccion(es) IP donde se prestan los servicios

3.- Descubrir la version de software instalado en el servidor sin ser detectado por el firewall


|||Server-Cliente|||-------LAN----192.168.200.0/24--------|||Ethical-Hacking-test|||


Alcances: 
 
    - Se suministra informacion basica para realizar el test.

    - ** El firewall del cliente posee un sistema para detectar scanning de puertos tcp/udp y bloqueara 
    la ip origen por 5 minutos.

    - El informe debe ser en el formato de reporte de vulnerabilidades. 
