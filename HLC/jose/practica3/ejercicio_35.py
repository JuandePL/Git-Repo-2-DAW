# 35. Diseña un programa que pida el valor del lado de un cuadrado y muestre el valor de
# su perímetro y el de su área. (Prueba que tu programa funciona correctamente con este ejemplo:
# si el lado vale 1.1, el perímetro será 4.4, y el área 1.21).

lado = float(input(f'Bienvenido al programa, introduce el lado del cuadrado: '))

# Mostrar resultados y redondear a 2 decimales
print(f'\nLa longitud del lado del cuadrado es {lado}')
print(f'El perímetro del cuadrado es {round(lado * 4, 2)}')
print(f'El área del cuadrado es {round(lado ** 2, 2)}')