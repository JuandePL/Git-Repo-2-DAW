# 221. Diseña un programa que lea una lista de 10 enteros, pero asegurándose de que
# todos los números introducidos por el usuario son positivos. Cuando un número sea negativo,
# lo indicaremos con un mensaje y permitiremos al usuario repetir el intento cuantas veces sea
# preciso.

nums = []

for i in range(10):
    num = int(input(f'Número {i+1}: '))

    # Comprobar si el numero es negativo para que el usuario lo introduzca de nuevo
    while num < 0:
        print('El número introducido es negativo, inténtalo de nuevo.')
        num = int(input(f'Número {i+1}: '))

    # Añadir numero positivo a la lista
    nums.append(num)

print(f'Lista final: {nums}')