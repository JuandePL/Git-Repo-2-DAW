# 30. ¿Qué resultados se obtendrán al evaluar las siguientes expresiones Python? Calcula
# primero a mano el valor resultante de cada expresión y comprueba, con la ayuda del ordenador,
# si tu resultado es correcto.

from math import exp, log, sin, pi, log10, sqrt

print(f"a) int(exp(2 * log(3))) = {int(exp(2 * log(3)))}")
print(f"b) round(4 * sin(3 * pi / 2)) = {round(4 * sin(3 * pi / 2))}")
print(f"c) abs(log10(.01) * sqrt(25)) = {abs(log10(.01) * sqrt(25))}")
print(f"d) round(3.21123 * log10(1000), 3) = {round(3.21123 * log10(1000), 3)}")
