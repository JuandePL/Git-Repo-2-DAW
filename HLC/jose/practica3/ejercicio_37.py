# 37. Diseña un programa que pida el valor de la base y la altura de un triángulo y muestre
# el valor de su área. (Prueba que tu programa funciona correctamente con este ejemplo: si la base
# es 10 y la altura 100, el área será 500).

base = float(input(f'Bienvenido al programa, introduce la base del triángulo: '))
altura = float(input(f'Ahora introduce la altura del triángulo: '))

# Calcular area
area = (base * altura) / 2

# Mostrar area
print(f'\nEl área del triángulo es {round(area, 2)}')