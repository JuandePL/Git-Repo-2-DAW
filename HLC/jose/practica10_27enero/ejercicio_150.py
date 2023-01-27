# Diseña un programa que lea una cadena y muestre el número de espacios en blanco
# que contiene.

cadena = input(
    "Introduce un texto para averiguar cuantos espacios en blanco tiene: ")

# Sin funcion count
# espacios = 0
# for i in cadena:
#     if i == " ":
#         espacios+1

espacios = cadena.count(" ")
# Imprimir con operador ternario
print(f'La cadena introducida tiene {espacios}', end=" ")
print('espacio' if espacios == 1 else 'espacios')