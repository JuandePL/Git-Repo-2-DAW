# 58. Diseña un programa que lea un número flotante por teclado y muestre por pantalla
# el mensaje "El numero es positivo." solo si el número es mayor o igual que cero.

numero = float(input(f'Bienvenido al programa, introduce un número: '))

if (numero >= 0):
    print("\nEl número es positivo.")

print("Gracias por usar el programa.")