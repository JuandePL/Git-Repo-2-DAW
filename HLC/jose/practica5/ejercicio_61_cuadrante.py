# 61. Indica en cada uno de los siguientes programas qué valores en las respectivas entradas
# provocan la aparición de los distintos mensajes. Piensa primero la solución y comprueba luego
# que es correcta ayudándote con el ordenador.

# 2) cuadrante.py
# Este ejercicio pide un ángulo en grados al usuario.
# Luego recoge el resto

from math import floor # La función floor redondea hacia abajo.

grados = float(input("Dame un ángulo (en grados): "))

cuadrante = floor(grados) % 360 // 90
if cuadrante == 0:
    print("Primer cuadrante")
if cuadrante == 1:
    print("Segundo cuadrante")
if cuadrante == 2:
    print("Tercer cuadrante")
if cuadrante == 3:
    print("Cuarto cuadrante")