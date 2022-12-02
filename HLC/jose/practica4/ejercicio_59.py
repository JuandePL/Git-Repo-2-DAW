# 59. Diseña un programa que lea la edad de dos personas y diga quién es más joven, la
# primera o la segunda. Ten en cuenta que ambas pueden tener la misma edad. En tal caso, hazlo
# saber con un mensaje adecuado.

edad1 = float(input(f'Bienvenido al programa, introduce la edad de la primera persona: '))
edad2 = float(input(f'Ahora introduce la edad de la segunda persona: '))

if (edad1 > edad2):
    print("\nLa persona 1 es MAYOR que la persona 2.")
elif (edad1 < edad2):
    print("\nLa persona 1 es MENOR que la persona 2.")
else:
    print("\nLas dos personas tienen la misma edad.")

print("\nGracias por usar el programa.")