# 57. Diseña un programa que lea un número flotante por teclado y muestre por pantalla
# el mensaje "El numero es negativo." solo si el número es menor que cero.

numero = float(input(f'Bienvenido al programa, introduce un número: '))

if (numero < 0):
    print("\nEl número es negativo.")

print("Gracias por usar el programa.")