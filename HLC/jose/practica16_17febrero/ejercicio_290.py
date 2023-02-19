# 290. Diseña una función sin argumentos que devuelva un número aleatorio mayor o igual
# que -10.0 y menor que 10.0.

import random

# Funcion que devuelve un numero entre -10 y 10
def randomNumber():
    return random.randint(-10, 10)

# Rellenar lista y mostrarla por pantalla
list = [randomNumber() for i in range(10)]
print(f'Números aleatorios: {list}')