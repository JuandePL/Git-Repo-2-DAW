# Escribir por pantalla un programa que pida al usuario un número entero
# y muestre por pantalla si es par o impar.
number = int(input("Introduce un número: "))

if number % 2 == 0:
    print("El número es par.")
else:
    print("El número es impar.")