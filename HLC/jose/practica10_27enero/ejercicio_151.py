# 151. Diseña un programa que lea una cadena y muestre el número de letras mayúsculas
# que contiene.

cadena = input(
    "Introduce un texto para averiguar cuantos espacios en blanco tiene: ")

# Bucle para recorrer caracteres
mayusculas = 0
for i in cadena:
    if i.isupper():
        mayusculas += 1

# Imprimir con operador ternario
print(f'La cadena introducida tiene {mayusculas}', end=" ")
print('mayúscula' if mayusculas == 1 else 'mayúsculas')
