from math import sqrt

# 38. Diseña un programa que pida el valor de los tres lados de un triángulo y calcule
# el valor de su área y perímetro. Recuerda que el área A de un triángulo puede calcularse a
# partir de sus tres lados, a, b y c, así: A = √(s(s − a)(s − b)(s − c)), donde s = (a + b + c)/2.
# (Prueba que tu programa funciona correctamente con este ejemplo: si los lados miden 3, 5 y 7,
# el perímetro será 15.0 y el área 6.49519052838

a = float(input(f'Bienvenido al programa, introduce el primer lado: '))
b = float(input(f'Ahora introduce el segundo lado: '))
c = float(input(f'Y para terminar introduce el tercer lado: '))

# Calcular valores
perimetro = a + b + c
s = perimetro / 2
area = sqrt(s * (s - a)*(s - b)*(s - c))

# Mostrar resultados y redondear a 2 decimales
print(f'\nLos lados del triángulo son {a}, {b} y {c}')
print(f'El área del triángulo es {area}')
print(f'El perímetro del triángulo es {round(perimetro, 2)}')