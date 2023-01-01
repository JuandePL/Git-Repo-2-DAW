# 63. Diseña un programa que, dado un número entero, muestre por pantalla el mensaje
# "El numero es par" cuando el número sea par y el mensaje "El numero es impar" cuando sea impar.
# (Una pista: un número es par si el resto de dividirlo por 2 es 0, e impar en caso contrario).

numero = int(input("Bienvenido al programa, introduzca un numero entero: "))

if (numero % 2 == 0):
    print("El numero es par")
else:
    print("El numero es impar")