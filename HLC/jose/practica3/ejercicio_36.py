# 36. Diseña un programa que pida el valor de los dos lados de un rectángulo y muestre
# el valor de su perímetro y el de su área. (Prueba que tu programa funciona correctamente con
# este ejemplo: si un lado mide 1 y el otro 5, el perímetro será 12.0, y el área 5.0).

base = float(input(f'Bienvenido al programa, introduce la base del rectángulo: '))
altura = float(input(f'Ahora introduce la altura del rectángulo: '))

# Calcular area y perimetro
area = base * altura
perimetro = (base * 2) + (altura * 2)

# Mostrar resultados y redondear a 2 decimales
print(f'\nLos lados del rectángulo son {base} y {altura}')
print(f'El área del rectángulo es {round(area, 2)}')
print(f'El perímetro del rectángulo es {round(perimetro, 2)}')