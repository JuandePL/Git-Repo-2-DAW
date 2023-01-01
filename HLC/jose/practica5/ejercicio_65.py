# 65. Diseña un programa que, dados dos números enteros, muestre por pantalla uno
# de estos mensajes: "El segundo es el cuadrado del primero",
# "El segundo es menor que el cuadrado del primero", o bien "El segundo es mayor que el cuadrado del primero",
# dependiendo de la verificación de la condición correspondiente al significado de cada mensaje.

num1 = int(input("Introduzca un numero entero: "))
num2 = int(input("Introduzca otro numero entero: "))

if num2 == num1 ** 2:
    print("El segundo es el cuadrado del primero")
elif num2 < num1 ** 2:
    print("El segundo es menor que el cuadrado del primero")
else:
    print("El segundo es mayor que el cuadrado del primero")