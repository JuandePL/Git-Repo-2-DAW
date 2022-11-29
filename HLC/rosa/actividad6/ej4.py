# Modifica los ejercicios 4 y 5 de la ACTIVIDAD_5
# y define captura de errores con TRY EXCEPT en caso de que el usuario
# no introduzca correctamente los datos en el programa.
# Vuelve a mandar el código con las modificaciones.

# 4.- Realiza una función que pida dos números al usuario y
# devuelva el producto de dichos números.


def getProducto(num1, num2):
    return num1 * num2


print("Bienvenido al programa, aquí podrás calcular el producto de dos números.")

while True:
    try:
        num1 = int(input("Introduce el primer numero: "))
        num2 = int(input("Introduce el segundo numero: "))
    except ValueError:
        print("\nEl valor introducido no es válido.\n")
    else:
        print(f'\nEl producto de {num1} y {num2} es igual a {getProducto(num1, num2)}')
        break
