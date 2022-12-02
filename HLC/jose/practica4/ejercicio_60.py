# 60. Diseña un programa que lea un carácter de teclado y muestre por pantalla el mensaje
# "Es paréntesis" solo si el carácter leído es un paréntesis abierto o cerrado.

caracter = input(f'Bienvenido al programa, introduce un carácter: ')

# Compruebo si el input tiene un caracter
if (len(caracter) == 1):
    if (caracter == "("):
        print("\nHas introducido un paréntesis abierto.")
    elif (caracter == ")"):
        print("\nHas introducido un paréntesis cerrado.")
    else:
        print("\nTu carácter no es un paréntesis.")
else:
    print("\nHas introducido más de un carácter")

print("\nGracias por usar el programa.")